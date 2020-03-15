<?php $__env->startSection('title', 'Rent Payment Tracker'); ?>
<?php $__env->startSection('parentPageTitle', 'Full Payments'); ?>

<?php $__env->startSection('content'); ?>
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <?php echo Form::open(['url' => action('MonthlyPaymentController@fullRentPayments'), 'method' => 'get']); ?>

            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <label>Search payment trackers by property</label>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <select class="custom-select" name="property_id" required>
                                <option value="">Select property</option>
                                <?php $__currentLoopData = $property; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value='<?php echo e($item->property_id); ?>'><?php echo e($item->prop_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-search"></i>
                                <span>Search payment trackers</span></button>
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
                <div class="table-responsive" style="font-size:13px">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Property</th>
                                <th>Room No</th>
                                <th>Period</th>
                                <th>Rent Amount</th>
                                <th>Amount Paid</th>
                                <th>Balance Due</th>
                                <th>Payment Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php $__currentLoopData = $payment_tracks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count => $rent_track): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($rent_track->prop_name); ?></td>
                            <td><?php echo e($rent_track->room_no); ?></td>
                            <td><?php echo e($rent_track->period); ?></td>
                            <td><?php echo e($currency_symbol); ?> <?php echo e(number_format($rent_track->rent_amount, 2, '.', ',')); ?></td>
                            <td><?php echo e($currency_symbol); ?> <?php echo e(number_format($rent_track->amount_paid, 2, '.', ',')); ?></td>
                            <td><?php echo e($currency_symbol); ?> <?php echo e(number_format($rent_track->balance_due, 2, '.', ',')); ?></td>
                            <?php if($rent_track->payment_status == 1): ?>
                            <td><span class="badge badge-success"><?php echo e($rent_track->rent_status); ?></span></td>
                            <?php elseif($rent_track->payment_status == 2): ?>
                            <td><span class="badge badge-warning"><?php echo e($rent_track->rent_status); ?></span></td>
                            <?php elseif($rent_track->payment_status == 3): ?>
                            <td><span class="badge badge-danger"><?php echo e($rent_track->rent_status); ?></span></td>
                            <?php endif; ?>
                            <td>
                                <div class="btn-group btn-group-sm role=" group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="#" data-toggle="modal" disabled
                                            data-target="#editRoomModal_<?php echo e($rent_track->track_id); ?>"
                                            data-backdrop="static" data-keyboard="false"><i class="icon-pencil"></i>
                                            Edit
                                            tracker</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                <div class="table-responsive" style="font-size:13px">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Property</th>
                                <th>Room No</th>
                                <th>Period</th>
                                <th>Rent Amount</th>
                                <th>Amount Paid</th>
                                <th>Balance Due</th>
                                <th>Payment Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                            </tr>
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