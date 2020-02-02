<div class="modal fade" id="addVariationValueModal_{{ $property->property_id }}" tabindex="-1" role="dialog"
    data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title">Add Variation Value</h6>
            </div>

            {!!
            Form::open(['action'=>['PropertyController@addMoreVariationValues',$property->property_id],'method'=>'POST'])
            !!}

            <div class="modal-body">
                <div class="row">
                    <input type="hidden" name="property_variation_id" value="{{$property_variation_id}}">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone" class="control-label">Property Variation <span
                                    class="text-danger">*</span></label>
                            <select class="custom-select" name="variation_val_id" required>
                                <option value="">Select property variation</option>
                                @foreach($all_variation_values as $var_val)
                                <option value='{{ $var_val->id }}'>{{ $var_val->var_value_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone" class="control-label">Number of rooms <span
                                    class="text-danger">*</span></label>
                            <input type="number" name="rooms" class="form-control" required min="1"
                                placeholder="Enter number of rooms">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone" class="control-label">Rent per month <span
                                    class="text-danger">*</span></label>
                            <input type="number" name="rent" class="form-control" required min="1"
                                placeholder="Enter number rent per month">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" id="assignRoomBtn" class="btn btn-primary"><i class="icon-check"></i> Add
                    variation
                    value</button>
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>