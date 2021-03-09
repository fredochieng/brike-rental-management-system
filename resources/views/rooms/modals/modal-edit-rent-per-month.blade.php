<div class="modal fade" id="EditRentPerMonthModal_{{ $room->room_id }}" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title">Edit Rent Amount Per Month</h6>
            </div>

            {!!
                Form::open(['action'=>['RoomsController@edit_rent_per_month',$room->room_id],'method'=>'POST'])
                !!}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="phone-ex" class="control-label">Month Year <span
                                        class="text-danger">*</span></label>
                                <div class="form-group">
                                    {{Form::text('monthYear', null, ['class' => 'form-control', 'id' => 'datepicker1', 'required', 'placeholder' => 'Select month/year' ])}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="phone-ex" class="control-label">Rent p/mo <span
                                        class="text-danger">*</span></label>
                                <div class="form-group">
                                    {{Form::number('rent_amount', null, ['class' => 'form-control', 'required', 'placeholder' => 'Enter room rent p/mo' ])}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="icon-check"></i> Update Rent</button>
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>