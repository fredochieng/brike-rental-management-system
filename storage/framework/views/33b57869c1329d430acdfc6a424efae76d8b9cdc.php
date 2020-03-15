<?php $__env->startSection('title', 'Expense Listing'); ?>
<?php $__env->startSection('parentPageTitle', 'Expenses'); ?>

<?php $__env->startSection('content'); ?>

<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <?php echo Form::open(['url' => action('ExpensesController@index'), 'method' => 'get']); ?>

            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <label>Search expenses by property</label>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="form-group">
                            <select class="custom-select" name="property_id" required>
                                <option value="">Select property</option>
                                <?php $__currentLoopData = $property; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value='<?php echo e($item->property_id); ?>'><?php echo e($item->prop_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-search"></i>
                                <span>Search expense</span></button>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo Form::close(); ?>

        </div>
    </div>
</div>

<?php if($searched == 'yes'): ?>
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <a href="#addExpenseModal" data-toggle="modal" data-target="#addExpenseModal"
                    class="btn btn-info pull-right"><i class="icon-plus"></i> ADD EXPENSE
                </a>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Property</th>
                                <th>Expense Title</th>
                                <th>Expense Amount</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $searched_expenses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count => $expense): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($expense->prop_name); ?></td>
                                <td><?php echo e($expense->expense_title); ?></td>
                                <td><?php echo e($currency_symbol); ?> <?php echo e(number_format($expense->expense_amount,2,'.',',')); ?></td>
                                <td><?php echo e($expense->expense_created_at); ?></td>
                                <td>
                                    <div class="btn-group btn-group-sm role=" group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item" href="#" data-toggle="modal" disabled
                                                data-target="#editExpenseModal_<?php echo e($expense->expense_id); ?>"
                                                data-backdrop="static" data-keyboard="false"><i class="icon-pencil"></i>
                                                Edit
                                                expense</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" disabled
                                                data-target="#deleteModal_<?php echo e($expense->expense_id); ?>"
                                                data-backdrop="static" data-keyboard="false"><i class="icon-trash"></i>
                                                Edit
                                                expense</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php echo $__env->make('expenses.modals.modal-edit-expense', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php else: ?>
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <a href="#addExpenseModal" data-toggle="modal" data-target="#addExpenseModal"
                    class="btn btn-info pull-right"><i class="icon-plus"></i> ADD EXPENSE
                </a>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Property</th>
                                <th>Expense Title</th>
                                <th>Expense Amount</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $expenses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count => $expense): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($expense->prop_name); ?></td>
                                <td><?php echo e($expense->expense_title); ?></td>
                                <td><?php echo e($currency_symbol); ?> <?php echo e(number_format($expense->expense_amount,2,'.',',')); ?></td>
                                <td><?php echo e($expense->expense_created_at); ?></td>
                                <td>
                                    <div class="btn-group btn-group-sm role=" group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item" href="#" data-toggle="modal" disabled
                                                data-target="#editExpenseModal_<?php echo e($expense->expense_id); ?>"
                                                data-backdrop="static" data-keyboard="false"><i class="icon-pencil"></i>
                                                Edit
                                                expense</a>

                                            <a class="dropdown-item" href="#" data-toggle="modal" disabled
                                                data-target="#deleteModal_<?php echo e($expense->expense_id); ?>"
                                                data-backdrop="static" data-keyboard="false"><i class="icon-trash"></i>
                                                Edit
                                                expense</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php echo $__env->make('expenses.modals.modal-edit-expense', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php echo $__env->make('expenses.modals.modal-add-expense', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>