<?php

namespace App\Http\Controllers;

use App\Models\PropertyCategories;
use Illuminate\Http\Request;
use App\Models\Property;
use Illuminate\Support\Facades\Auth;
use Kamaln7\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Log;
use DB;
use Carbon\Carbon;

class PropertyCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     /** Property categories listing */
    public function index()
    {
        $data['property_categories'] = PropertyCategories::getPropertyCategories();
        return view('property.categories.index')->with($data);
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
        $category_name = ucwords($request->input('category_name'));

        $category = new PropertyCategories();
        $category->category_name = $category_name;

        $category->save();

          /** Log the action in the logs file */
        Log::info("Property category of ID " . $category->id .  " created by user of ID: " . Auth::id() .
         " Name " . Auth::user()->name . " at " . $now);
        Toastr::success('Category created successfully');

        return back();
         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PropertyCategories  $propertyCategories
     * @return \Illuminate\Http\Response
     */
    public function show(PropertyCategories $propertyCategories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PropertyCategories  $propertyCategories
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyCategories $propertyCategories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PropertyCategories  $propertyCategories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PropertyCategories $propertyCategories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PropertyCategories  $propertyCategories
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropertyCategories $propertyCategories)
    {
        //
    }
}
