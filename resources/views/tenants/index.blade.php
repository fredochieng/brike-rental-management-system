@extends('layout.master')
@section('title', 'Tenant Listing')
@section('parentPageTitle', 'Tenants')

@section('content')

<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            {!! Form::open(['url' => action('TenantsController@index'), 'method' => 'get'])
            !!}
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <label>Search tenants by property</label>
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
                            <select class="custom-select" name="t_status" required>
                                <option value="">Select tenant status</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-search"></i>
                                <span>Search tenants</span></button>
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
            <div class="body">
                <div class="table-responsive" style="font-size:10px">
                    <table class="table table-bordered table-hover dataTable js-exportable" style="font-size:13px">
                        <thead>
                            <tr style="font-size:12px">
                                <th>Name</th>
                                <th>ID/Reg No</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Property</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($searched_tenants as $count => $item)
                            <tr>
                                <td>{{ $item->t_name }}</td>
                                <td>{{ $item->t_id_no }}</td>
                                <td>{{ $item->t_phone }}</td>
                                @if ($item->t_email == '')
                                <td>Not Available</td>
                                @else
                                <td>{{ $item->t_email }}</td>
                                @endif
                                <td>{{ $item->prop_name }}</td>
                                <td>{{ $item->t_created_at }}</td>
                                <td>
                                    <div class="btn-group btn-group-sm role=" group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item" href="/tenant/manage/&id={{$item->tenant_id}}"><i
                                                    class="icon-eye"></i> View
                                                tenant</a>
                                            @if ($item->t_tenant_id == '')
                                            <a class="dropdown-item" href="#" data-toggle="modal" disabled
                                                data-target="deleteTenantModal_{{$item->tenant_id}}"
                                                data-backdrop="static" data-keyboard="false"><i class="icon-trash"></i>
                                                Delete
                                                tenant</a>
                                            @else

                                            @endif
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @include('tenants.modals.modal-edit-tenant')
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
            <div class="body">
                <div class="table-responsive" style="font-size:10px">
                    <table class="table table-bordered table-hover dataTable js-exportable" style="font-size:13px">
                        <thead>
                            <tr style="font-size:12px">
                                <th>Name</th>
                                <th>ID/Reg No</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Property</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>No records</td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@stop