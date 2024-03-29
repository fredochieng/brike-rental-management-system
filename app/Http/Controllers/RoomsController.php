<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use App\Models\Variation;
use App\Models\Property;
use App\Models\Transaction;
use App\Models\RoomAssignment;
use App\Models\MonthlyPayment;
use App\Models\RentPaymentTracker;
use App\Models\VariationValues;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Kamaln7\Toastr\Facades\Toastr;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use DateTime;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['property'] = Property::getProperty();
        $data['rooms'] = Rooms::getRooms();
        $data['vars'] = VariationValues::getVars();

        $data['searched_rooms'] = array();
        $property_id = Input::get('property_id');
        $is_vacant = Input::get('is_vacant');

        if (isset($_GET['property_id']) && isset($_GET['is_vacant'])) {
            $data['searched'] = 'yes';
            $data['searched_rooms'] = Rooms::getRooms()->where('property_id', $property_id)->where('is_vacant', $is_vacant);

            $total_rooms = count($data['searched_rooms']);

            if (count($data['searched_rooms']) == 0) {

                Toastr::info('No rooms found for your query');

                return view('rooms.index')->with($data);
            } elseif (count($data['searched_rooms']) > 0) {

                Toastr::success($total_rooms . ' rooms found for your query');

                return view('rooms.index')->with($data);
            }
        }

        $data['searched'] = 'no';
        return view('rooms.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('rooms.create');
    }

    public function variationValuesSelector()
    {
        //Function to get the variation values based on the selected property
        $property_id = Input::get('property_id');

        $variation_values = Variation::getVariationValues($property_id);

        return response()->json($variation_values);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $property_id = $request->input('property_id');
        $variation_val_id = $request->input('variation_val_id');
        $room_no = strtoupper($request->input('room_no'));
        $max_occupants = $request->input('max_occupants');
        $room_rent = $request->input('room_rent');

        /** Get the total number of added rooms for the selected variation from thr room table */
        $added_rooms_count = count(Rooms::getRooms()->where('property_id', $property_id)
            ->where('variation_val_id', $variation_val_id));

        /** Get the total number of rooms( expected to be added ) for the selected variation from thr variations table */
        $variation_values = Variation::getVariationValues($property_id)->where('variation_value_id', $variation_val_id)->first();
        $total_rooms_count = $variation_values->tot_rooms;

        /** Perform checks to check whether the user shd be allowed to add the room
         * If the added rooms count is less than the total rooms count, then proceed and addd the room
         * Otherwise dont add the room
         */

        if ($added_rooms_count < $total_rooms_count) {

            $room = new Rooms();

            $room->property_id = $property_id;
            $room->variation_val_id = $variation_val_id;
            $room->room_no = $room_no;
            $room->max_occupants = $max_occupants;
            $room->room_rent = $room_rent;

            $room->save();

            Toastr::success('Room added successfully');
            return back();
        } else {

            Toastr::warning('All rooms for the variation have been added');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */

    public function show(Rooms $rooms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */

    public function edit(Rooms $rooms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */

    public function manageRoom(Request $request, $room_id)
    {
        $data['currency_symbol'] = 'KES';
        $data['room'] = Rooms::getRooms()->where('room_id', $room_id)->first();
        $property_id = $data['room']->property_id;
        $data['payments'] = Transaction::getPayments()->where('room_id', $room_id)->where('property_id', $property_id);
        $data['room_assignments'] = RoomAssignment::getRoomAssignments()
            ->where('room_id', $room_id)
            ->where('r_end_date', '');

        $data['tot_tenants'] = count($data['room_assignments']);
        $data['tot_payments'] = Transaction::sumPropertyRentPayments($property_id)->where('room_id', $room_id);

        $payment_amount = array();
        foreach ($data['tot_payments'] as $key => $value) {
            $payment_amount[] = $value->trans_amount;
        }

        if (empty($payment_amount)) {
            $data['tot_payments'] = 0.00;
        } else {
            $data['tot_payments'] = json_encode(array_sum($payment_amount));
        }

        $current_date = Carbon::now()->toDateString();
        $current_date = new DateTime($current_date);
        $current_date = $current_date->format('Y-m-d H:i:s');
        $rented = 'Yes';

        $payment_tracks = MonthlyPayment::getPaymentTracker()->whereIn('payment_status', [2, 3])->where('prop_id', $property_id)
            ->where('room_id', $room_id)->where('formatted_period', '<=', $current_date)->where('rented', $rented);

        $rent_arrears_amount = array();
        foreach ($payment_tracks as $key => $value) {
            $rent_arrears_amount[] = $value->balance_due;
        }

        if (empty($rent_arrears_amount)) {
            $data['rent_arrears_amount'] = 0.00;
        } else {
            $data['rent_arrears_amount'] = number_format(json_encode(array_sum($rent_arrears_amount)), 2, '.', ',');
        }

        return view('rooms.manage')->with($data);
    }

    public function update(Request $request, $room_id)
    {

        $now = Carbon::now('Africa/Nairobi')->toDateTimeString();

        /** Get room data from edit room form **/
        $room_no = strtoupper($request->input('room_no'));
        $max_occupants = $request->input('max_occupants');
        $room_rent = $request->input('room_rent');
        $variation_val_id = $request->input('variation_val_id');

        $room_data = array(
            'room_no' => $room_no,
            'max_occupants' => $max_occupants,
            'room_rent' => $room_rent,
            'variation_val_id' => $variation_val_id
        );
        $update_room = Rooms::where('id', $room_id)->update($room_data);

        /** Log the action in the logs file */
        Log::info('Room of ID ' . $room_id .  ' updated' .
            ' at ' . $now);
        Toastr::success('Room updated successfully');

        return back();
    }

    public function edit_rent_per_month(Request $request, $room_id){

        $month_year = $request->monthYear;
        $rent_amount = $request->rent_amount;

        $month_year = new DateTime($month_year);
        $month_year = $month_year->format('M Y');
        
        $month_rent_array = array(
            'rent_amount' => $rent_amount,
            'balance_due' => $rent_amount
        );

        $update_amount = RentPaymentTracker::where('room_id', $room_id)
        ->where('period', $month_year)->update($month_rent_array);

        Toastr::success('Room rent updated successfully');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */

    public function destroy(Rooms $rooms)
    {
        //
    }
}
