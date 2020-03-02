<div class="modal fade" id="editExpenseModal_{{ $item->expense_id }}" tabindex="-1" role="dialog" data-backdrop="static"
    data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title">Edit Expense</h6>
            </div>

            {!!
            Form::open(['action'=>['ExpensesController@update',$item->expense_id],'method'=>'POST'])
            !!}
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label for="phone" class="control-label">Property <span class="text-danger">*</span></label>
                            <select class="custom-select" name="property_id" required>
                                <option value="{{ $item->prop_id }}">{{ $item->prop_name }}</option>
                                @foreach($property as $item)
                                <option value='{{ $item->property_id }}'>{{ $item->prop_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone-ex" class="control-label">Expense Title <span
                                    class="text-danger">*</span></label>
                            <div class="form-group">
                                {{Form::text('expense_title', $item->expense_created_at, ['class' => 'form-control', 'required'])}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone-ex" class="control-label">Expense Amount <span
                                    class="text-danger">*</span></label>
                            <div class="form-group">
                                {{Form::number('expense_amount', $item->expense_amount, ['class' => 'form-control', 'min' => '1', 'required'])}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success"><i class="icon-check"></i> Update Expense</button>
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>