<?php $__env->startSection('title', 'Pending Payment Transactions'); ?>
<?php $__env->startSection('parentPageTitle', 'Payments'); ?>


<?php $__env->startSection('content'); ?>
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <?php echo Form::open(['url' => action('TransactionsController@pendingPayments'), 'method' => 'get']); ?>

            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <label>Search transactions by property</label>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="form-group">
                            <select class="custom-select" name="property_id" id="pay_property_id" required>
                                <option value="">Select property</option>
                                <?php $__currentLoopData = $property; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value='<?php echo e($item->property_id); ?>'><?php echo e($item->prop_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="form-group">
                            <select class="custom-select" name="room_no" id="prop_room_id">
                                <option value="">Select room number</option>
                                <option value="" disabled="true">Select property first</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-search"></i>
                                <span>Search transactions</span></button>
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
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable"
                        style="font-size:11px">
                        <thead>
                            <tr>
                                <th>Trans ID</th>
                                <th>Amount</th>
                                <th>Phone</th>
                                <th>Paid By</th>
                                <th>Room</th>
                                <th>Property</th>
                                <th>Tenant Name</th>
                                <th>Tenant Phone</th>
                                <th>Status</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($item->trans_id); ?></td>
                                <td><?php echo e($currency_symbol); ?> <?php echo e(number_format($item->trans_amount, 2, '.', ',')); ?></td>
                                <td><?php echo e($item->msisdn); ?></td>
                                <td><?php echo e($item->first_name); ?> <?php echo e($item->last_name); ?></td>
                                <td><?php echo e($item->bill_ref_no); ?></td>
                                <td><?php echo e($item->prop_name); ?></td>
                                <td><?php echo e($item->t_name); ?></td>
                                <td><?php echo e($item->t_phone); ?></td>
                                <td><span class="badge badge-warning">Pending</span></td>
                                <td><?php echo e($item->trans_date); ?></td>
                                <td>
                                    <?php if($item->trans_confirmed == 0): ?>
                                    <a href="" data-toggle="modal" disabled
                                        data-target="#confirmPaymentModal_<?php echo e($item->transaction_id); ?>"
                                        data-backdrop="static" data-keyboard="false" class="btn btn-sm btn-primary"><i
                                            class="fa fa-check"></i>
                                        <span>Confirm payment</span></a>
                                    <?php else: ?>
                                    Confirmed already
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php echo $__env->make('payments.modals.modal-confirm-payment', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable"
                        style="font-size:11px">
                        <thead>
                            <tr>
                                <th>Trans ID</th>
                                <th>Amount</th>
                                <th>Phone</th>
                                <th>Paid By</th>
                                <th>Room</th>
                                <th>Property</th>
                                <th>Tenant Name</th>
                                <th>Tenant Phone</th>
                                <th>Status</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($item->trans_id); ?></td>
                                <td><?php echo e($currency_symbol); ?> <?php echo e(number_format($item->trans_amount, 2, '.', ',')); ?></td>
                                <td><?php echo e($item->msisdn); ?></td>
                                <td><?php echo e($item->first_name); ?> <?php echo e($item->last_name); ?></td>
                                <td><?php echo e($item->bill_ref_no); ?></td>
                                <td><?php echo e($item->prop_name); ?></td>
                                <td><?php echo e($item->t_name); ?></td>
                                <td><?php echo e($item->t_phone); ?></td>
                                <td><span class="badge badge-warning">Pending</span></td>
                                <td><?php echo e($item->trans_date); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>