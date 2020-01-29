<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Tenants;
use App\Models\PropertyCategories;
use App\Models\PropertyVariations;
use App\Models\Variation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Kamaln7\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Log;
use DB;
use Carbon\Carbon;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['property'] = Property::getProperty();
        return view('property.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = PropertyCategories::getPropertyCategories();
        $data['property_variations'] = PropertyVariations::getPropertyVariations();
        return view('property.create')->with($data);
    }

    public function test(Request $request){
        if ($request->ajax()){
    		dd("Fredrik");
             $property = new Property();
              $p_name = strtoupper($request->input('p_name'));

    		return response($property);
    	}else{
            dd("ggggj");
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $now = Carbon::now('Africa/Nairobi')->toDateTimeString();

        /** Get property data from create property form **/
        $p_name = ucwords($request->input('p_name'));
        $p_category = $request->input('p_category_id');
        $p_location = ucwords($request->input('p_location'));
        $c_name = ucwords($request->input('c_name'));
        $c_phone = $request->input('c_phone');
       // $p_type = $request->input('p_type'); // single or variable
        $v_type = $request->input('v_type'); // variation

        $new_c_phone = str_replace('(', '',$c_phone);
        $new_c_phone = str_replace(')', '',$new_c_phone);
        $new_c_phone = str_replace('-', '',$new_c_phone);
        $new_c_phone = str_replace(' ', '',$new_c_phone);

        /** Save property data in the properties table */
        $property = new Property();
        $property->prop_name = $p_name;
        $property->category_id = $p_category;
        //$property->type_id = $p_type;
        $property->location = $p_location;
        $property->c_name = $c_name;
        $property->c_phone = $new_c_phone;

        $property->save();

        $just_saved_property_id = $property->id;

        /** Save property variation data */

        $v_name = $request->input('v_name');
        $rooms = $request->input('rooms');
        $rent = $request->input('rent');

        /** Save room variations in room_variations table */
         $prop_variations = array(
                'variation_temp_id' => $v_type,
                'property_id' => $just_saved_property_id
            );
        $save_prop_variations = DB::table('property_variations')->insertGetId($prop_variations);

        /** Save property variations in the variations table */
        $variations = new Variation();
        $variations->product_id = $just_saved_property_id;
        $variations->property_variation_id = $v_type;

        if (count($rooms) > count($rent))
            $count = count($rent);
        else $count = count($rooms);

        for ($i = 0; $i < $count; $i++) {
            $data = array(
                'property_id' => $just_saved_property_id,
                'property_variation_id' => 1,
                'variation_value_id' => $v_type,
                'var_name' => $v_name[$i],
                'tot_rooms' => $rooms[$i],
                'vacant_rooms' => $rooms[$i],
                'booked_rooms' => 0,
                'monthly_rent' => $rent[$i]
            );
            $insertData[] = $data;
        }

        Variation::insert($insertData);

        /** Log the action in the logs file */
        Log::info("Property of ID " . $just_saved_property_id .  " created by user of ID: " . Auth::id() .
         " Name " . Auth::user()->name . " at " . $now);
        Toastr::success('Property created successfully');

        return back();

    }

     public function manageProperty(Request $request, $property_id)
    {
        $t_status = 1;
        $data['property'] = Property::getProperty()->where('property_id', $property_id)->first();
        $data['variation_values'] = Variation::getVariationValues($property_id);
        $data['tenants'] = Tenants::getTenants()->where('property_id', $property_id)->where('t_status', $t_status);

        $total_rooms = array();
        $rented_rooms = array();
        $vacant_rooms = array();

         foreach ($data['variation_values'] as $key => $value) {
            $total_rooms[] = $value->tot_rooms;
            $rented_rooms[] = $value->booked_rooms;
            $vacant_rooms[] = $value->vacant_rooms;
        }
        $data['sum_total_rooms'] = array_sum($total_rooms);
        $data['sum_total_rented_rooms'] = array_sum($rented_rooms);
        $data['sum_total_vacant_rooms'] = array_sum($vacant_rooms);

        $data['tot_variations'] = count($data['variation_values']);
        $data['tot_tenants'] = count($data['tenants']);

        $data['currency_symbol'] = 'KES';

       return view('property.manage')->with($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property_id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        //
    }
}
