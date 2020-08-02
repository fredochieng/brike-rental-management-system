<?php

namespace App\Http\Controllers;

use App\Models\PropertyVariations;
use App\Models\VariationValues;
use Illuminate\Http\Request;
use App\Models\Variation;
use Illuminate\Support\Facades\Auth;
use Kamaln7\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Log;
use DB;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;

class PropertyVariationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /** Property categories listing */

    public function index()
    {
        $data['property_variations'] = PropertyVariations::getVariationDetails();
        // $data['property_variations'] = PropertyVariations::getPropertyVariations();


        //dd($data['property_variations']);

        return view('property.variations.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
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
        $variation_name = ucwords($request->input('variation_name'));

        $variation = new PropertyVariations();

        $variation->temp_name = $variation_name;
        $variation->save();
        $variation_value = $request->input('variation_value');

        $count = count($variation_value);

        /** Store variation values */
        for ($i = 0; $i < $count; $i++) {
            $data = array(
                'variation_temp_id' => $variation->id,
                'name' => $variation_value[$i]
            );

            $insertData[] = $data;
        }

        VariationValues::insert($insertData);

        /** Log the action in the logs file */
        Log::info('Variation of ID ' . $variation->id .  ' created by user of ID: ' . Auth::id()   . ' at ' . $now);

        Toastr::success('Variation created successfully');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PropertyVariations  $propertyVariations
     * @return \Illuminate\Http\Response
     */

    public function show(PropertyVariations $propertyVariations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PropertyVariations  $propertyVariations
     * @return \Illuminate\Http\Response
     */

    public function edit(PropertyVariations $propertyVariations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PropertyVariations  $propertyVariations
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $variation_id)
    {

        $now = Carbon::now('Africa/Nairobi')->toDateTimeString();

        /** Get property category data from edit property category form **/
        $variation_name = $request->input('variation_name');

        $property_variation = array(
            'temp_name' => $variation_name,
        );
        $update_property_variation = PropertyVariations::where('id', $variation_id)->update($property_variation);

        /** Log the action in the logs file */
        Log::info('Property category of ID ' . $variation_id .  ' updated' .
            ' at ' . $now);
        Toastr::success('Variation updated successfully');

        return back();
    }

    public function updateVariationValue(Request $request, $var_value_temp_id)
    {
        // dd($var_value_temp_id);

        $now = Carbon::now('Africa/Nairobi')->toDateTimeString();

        /** Get property category data from edit property category form **/
        $variation_value_name = $request->input('variation_value_name');

        $variation_value = array(
            'name' => $variation_value_name,
        );
        $update_variation_value = VariationValues::where('id', $var_value_temp_id)->update($variation_value);

        $variation_value1 = array(
            'var_name' => $variation_value_name,
        );
        $update_var = Variation::where('variation_value_id', $var_value_temp_id)->update($variation_value1);


        Toastr::success('Variation value updated successfully');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PropertyVariations  $propertyVariations
     * @return \Illuminate\Http\Response
     */

    public function deleteVariation(Request $request, $variation_id)
    {
        //dd($variation_id);
        $delete_var = PropertyVariations::destroy($variation_id);
        $delete_var_value = VariationValues::where('variation_temp_id', $variation_id)->delete();

        Toastr::success('Variation deleted successfully');

        return back();
    }


    public function destroy(PropertyVariations $propertyVariations)
    {
        //
    }
}
