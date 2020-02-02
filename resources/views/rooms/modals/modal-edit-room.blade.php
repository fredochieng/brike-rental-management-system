<div class="modal fade" id="editRoomModal_{{ $room->room_id }}" tabindex="-1" role="dialog" data-backdrop="static"
    data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title">Edit Room</h6>
            </div>

            {!!
            Form::open(['action'=>['RoomsController@update',$room->room_id],'method'=>'POST'])
            !!}
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone" class="control-label">Property <span class="text-danger">*</span></label>
                            <select class="custom-select" name="property_id" disabled required>
                                <option value="{{ $room->prop_id }}">{{ $room->prop_name }}</option>
                                @foreach($property as $item)
                                <option value='{{ $item->property_id }}'>{{ $item->prop_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone" class="control-label">Variation <span
                                    class="text-danger">*</span></label>
                            <select class="custom-select" name="variation_val_id" disabled required>
                                <option value="{{ $room->var_val_id }}">{{ $room->var_name }}</option>
                                @foreach($property as $item)
                                <option value='{{ $item->property_id }}'>{{ $item->prop_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone-ex" class="control-label">Room Number <span
                                    class="text-danger">*</span></label>
                            <div class="form-group">
                                {{Form::text('room_no', $room->room_no, ['class' => 'form-control', 'required', 'placeholder' => 'Enter room number' ])}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone" class="control-label">Maximum Occupants <span
                                    class="text-danger">*</span></label>
                            <select class="custom-select" name="max_occupants" required>
                                <option value="{{$room->max_occupants}}">{{$room->max_occupants}}</option>
                                <option value='1'>1 person</option>
                                <option value='2'>2 people</option>
                                <option value='3'>3 people</option>
                                <option value='4'>4 people</option>
                                <option value='5'>5 people</option>
                                <option value='6'>6 people</option>
                                <option value='7'>7 people</option>
                                <option value='8'>8 people</option>
                                <option value='9'>9 people</option>
                                <option value='No max'>No maximum number</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success"><i class="icon-check"></i> Update Room</button>
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>