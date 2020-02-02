<div class="modal fade" id="editVariationModal_{{ $item->variation_id }}" tabindex="-1" role="dialog"
    data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Edit Property Variation</h6>
            </div>

            {!!
            Form::open(['action'=>['PropertyVariationsController@update',$item->variation_id],'method'=>'POST'])
            !!}

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::label('Variation Name *') !!}
                            <div class="form-group">
                                {{Form::text('variation_name', $item->temp_name, ['class' => 'form-control',
                                'required', 'placeholder' => 'Enter variation name' ])}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success"><i class="icon-check"></i> Update variation</button>
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>