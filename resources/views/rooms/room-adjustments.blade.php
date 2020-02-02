@extends('layout.master')
@section('title', 'Room Adjustments')
@section('parentPageTitle', 'Rooms')

@section('content')

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
                            @foreach ($room_adjustments as $r_adjustments)
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
@include('rooms.modals.modal-room-adjustment')
@stop