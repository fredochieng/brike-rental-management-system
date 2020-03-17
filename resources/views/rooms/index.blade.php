@extends('layout.master')
@section('title', 'Rooms Listing')
@section('parentPageTitle', 'Rooms')

@section('content')
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            {!! Form::open(['url' => action('RoomsController@index'), 'method' => 'get'])
            !!}
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <label>Search rooms by property</label>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
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
                            <select class="custom-select" name="is_vacant" id="is_vacant" required>
                                <option value="">Select room status</option>
                                <option value='1'>Vacant</option>
                                <option value='0'>Rented</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-search"></i>
                                <span>Search rooms</span></button>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@if ($searched == 'yes')
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
                        @foreach ($searched_rooms as $room)
                        <tr>
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
                                <div class="btn-group btn-group-sm role=" group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="/room/manage/&id={{$room->room_id}}"><i
                                                class="icon-eye"></i> View
                                            room</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal" disabled
                                            data-target="#editRoomModal_{{$room->room_id}}" data-backdrop="static"
                                            data-keyboard="false"><i class="icon-pencil"></i>
                                            Edit
                                            room</a>
                                        @if ($room->ra_room_id == '')
                                        <a class="dropdown-item" href=""><i class="icon-trash"></i> Delete
                                            room</a>
                                        @else

                                        @endif

                                    </div>
                                </div>
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
@else
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
                        <tbody>
                            <tr>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@include('rooms.modals.modal-add-room')
@stop