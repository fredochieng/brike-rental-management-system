@extends('layout.master')
@section('title', 'Create New SMS')
@section('parentPageTitle', 'Messages')

<style>
    .contact_method {
        display: none;
    }

    .counting {
        font-size: 18px;
        padding-top: 10px
    }

    .remain {
        font-weight: bold
    }

    .red {
        color: #ef1616
    }

</style>
@section('content')

{!! Form::open(['url' => action('MessageController@store'), 'method' => 'post'])
!!}
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group">
                            <label for="phone" class="control-label">Property <span class="text-danger">*</span></label>
                            <select class="custom-select" name="property_id" id="sms_property_id" required>
                                <option value="">Select property</option>
                                @foreach($property as $item)
                                <option value='{{ $item->property_id }}'>{{ $item->prop_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group">
                            <label for="phone-ex" class="control-label">Campaign Title <span
                                    class="text-danger">*</span></label>
                            <input type="text" name="c_title" class="form-control" required
                                placeholder="Enter message/campaign title">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group">
                            <label for="phone" class="control-label">Contact Source <span
                                    class="text-danger">*</span></label>
                            <select class="custom-select" name="contact_source" id="contact_list" required>
                                <option value="">Select contacts source</option>
                                <option value="1">Tenant contact list</option>
                                <option value="2">Enter recipient contacts</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4" id="rooms_div" style="display:none">
                        <div class="form-group">
                            <label for="phone" class="control-label">Room Number (Leave empty to select all tenants)
                                <span class="text-danger">*</span></label>
                            <select class="custom-select" name="room_id" id="t_room_id">
                                <option value="">Select room number to select tenants for the room</option>
                                <option value="" disabled="true">Select property first</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12" id="recipient_phones_div" style="display:none">
                        <div class="form-group">
                            {{Form::label('', 'Recipients Phone Numbers with Country Code (Comma separated)')}}<br>
                            <div class="form-group">
                                {{Form::textarea('recepient_contacts', '',['class'=>'form-control', 'rows'=>'2', 'placeholder'=>'Comma separated phone numbers e.g 254724543675,254703546454,254714353435'])}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            {{Form::label('message', 'Message')}} <span class="text-danger">*</span><br>
                            <div class="form-group">
                                {{Form::textarea('message', '',['class'=>'form-control', 'placeholder'=>'Enter message -- Maximum characters - 160'])}}
                                <p class="counting"> <span class="remain">350</span> characters remaining</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <div class="form-group">

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 pull-right">
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-check-circle"></i>
                                <span>Create New SMS</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
@stop