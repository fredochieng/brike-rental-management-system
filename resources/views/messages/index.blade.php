@extends('layout.master')
@section('title', 'SMS Listing')
@section('parentPageTitle', 'SMS')

@section('content')
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            {!! Form::open(['url' => action('MessageController@index'), 'method' => 'get'])
            !!}
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <label>Search sms by property</label>
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
                            <select class="custom-select" name="message_status">
                                <option value="">Select SMS status</option>
                                <option value='1'>Pending</option>
                                <option value='2'>Sent</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-search"></i>
                                <span>Search SMS</span></button>
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
            <div class="body">
                <div class="table-responsive" style="font-size:12px">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Property</th>
                                <th>Room Number</th>
                                <th>Message Title</th>
                                <th>Phone Number</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>Sent At</th>
                            </tr>
                        </thead>
                        @foreach ($messages as $count => $sms)
                        <tr>
                            <td>{{ $count + 1 }}</td>
                            @if ($sms->prop_name == '')
                            <td>Not available</td>
                            @else
                            <td>{{ $sms->prop_name }}</td>
                            @endif
                            @if ($sms->room_no == '')
                            <td>Not available</td>
                            @else
                            <td>{{ $sms->room_no }}</td>
                            @endif
                            <td>{{ $sms->message_title }}</td>
                            <td>{{ $sms->phone_no }}</td>
                            <td><a href="#modalViewMessage_{{ $sms->message_id }}" data-toggle="modal"
                                    data-target="#modalViewMessage_{{ $sms->message_id }}"
                                    class="btn btn-info btn-sm"><i class="icon-eye"></i>
                                    View Message
                                </a></td>
                            @if ($sms->message_status == 1)
                            <td><span class="badge badge-warning">Pending</span></td>
                            @elseif($sms->message_status == 2)
                            <td><span class="badge badge-success">Sent</span></td>
                            @endif
                            @if ($sms->message_status == 1)
                            <td>Not available</td>
                            @elseif($sms->message_status == 2)
                            <td>{{ $sms->sent_at }}</td>
                            @endif
                        </tr>
                        <!-- Modal to view message -->
                        <div class="modal fade" id="modalViewMessage_{{ $sms->message_id }}" tabindex="-1" role="dialog"
                            data-backdrop="static" data-keyboard="false">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="title">Message to {{ $sms->t_name }} ({{ $sms->t_phone }})
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            Message sent at {{ $sms->sent_at }}
                                        </h6>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <p>{{ $sms->message }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger pull-left"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End modal view message -->
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
            <div class="body">
                <div class="table-responsive" style="font-size:12px">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Property</th>
                                <th>Room Number</th>
                                <th>Message Title</th>
                                <th>Phone Number</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>Sent At</th>
                            </tr>
                        </thead>
                        @foreach ($messages as $count => $sms)
                        <tr>
                            <td>{{ $count + 1 }}</td>
                            @if ($sms->prop_name == '')
                            <td>Not available</td>
                            @else
                            <td>{{ $sms->prop_name }}</td>
                            @endif
                            @if ($sms->room_no == '')
                            <td>Not available</td>
                            @else
                            <td>{{ $sms->room_no }}</td>
                            @endif
                            <td>{{ $sms->message_title }}</td>
                            <td>{{ $sms->phone_no }}</td>
                            <td><a href="#modalViewMessage_{{ $sms->message_id }}" data-toggle="modal"
                                    data-target="#modalViewMessage_{{ $sms->message_id }}"
                                    class="btn btn-info btn-sm"><i class="icon-eye"></i> View Message
                                </a></td>
                            @if ($sms->message_status == 1)
                            <td><span class="badge badge-warning">Pending</span></td>
                            @elseif($sms->message_status == 2)
                            <td><span class="badge badge-success">Sent</span></td>
                            @endif
                            @if ($sms->message_status == 1)
                            <td>Not available</td>
                            @elseif($sms->message_status == 2)
                            <td>{{ $sms->sent_at }}</td>
                            @endif
                        </tr>
                        <!-- Modal to view message -->
                        <div class="modal fade" id="modalViewMessage_{{ $sms->message_id }}" tabindex="-1" role="dialog"
                            data-backdrop="static" data-keyboard="false">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="title">Message to {{ $sms->t_name }} ({{ $sms->t_phone }})
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            Message sent at {{ $sms->sent_at }}
                                        </h6>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <p>{{ $sms->message }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger pull-left"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End modal view message -->
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@stop