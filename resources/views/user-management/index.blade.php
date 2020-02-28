@extends('layout.master')
@section('title', 'User Listing')
@section('parentPageTitle', 'Users')

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <a href="#addUserModal" data-toggle="modal" data-target="#addUserModal"
                       class="btn btn-info pull-right"><i class="icon-plus"></i> ADD NEW USER
                    </a>
                </div>
                <div class="body">
                    <div class="table-responsive" style="font-size:13px">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $count => $user)
                                <tr>
                                    <td>{{  $count + 1 }}</td>
                                    <td>{{  $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" title="Edit " href="#" data-toggle="modal"
                                           disabled data-target="#editUserModal_{{$user->id}}"
                                           data-backdrop="static" data-keyboard="false"><i class="icon-pencil"></i></a>

                                        <a class="btn btn-danger btn-sm" title="Delete " href="#" data-toggle="modal"
                                           disabled data-target="#deleteUserModal_{{$user->id}}"
                                           data-backdrop="static" data-keyboard="false"><i class="icon-trash"></i></a>
                                    </td>
                                </tr>
                                @include('user-management.modals.modal-edit-user')
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('user-management.modals.modal-add-user')
@stop