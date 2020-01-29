@extends('layout.master')
@section('title', 'Calendar')
@section('parentPageTitle', 'App')


@section('content')

<div class="row clearfix">
    <div class="col-lg-8">
        <div class="card">
            <div class="body">
                <div id="calendar"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="body">
                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addevent">Add New Event</button>
            </div>
        </div>
        <div class="card profile-header">
            <div class="body">
                <div class="text-center">
                    <img src="{{asset('assets/img/user.png')}}" class="rounded-circle m-b-15" alt="">
                    <div>
                        <h4 class="m-b-0"><strong>Alizee</strong> Thomas</h4>
                        <span>Washington, d.c.</span>
                    </div>
                    <div class="progress progress-xs m-b-25 m-t-25">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 89%;">
                            <span class="sr-only">60% Complete</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <h6>17</h6>
                            <span>Completed</span>
                        </div>
                        <div class="col-4">
                            <h6>34</h6>
                            <span>ToDo</span>
                        </div>
                        <div class="col-4">
                            <h6>78</h6>
                            <span>All Tasks</span>
                        </div>
                    </div>
                </div>
                <hr>
                <span class="badge badge-default mb-2">Marketing</span>
                <span class="badge badge-primary mb-2">Design Task</span>
                <span class="badge badge-success mb-2">Development</span>
                <span class="badge badge-info mb-2">Finance</span>
                <span class="badge badge-warning mb-2">Meeting</span>
                <span class="badge badge-danger mb-2">Conference</span>
                <hr>
                <h6>Team</h6>
                <ul class="list-unstyled team-info m-t-20">                                
                    <li><img src="{{asset('assets/img/xs/avatar1.jpg')}}" title="Avatar" alt="Avatar"></li>
                    <li><img src="{{asset('assets/img/xs/avatar2.jpg')}}" title="Avatar" alt="Avatar"></li>
                    <li><img src="{{asset('assets/img/xs/avatar3.jpg')}}" title="Avatar" alt="Avatar"></li>
                    <li><img src="{{asset('assets/img/xs/avatar4.jpg')}}" title="Avatar" alt="Avatar"></li>
                    <li><img src="{{asset('assets/img/xs/avatar5.jpg')}}" title="Avatar" alt="Avatar"></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addevent" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Add Event</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="form-line">
                        <input type="number" class="form-control" placeholder="Event Date">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" class="form-control" placeholder="Event Title">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <textarea class="form-control no-resize" placeholder="Event Description..."></textarea>
                    </div>
                </div>       
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Add</button>
                <button type="button" class="btn btn-simple" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
@stop
