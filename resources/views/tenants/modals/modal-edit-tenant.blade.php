<div class="modal fade" id="editTenantModal_{{ $item->tenant_id }}" tabindex="-1" role="dialog" data-backdrop="static"
    data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Edit Tenant- {{ $item->t_name }}</h6>
            </div>

            {!!
            Form::open(['action'=>['TenantsController@update',$item->tenant_id],'method'=>'POST'])
            !!}

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('Tenant Name *') !!}
                            <div class="form-group">
                                {{Form::text('t_name', $item->t_name, ['class' => 'form-control',
                                'required' ])}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('ID/Reg Number *') !!}
                            <div class="form-group">
                                {{Form::text('t_id_no', $item->t_id_no, ['class' => 'form-control',
                                'required' ])}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('Phone Number *') !!}
                            <div class="form-group">
                                {{Form::text('t_phone', $item->t_phone, ['class' => 'form-control',
                                'required' ])}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('Alt. Phone Number *') !!}
                            <div class="form-group">
                                {{Form::text('t_alt_phone', $item->t_alt_phone, ['class' => 'form-control',
                                'required' ])}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('Email Address *') !!}
                            <div class="form-group">
                                {{Form::text('t_email', $item->t_email, ['class' => 'form-control',
                                'required' ])}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success"><i class="icon-check"></i> Update tenant</button>
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>