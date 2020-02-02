@extends('layout.master')
@section('title', 'Rooms Listing')
@section('parentPageTitle', 'Rooms')

@section('content')

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <a href="#addRoomModal" data-toggle="modal" data-target="#addRoomModal"
                    class="btn btn-info pull-right"><i class="icon-plus"></i> ADD ROOM
                </a>
            </div>
            <div class="body">
                <div class="table-responsive" style="font-size:13px">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Property</th>
                                <th>Room Type</th>
                                <th>Room Number</th>
                                <th>Max. Occupants</th>
                                <th>Vacant</th>
                                <th>Room Status</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach ($rooms as $count => $room)
                        <tr>
                            <td>{{ $count + 1 }}</td>
                            <td>{{ $room->prop_name }}</td>
                            <td>{{ $room->var_name }}</td>
                            <td>{{ $room->room_no }}</td>
                            @if ($room->max_occupants == 1)
                            <td>{{ $room->max_occupants }} Person</td>
                            @elseif($room->max_occupants > 1)
                            <td>{{ $room->max_occupants }} People</td>
                            @elseif($room->max_occupants == 'No max')
                            <td>No maximum number</td>
                            @endif
                            @if ($room->is_vacant == 1)
                            <td><span class="badge badge-success">Yes</span></td>
                            @else
                            <td><span class="badge badge-danger">No</span></td>
                            @endif

                            @if ($room->room_status == 1)
                            <td><span class="badge badge-success">Active</span></td>
                            @else
                            <td><span class="badge badge-danger">Inactive</span></td>
                            @endif
                            <td>{{ $room->r_created_at }}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" title="Edit " href="#" data-toggle="modal"
                                    data-target="#editRoomModal_{{$room->room_id}}" data-backdrop="static"
                                    data-keyboard="false"><i class="icon-pencil"></i></a>
                                <a class="btn btn-danger btn-sm" title="Delete " href="#" data-toggle="modal"
                                    data-target="#deleteRoomModal_{{$room->room_id}}" data-backdrop="static"
                                    data-keyboard="false"><i class="icon-trash"></i></a>
                            </td>
                        </tr>
                        @include('rooms.modals.modal-edit-room')
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('rooms.modals.modal-add-room')
@stop