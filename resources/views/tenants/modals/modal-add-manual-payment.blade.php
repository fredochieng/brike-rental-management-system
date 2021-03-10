<div class="modal fade" id="AddManualPayment{{ $tenant->tenant_id }}" tabindex="-1" role="dialog" data-backdrop="static"
    data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">New Manual Payment- {{ $tenant->t_name }}</h6>
            </div>

            {!!
            Form::open(['action'=>['TenantsController@add_manual_payment',$tenant->tenant_id],'method'=>'POST'])
            !!}

            <div class="modal-body">
                <input type="hidden" value="{{ $tenant->t_phone }}" name="msisdn">
                <input type="hidden" value="{{ $tenant->room_no }}" name="bill_ref_no">
                <input type="hidden" value="{{ $tenant->t_name }}" name="first_name">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            {!! Form::label('Payment Method *') !!}
                            <select class="custom-select" name="payment_method" required>
                                <option value="">Select payment method</option>
                                <option value='Mpesa'>Mpesa</option>
                                <option value='Bank'>Bank</option>
                                <option value='Cash'>Cash</option>
                               
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('Transaction Code *') !!}
                            <div class="form-group">
                                {{Form::text('trans_id', null, ['class' => 'form-control', 'placeholder' => 'Mpesa code/bank trans code',
                                'required' ])}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('Transaction Amount *') !!}
                            <div class="form-group">
                                {{Form::number('trans_amount', null, ['class' => 'form-control', 'placeholder' => 'Enter transaction amount',
                                'required', 'min' => '1' ])}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('Phone Number *') !!}
                            <div class="form-group">
                                {{Form::text('t_phone', $tenant->t_phone, ['class' => 'form-control', 'readonly',
                                'required' ])}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('Room Number *') !!}
                            <div class="form-group">
                                {{Form::text('r_no', $tenant->room_no, ['class' => 'form-control', 'readonly',
                                'required' ])}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success"><i class="icon-check"></i> Make Payment</button>
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>