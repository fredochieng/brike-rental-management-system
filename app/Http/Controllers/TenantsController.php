<?php

namespace App\Http\Controllers;

use App\Models\Tenants;
use App\Models\Property;
use App\Models\Rooms;
use App\Models\RoomAssignment;
use App\Models\Variation;
use App\Models\Transaction;
use App\Models\MonthlyPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Kamaln7\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use DB;
use Carbon\Carbon;
use DateInterval;
use DatePeriod;
use DateTime;

class TenantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $t_status = 1;
        $room_assigned = 1;
        $data['property'] = Property::getProperty();
        $data['tenants'] = Tenants::getTenants()->where('t_status', $t_status)->where('room_assigned', $room_assigned);
        $data['searched_tenants'] = array();
        $property_id = Input::get('property_id');
        $t_status = Input::get('t_status');

        /** Get the search value and perform the neccessary queries */
        if (isset($_GET['property_id'])) {

            $data['searched'] = 'yes';

            if ($t_status == 1) {
                $room_assigned = 1;
                $r_end_date = '';
                $data['searched_tenants'] = Tenants::getTenants()->where('property_id', $property_id)->where('t_status', $t_status)
                    ->where('room_assigned', $room_assigned)->where('r_end_date', '=', $r_end_date);
                    
            } else {
                $room_assigned = 0;
                $r_end_date = !'';
                $data['searched_tenants'] = Tenants::getTenants()->where('property_id', $property_id)->where('t_status', $t_status)
                    ->where('room_assigned', $room_assigned);

            }

            return view('tenants.index')->with($data);
        }
        $data['searched'] = 'no';

        return view('tenants.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $data['property'] = Property::getProperty();

        return view('tenants.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $t_property_id = $request->input('t_property_id');
        $t_name = ucwords(($request->input('t_name')));
        $t_id_no = ucwords($request->input('t_id_no'));
        $t_phone = $request->input('t_phone');
        $t_alt_phone = $request->input('t_alt_phone');
        $t_email = $request->input('t_email');

        $new_t_phone = str_replace('(', '', $t_phone);
        $new_t_phone = str_replace('+', '', $new_t_phone);
        $new_t_phone = str_replace(')', '', $new_t_phone);
        $new_t_phone = str_replace('-', '', $new_t_phone);
        $new_t_phone = str_replace(' ', '', $new_t_phone);

        $tenant = new Tenants();
        $tenant->t_id_no = $t_id_no;
        $tenant->t_name = $t_name;
        $tenant->t_phone = $new_t_phone;
        $tenant->t_alt_phone = $t_alt_phone;
        $tenant->t_email = $t_email;
        $tenant->t_property_id = $t_property_id;

        $tenant->save();
        Toastr::success('Tenant added successfully');
        return back();
    }

    /** Not sure where this function is being used */

    public function searchTenants(Request $request)
    {
        $property_id = Input::get('property_id');
        $data['searched_clients'] = Tenants::getTenants()->where('property_id', $property_id);
    }

    public function manageTenant(Request $request, $tenant_id)
    {
        $data['currency_symbol'] = 'KES';
        $data['tenant'] = Tenants::getTenants()->where('tenant_id', $tenant_id)->first();
        $data['room_assignment'] = RoomAssignment::getRoomAssignments()->where('tenant_id', $tenant_id)->first();
        if (!empty($data['room_assignment'])) {

            $room_id = $data['room_assignment']->room_id;
        }

        /** To get actual payment for the tenant, the msisdn must be the same as t_phone
         * This means that the tenant must pay with his/her phone number
         * Another option would be to confirm payment that dont much any tenant, & update
         * t_phone column in the rent payments table with the t_phone & use it to search the tenant
         */
        $data['payments'] = Transaction::getPayments()
            ->where('phone_no', $data['tenant']->t_phone);

        $t_phone = $data['tenant']->t_phone;
        $data['sum_tot_payments'] = Transaction::getTenantTotalPayments($t_phone);

        $payment_amount = array();
        foreach ($data['sum_tot_payments'] as $key => $value) {
            $payment_amount[] = $value->trans_amount;
        }

        if (!empty($payment_amount)) {

            $data['sum_tot_payments'] =  number_format(json_encode(array_sum($payment_amount)), 2, '.', ',');
        } else {
            $data['sum_tot_payments'] = 0.00;
        }

        $data['sum_rent_payments'] = Transaction::sumTotalRentPayments();

        $payment_amount = array();
        foreach ($data['sum_rent_payments'] as $key => $value) {
            $payment_amount[] = $value->trans_amount;
        }

        if (!empty($payment_amount)) {

            $data['sum_rent_payments'] = number_format(json_encode(array_sum($payment_amount)), 2, '.', ',');
        } else {
            $data['sum_rent_payments'] = 0.00;
        }

        $tenancy_start_date =  Carbon::parse($data['tenant']->r_start_date);
        if ($data['tenant']->t_status == 1) {
            $current_date = Carbon::now();
        } else {
            $current_date = Carbon::parse($data['tenant']->r_end_date);
        }

        $data['tenancy_period'] = $current_date->diffInMonths($tenancy_start_date);

        return view('tenants.manage')->with($data);
    }

    /** Unassign room, end tenancy for the tenant */

    public function unassignRoom(Request $request, $tenant_id)
    {
        $property_id = $request->input('property_id');
        $variation_val_id = $request->input('variation_val_id');
        $room_id = $request->input('room_id');
        $unassign_date = Carbon::now('Africa/Nairobi')->toDateString();
        $unassign_date = new DateTime($unassign_date);
        $unassign_date = $unassign_date->format('M Y');

        /** Update tenants room_assigned and t_status to 0
         * room_assigned => 0 shows that the tenant is not assigned any room
         * t_status => 0 shows that the tenant is now not an active tenant
         */
        $tenant_details = array(
            'room_assigned' => 0,
            't_status' => 0
        );

        $update_tenant = Tenants::where('id', $tenant_id)->update($tenant_details);

        /** Get active room assignment count for the tenant's room 
         * Active room assignenment's r_end_date column is always null
         * If the count is 1, update is_vacant in rooms table to 1,
         * This is basically declaring that the room is now vacant since we only had 1 tenant
         * If the count is greater than 1, the do nothing in rooms table
         * This means that even if 1 tenant has left, there are still tenants to that room, so it's still rented
         * This scenario is seen in hostels where we can have more than 1 tenant
         */
        $room_assignment_count = count(RoomAssignment::getRoomAssignments()
            ->where('room_id', $room_id)->where('r_end_date', ''));

        /** If the count is 1, update is_vacant to 1 
         * Go to variations table, increase vacant_rooms by 1 & decrease rented_rooms by 1
         */

        if ($room_assignment_count == 1) {

            $room_details = array(
                'is_vacant' => 1
            );

            $update_room = Rooms::where('id', $room_id)->update($room_details);

            $variation = Variation::where('property_id', $property_id)->where('variation_value_id', $variation_val_id)->first();

            $vacant_rooms = $variation->vacant_rooms + 1;
            $rented_rooms = $variation->booked_rooms - 1;

            $variation_details = array(
                'vacant_rooms' => $vacant_rooms,
                'booked_rooms' => $rented_rooms
            );

            $update_variation = Variation::where('variation_value_id', $variation_val_id)->where('property_id', $property_id)
                ->update($variation_details);

            /** Update monthly payment tracker rented status to No & payment status to 3 */

            $monthly_track = MonthlyPayment::getMonthlyPaymentsTrack()->where('room_id', $room_id)->where('period', $unassign_date)->first();
            $track_id = $monthly_track->track_id;

            $update_track = array(
                'payment_status' => 3,
                'rented' => 'No'
            );

            $update_monthly_track = MonthlyPayment::where('room_id', $room_id)->where('id', ' >= ', $track_id)
                ->update($update_track);
        }

        /** Update r_end_date in room_assignments table with the exact end date
         * At the moment just update with current date
         * You may want to have a datepicker in the form to capture the date
         */
        $r_end_date = Carbon::now('Africa/Nairobi')->toDateString();

        $room_assignment_details = array(
            'r_end_date' => $r_end_date
        );
        $update_room_assignment = RoomAssignment::where('tenant_id', $tenant_id)->update($room_assignment_details);

        Toastr::success('Room unassigned successfully');
        return back();
    }

    /** Reactivate tenant */
    public function reactivateTenant(Request $request, $tenant_id)
    {
        $t_status = 1;
        $t_data = array(
            't_status' => $t_status
        );
        $reactivate_tenant = Tenants::where('id', $tenant_id)->update($t_data);

        Toastr::success('Tenant reactivated successfully');

        return back();
    }

    public function add_manual_payment(Request $request){

        $payments = new Transaction();
        $payments->trans_type = $request->payment_method;
        $payments->trans_id = $request->trans_id;
        $payments->trans_time = Carbon::now()->toDateTimeString();
        $payments->trans_amount = $request->trans_amount;
        $payments->bus_shortcode = $request->msisdn;
        $payments->bill_ref_no = $request->bill_ref_no;
        $payments->org_account_bal = 1000;
        $payments->msisdn = $request->msisdn;
        $payments->phone_no = $request->msisdn;
        $payments->first_name = $request->first_name;
        $payments->middle_name = $request->first_name;
        $payments->last_name = $request->first_name;
        $payments->payment_method = $request->payment_method;
        $payments->trans_confirmed = 1;

        $exist_trans_id = Transaction::where('trans_id', $request->trans_id)->first();

        if(empty($exist_trans_id)){

            $payments->save();
            Toastr::success('Payment made successfully');

        }else{

            Toastr::error('Transaction ID already saved');
        }

        return back();
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tenants  $tenants
     * @return \Illuminate\Http\Response
     */

    public function show(Tenants $tenants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tenants  $tenants
     * @return \Illuminate\Http\Response
     */

    public function edit(Tenants $tenants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tenants  $tenants
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $tenant_id)
    {
        $now = Carbon::now('Africa/Nairobi')->toDateTimeString();

        /** Get new tenant's data from edit tenant form **/
        $t_name = ucwords(($request->input('t_name')));
        $t_id_no = ucwords($request->input('t_id_no'));
        $t_phone = $request->input('t_phone');
        $t_alt_phone = $request->input('t_alt_phone');
        $t_email = $request->input('t_email');

        $tenant_details = array(
            't_name' => $t_name,
            't_id_no' => $t_id_no,
            't_phone' => $t_phone,
            't_alt_phone' => $t_alt_phone,
            't_email' => $t_email,
        );
        $update_tenant = Tenants::where('id', $tenant_id)->update($tenant_details);

        /** Log the action in the logs file */
        Log::info('Tenant of ID ' . $tenant_id .  ' updated' .
            ' at ' . $now);
        Toastr::success('Tenant updated successfully');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tenants  $tenants
     * @return \Illuminate\Http\Response
     */

    public function destroy(Tenants $tenants)
    {
        //
    }
}
