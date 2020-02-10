@extends('layout.master')
@section('title', 'Room Adjustments')
@section('parentPageTitle', 'Rooms')

@section('content')
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            {!! Form::open(['url' => action('RoomAdjustmentController@index'), 'method' => 'get'])
            !!}
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <label>Search rooms by property</label>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="form-group">
                            <select class="custom-select" name="property_id" required>
                                <option value="">Select property</option>
                                @foreach($property as $item)
                                <option value='{{ $item->property_id }}'>{{ $item->prop_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-search"></i>
                                <span>Search rooms adjustments</span></button>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@if($searched == 'yes')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <a href="#adjustRoomModal" data-toggle="modal" data-target="#adjustRoomModal"
                    class="btn btn-info pull-right"><i class="icon-plus"></i> ADD ROOM ADJUSTMENT
                </a>
            </div>
            <div class="body">
                <div class="table-responsive" style="font-size:10px">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Property</th>
                                <th>Variation</th>
                                <th>Quantity</th>
                                <th>Initial Tot. Rooms</th>
                                <th>New Tot. Rooms</th>
                                <th>Initial Vacant Rooms</th>
                                <th>New Vacant Rooms</th>
                                <th>Initial Rented Rooms</th>
                                <th>New Rented Rooms</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($searched_adjustments as $r_adjustments)
                            <tr>
                                <td>{{ $r_adjustments->prop_name }}</td>
                                <td>{{ $r_adjustments->var_name }}</td>
                                <td>{{ $r_adjustments->adjustment_qty }}</td>
                                <td>{{ $r_adjustments->init_tot_rooms }}</td>
                                <td>{{ $r_adjustments->new_tot_rooms }}</td>
                                <td>{{ $r_adjustments->init_vac_rooms }}</td>
                                <td>{{ $r_adjustments->new_vac_rooms }}</td>
                                <td>{{ $r_adjustments->init_ren_rooms }}</td>
                                <td>{{ $r_adjustments->new_ren_rooms }}</td>
                                <td>{{ $r_adjustments->r_adjustments_date }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@include('rooms.modals.modal-room-adjustment')
@stop