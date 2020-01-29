@extends('layout.master')
@section('title', 'Create Property')
@section('parentPageTitle', 'Property')


@section('content')

{!! Form::open(['url' => action('PropertyController@store'), 'method' => 'post'])
!!}
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Property Details</h2>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-md-4"> <b>Property Name</b>
                        <input type="text" name="p_name" class="form-control" required
                            placeholder="Enter property name">
                    </div>
                    <div class="col-md-4"> <b>Property Category</b>
                        <div class="input-group mb-3">
                            <select class="custom-select" name="p_category_id">
                                <option value="">Choose property category</option>
                                @foreach($categories as $item)
                                <option value='{{ $item->id }}'>{{ $item->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4"> <b>Location</b>
                        <input type="text" name="p_location" class="form-control" required
                            placeholder="Enter property location">
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-4"> <b>Caretaker Name</b>
                        <input type="text" name="c_name" class="form-control" required
                            placeholder="Enter caretaker name">
                    </div>
                    <div class="col-md-4"> <b>Caretaker Phone</b>
                        <input type="text" name="c_phone" id="phone" class="form-control"
                            placeholder="Enter property phone">
                    </div>
                    {{-- <div class="col-md-4"> <b>Property Type</b>
                        <div class="input-group mb-3">
                            <select class="custom-select" name="p_type">
                                <option value="0" selected>Choose property type</option>
                                <option value="1">Single</option>
                                <option value="2">Variable</option>
                            </select>
                        </div>
                    </div> --}}
                    <div class="col-md-4"> <b>Variation Type</b>
                        <div class="input-group mb-3">
                            <select class="custom-select" name="v_type">
                                <option value="">Choose property variation</option>
                                @foreach($property_variations as $item)
                                <option value='{{ $item->id }}'>{{ $item->temp_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Property Variations</h2>
            </div>
            <div class="body">
                <div class="col-md-1"></div>
                <center>
                    <div class="col-md-10">
                        <div class="table-responsive">
                            <table class="table center-aligned-table">
                                <thead class="thead-success">
                                    <tr>
                                        {{-- <th>Variation Name</th> --}}
                                        <th>Variation Name</th>
                                        <th>Number of Rooms</th>
                                        <th>Rent per month</th>
                                        {{-- <th>Rent per month</th> --}}
                                    </tr>
                                </thead>
                                <tr>
                                    <td><input type="text" name="v_name[]" class="form-control" value="Single Room">
                                    </td>
                                    <td><input type="number" name="rooms[]" class="form-control"
                                            placeholder="Number of rooms"></td>
                                    <td><input type="number" name="rent[]" class="form-control"
                                            placeholder="Rent per month"></td>
                                    {{-- <td><input type="number" name="rent[]" class="form-control"
                                                placeholder="Rent per month"></td>
                                        <td><input type="number" name="rent[]" class="form-control"
                                                placeholder="Rent per month"></td> --}}
                                </tr>
                                <tr>
                                    <td><input type="text" name="v_name[]" class="form-control" value="Bedsitter">
                                    </td>
                                    <td><input type="number" name="rooms[]" class="form-control"
                                            placeholder="Number of rooms"></td>
                                    <td><input type="number" name="rent[]" class="form-control"
                                            placeholder="Rent per month"></td>
                                    {{-- <td><input type="number" name="rent[]" class="form-control"
                                                placeholder="Rent per month"></td>
                                        <td><input type="number" name="rent[]" class="form-control"
                                                placeholder="Rent per month"></td> --}}
                                </tr>
                            </table>
                        </div>
                    </div>
                </center>
                <div class="col-md-1"></div>
                <div class="col-md-2 mb-3 pull-right">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-check-circle"></i> <span>Save
                            property</span></button>
                </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
@stop