@extends('layout.master')
@section('title', 'Room Assignments')
@section('parentPageTitle', 'Rooms')

@section('content')

<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            {!! Form::open(['url' => action('RoomAssignmentController@index'), 'method' => 'get'])
            !!}
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <label>Search room assignments by property</label>
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
                                <span>Search room assignments</span></button>
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
                {{-- <a href="#assignRoomModal" data-toggle="modal" data-target="#assignRoomModal"
                    class="btn btn-info pull-right"><i class="icon-plus"></i> ASSIGN ROOM
                </a> --}}
            </div>
            <div class="body">
                <div class="table-responsive" style="font-size:12px">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Property</th>
                                <th>Variation</th>
                                <th>Room Number</th>
                                <th>Tenant Name</th>
                                <th>Phone</th>
                                <th>Tenancy Start Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($searched_r_assignments as $r_assignments)
                            <tr>
                                <td>{{ $r_assignments->prop_name }}</td>
                                <td>{{ $r_assignments->var_name_value }}</td>
                                <td>{{ $r_assignments->room_no }}</td>
                                <td>{{ $r_assignments->t_name }}</td>
                                <td>{{ $r_assignments->t_phone }}</td>
                                <td>{{ $r_assignments->r_start_date }}</td>
                            </tr>
                            @endforeach
                        </tbody>
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
                {{-- <a href="#assignRoomModal" data-toggle="modal" data-target="#assignRoomModal"
                    class="btn btn-info pull-right"><i class="icon-plus"></i> ASSIGN ROOM
                </a> --}}
            </div>
            <div class="body">
                <div class="table-responsive" style="font-size:12px">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Property</th>
                                <th>Variation</th>
                                <th>Room Number</th>
                                <th>Tenant Name</th>
                                <th>Phone</th>
                                <th>Tenancy Start Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($room_assignments as $count => $r_assignments)
                            <tr>
                                <td>{{ $r_assignments->prop_name }}</td>
                                <td>{{ $r_assignments->var_name_value }}</td>
                                <td>{{ $r_assignments->room_no }}</td>
                                <td>{{ $r_assignments->t_name }}</td>
                                <td>{{ $r_assignments->t_phone }}</td>
                                <td>{{ $r_assignments->r_start_date }}</td>
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

@stop