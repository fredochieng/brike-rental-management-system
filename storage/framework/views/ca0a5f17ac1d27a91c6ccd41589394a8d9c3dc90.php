<div class="modal fade" id="addExpenseModal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title">Add Expense</h6>
            </div>
            <?php echo Form::open(['url' => action('ExpensesController@store'), 'method' => 'post']); ?>

            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone" class="control-label">Property <span class="text-danger">*</span></label>
                            <select class="custom-select" name="property_id" required>
                                <option value="">Select property</option>
                                <?php $__currentLoopData = $property; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value='<?php echo e($item->property_id); ?>'><?php echo e($item->prop_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone-ex" class="control-label">Expense Title <span
                                    class="text-danger">*</span></label>
                            <div class="form-group">
                                <?php echo e(Form::text('expense_title', null, ['class' => 'form-control', 'required', 'placeholder' => 'Enter expense title' ])); ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone-ex" class="control-label">Expense Amount <span
                                    class="text-danger">*</span></label>
                            <div class="form-group">
                                <?php echo e(Form::number('expense_amount', null, ['class' => 'form-control', 'min' => '1', 'required', 'placeholder' => 'Enter expense amount' ])); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary"><i class="icon-check"></i> Add Expense</button>
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
            </div>
            <?php echo Form::close(); ?>

        </div>
    </div>
</div>