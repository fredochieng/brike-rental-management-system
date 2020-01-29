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
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <select class="custom-select" name="property_id" required>
                                <option value="">Select property</option>
                                @foreach($property as $item)
                                <option value='{{ $item->property_id }}'>{{ $item->prop_name }}</option>
                                @endforeach
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
                                <th>#</th>
                                <th>Name</th>
                                <th>ID/Reg Number</th>
                                <th>Phone Number</th>
                                {{-- <th>Alt. Phone Number</th> --}}
                                <th>Email Address</th>
                                <th>Property</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($searched_tenants as $count => $item)
                            <tr>
                                <td>{{ $count + 1 }}</td>
                                <td>{{ $item->t_name }}</td>
                                <td>{{ $item->t_id_no }}</td>
                                <td>{{ $item->t_phone }}</td>
                                {{-- <td>{{ $item->t_alt_phone }}</td> --}}
                                @if ($item->t_email == '')
                                <td>Not Available</td>
                                @else
                                <td>{{ $item->t_email }}</td>
                                @endif
                                <td>{{ $item->prop_name }}</td>
                                <td>{{ $item->t_created_at }}</td>
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
            <div class="body">
                <div class="table-responsive" style="font-size:10px">
                    <table class="table table-bordered table-hover dataTable js-exportable" style="font-size:13px">
                        <thead>
                            <tr style="font-size:12px">
                                <th>#</th>
                                <th>Name</th>
                                <th>ID/Reg Number</th>
                                <th>Phone Number</th>
                                {{-- <th>Alt. Phone Number</th> --}}
                                <th>Email Address</th>
                                <th>Property</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tenants as $count => $item)
                            <tr>
                                <td>{{ $count + 1 }}</td>
                                <td>{{ $item->t_name }}</td>
                                <td>{{ $item->t_id_no }}</td>
                                <td>{{ $item->t_phone }}</td>
                                {{-- <td>{{ $item->t_alt_phone }}</td> --}}
                                @if ($item->t_email == '')
                                <td>Not Available</td>
                                @else
                                <td>{{ $item->t_email }}</td>
                                @endif
                                <td>{{ $item->prop_name }}</td>
                                <td>{{ $item->t_created_at }}</td>
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