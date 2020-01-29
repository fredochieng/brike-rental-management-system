<?php

namespace App\Http\Controllers;

use App\Models\Tenants;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Kamaln7\Toastr\Facades\Toastr;

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
       $data['property'] = Property::getProperty();
       $data['tenants'] = Tenants::getTenants()->where('t_status', $t_status);
       $data['searched_tenants'] =array();
       $property_id = Input::get('property_id');

       /** Get the search value and perform the neccessary queries */
        if (isset($_GET['property_id'])) {
             $t_status = 1;
             $find_by = 'property_id';
             $data['searched'] = 'yes';
             $data['searched_tenants'] = Tenants::getTenants()->where('property_id', $property_id)->where('t_status', $t_status);

             $total_tenants = count($data['searched_tenants']);

            $find_by_value = Input::get('property_id');

            if (count($data['searched_tenants']) == 0) {

                    Toastr::info('No tenants found for your query');

                    return view('tenants.index')->with($data);

            } elseif(count($data['searched_tenants']) > 0){

                    Toastr::success($total_tenants . ' tenants found for your query');
            
                    return view('tenants.index')->with($data);
            }
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
        $t_name = ucwords($request->input('t_name'));
        $t_id_no = ucwords($request->input('t_id_no'));
        $t_phone = $request->input('t_phone');
        $t_alt_phone = $request->input('t_alt_phone');
        $t_email = $request->input('t_email');

        $new_t_phone = str_replace('(', '',$t_phone);
        $new_t_phone = str_replace(')', '',$new_t_phone);
        $new_t_phone = str_replace('-', '',$new_t_phone);
        $new_t_phone = str_replace(' ', '',$new_t_phone);

        $tenant = new Tenants();
        $tenant->t_id_no = $t_id_no;
        $tenant->t_name = $t_name;
        $tenant->t_phone = $new_t_phone;
        $tenant->t_alt_phone =$t_alt_phone;
        $tenant->t_email = $t_email;
        $tenant->t_property_id =$t_property_id;
        $tenant->save();

       Toastr::success('Tenant added successfully');
        return back();
    }

    public function searchTenants(Request $request){
        $property_id = Input::get('property_id');
         $data['searched_clients'] = Tenants::getTenants()->where('property_id', $property_id);
       // $property_id = $request->input('property_id');
         dd($data['searched_clients']);
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
    public function update(Request $request, Tenants $tenants)
    {
        //
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
