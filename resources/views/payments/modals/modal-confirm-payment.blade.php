<div class="modal fade" id="confirmPaymentModal" tabindex="-1" role="dialog" data-backdrop="static"
     data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title">Confirm payment</h6>
            </div>
            {!! Form::open(['url' => action('TransactionsController@confirmPayment'), 'method' => 'post'])
            !!}
            <input type="hidden" name="transaction_id" value="{{ $payments->transaction_id }}">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone" class="control-label">Property <span
                                        class="text-danger">*</span></label>
                            <select class="custom-select" name="property_id" id="trans_property_id" required>
                                <option value="">Select property</option>
                                @foreach($property as $item)
                                    <option value='{{ $item->property_id }}'>{{ $item->prop_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone" class="control-label">Room Number <span
                                        class="text-danger">*</span></label>
                            <select class="custom-select" name="room_id" id="trans_room_id" required>
                                <option value="">Select room number</option>
                                <option value="0" disabled="true" selected="true">Select property first</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone" class="control-label">Tenant <span
                                        class="text-danger">*</span></label>
                            <select class="custom-select" name="tenant_id" id="trans_tennat_id" required>
                                <option value="">Select tenant</option>
                                <option value="0" disabled="true" selected="true">Select room first</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" id="confirmPaymentBtn" class="btn btn-primary"><i class="icon-check"></i> Confirm
                    Payment
                </button>
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>