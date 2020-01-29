@extends('layout.master')
@section('title', 'Room Assignments')
@section('parentPageTitle', 'Rooms')

@section('content')

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                {{-- <a href="#assignRoomModal" data-toggle="modal" data-target="#assignRoomModal"
                    class="btn btn-info pull-right"><i class="icon-plus"></i> ASSIGN ROOM
                </a> --}}
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Property</th>
                                <th>Room Number</th>
                                <th>Max. Occupants</th>
                                <th>Vacant</th>
                                <th>Room Status</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop