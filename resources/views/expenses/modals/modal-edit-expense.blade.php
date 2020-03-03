<div class="modal fade" id="editExpenseModal_{{ $expense->expense_id }}" tabindex="-1" role="dialog"
    data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title">Edit Expense</h6>
            </div>

            {!!
            Form::open(['action'=>['ExpensesController@update',$expense->expense_id],'method'=>'POST'])
            !!}
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone" class="control-label">Property <span class="text-danger">*</span></label>
                            <select class="custom-select" name="property_id" required>
                                <option value="{{ $expense->prop_id }}">{{ $expense->prop_name }}</option>
                                @foreach($property as $item)
                                <option value='{{ $item->property_id }}'>{{ $item->prop_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone-ex" class="control-label"> Expense Title <span
                                    class="text-danger">*</span></label>
                            <div class="form-group">
                                {{Form::text('expense_title', $expense->expense_title, ['class' => 'form-control', 'required'])}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone-ex" class="control-label"> Expense Amount <span
                                    class="text-danger">*</span></label>
                            <div class="form-group">
                                {{Form::text('expense_amount', $expense->expense_amount, ['class' => 'form-control', 'required'])}}
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