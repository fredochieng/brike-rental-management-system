<div class="modal fade" id="addAnotherTenantModal" tabindex="-1" role="dialog" data-backdrop="static"
    data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title">Add Another Tenant To Room</h6>
            </div>
            {!! Form::open(['url' => action('RoomAssignmentController@addAnotherTenant'), 'method' => 'post'])
            !!}
            <input type="hidden" name="property_id" id="prop_id" value="{{ $property->property_id }}">
            <input type="hidden" name="category_name" id="prop_id" value="{{ $property->category_name }}">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone" class="control-label">Property Variation <span
                                    class="text-danger">*</span></label>
                            <select class="custom-select" name="variation_val_id" id="variation_val_id1" required>
                                <option value="">Select property variation</option>
                                @foreach($variation_values as $var_val)
                                <option value='{{ $var_val->variation_value_id }}'>{{ $var_val->var_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone" class="control-label">Room Number <span
                                    class="text-danger">*</span></label>
                            <select class="custom-select" name="variation_room_id" id="variation_rooms1" required>
                                <option value="">Select room number</option>
                                <option value="" disabled="true">Select variation first</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone" class="control-label">Tenant <span class="text-danger">*</span></label>
                            <select class="custom-select" name="r_tenant_id" required>
                                <option value="">Select room tenant</option>
                                @foreach($unassigned_tenants as $tenant)
                                <option value='{{ $tenant->tenant_id }}'>{{ $tenant->t_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <label>Room Assignment Date</label>
                        <div class="input-group mb-3">
                            <input data-provide="datepicker" name="r_start_date"
                                placeholder="Choose room assignment date" required data-date-autoclose="true" readonly
                                class="form-control" data-date-format="yyyy/mm/dd">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" id="addTenantRoomBtn" class="btn btn-primary"><i class="icon-check"></i> Add
                    Tenant</button>
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>