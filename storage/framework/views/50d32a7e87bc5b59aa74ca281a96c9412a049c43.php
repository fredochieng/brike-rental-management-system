<?php $__env->startSection('title', 'Manage Payment'); ?>
<?php $__env->startSection('parentPageTitle', 'Pages'); ?>


<?php $__env->startSection('content'); ?>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card invoice1">
            <div class="body">
                <div class="invoice-top clearfix">
                    <div class="logo">
                        <img src="../../assets/img/sm/mpesa_logo.png" alt="user" class="rounded-circle img-fluid">
                    </div>
                    <div class="info">
                        <h6>Paid By: <?php echo e($payments->first_name); ?> <?php echo e($payments->last_name); ?></h6>
                        <p><strong>Mobile:</strong> <?php echo e($payments->msisdn); ?> <br>
                            <strong>Amount:</strong> <?php echo e($currency_symbol); ?>

                            <?php echo e(number_format($payments->trans_amount, 2,'.',',')); ?><br>
                            <strong>Account No:</strong> <?php echo e($payments->bill_ref_no); ?> <br>

                        </p>
                    </div>
                    <div class="title">
                        <strong>MPESA transaction code:</strong> <?php echo e($payments->trans_id); ?><br>
                        <strong>Paybill:</strong> <?php echo e($payments->bus_shortcode); ?><br>
                        <strong>Payment Mode:</strong> <?php echo e($payments->payment_method); ?><br>
                        <strong>Date:</strong> <?php echo e($payments->trans_date); ?>


                    </div>
                </div>
                <hr>
                <div class="invoice-top clearfix">
                    <div class="logo">
                        <img src="../../assets/img/sm/user_avatar.jpg" alt="user" class="rounded-circle img-fluid">
                    </div>
                    <div class="info">
                        <h6>Tenant Name: <?php echo e($tenant_name); ?></h6>
                        <strong>Mobile:</strong> <?php echo e($tenant_phone); ?><br>
                        <strong>Room No:</strong> <?php echo e($tenant_room); ?><br>
                    </div>

                    <div class="title">
                        <h6>Payment Information</h6>
                        <?php if($trans_confirmed == 'Yes'): ?>
                        <strong>Payment Confirmed:</strong> <span
                            class="badge badge-success"><?php echo e($trans_confirmed); ?></span><br>
                        <?php else: ?>
                        <strong>Payment Confirmed:</strong> <span
                            class="badge badge-warning"><?php echo e($trans_confirmed); ?></span><br>
                        <?php endif; ?>
                        <?php if($cron_processed == 'Processed'): ?>
                        <strong>Payment Processed:</strong> <span
                            class="badge badge-success"><?php echo e($cron_processed); ?></span><br>
                        <?php else: ?>
                        <strong>Payment Processed:</strong> <span
                            class="badge badge-warning"><?php echo e($cron_processed); ?></span><br>
                        <?php endif; ?>
                    </div>
                </div>
                <hr>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="thead-primary">
                        <tr style="font-size:12px">
                                <th>Trans ID</th>
                                <th>Amount</th>
                                <th>Phone</th>
                                <th>Paid By</th>
                                <th>Account No</th>
                                <th>Property</th>
                                <th>Tenant Name</th>
                                <th>Tenant Phone</th>
                                <th>Paid At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo e($payments->trans_id); ?></td>
                                <td><?php echo e($currency_symbol); ?> <?php echo e(number_format($payments->trans_amount, 2, '.', ',')); ?></td>
                                <td><?php echo e($payments->msisdn); ?></td>
                                <td><?php echo e($payments->first_name); ?> <?php echo e($payments->last_name); ?></td>
                                <td><?php echo e($payments->bill_ref_no); ?></td>
                                <?php if($payments->prop_name == ''): ?>
                                <td>Not available</td>
                                <?php else: ?>
                                <td><?php echo e($payments->prop_name); ?></td>
                                <?php endif; ?>

                                <?php if($payments->t_name == ''): ?>
                                <td>Not available</td>
                                <?php else: ?>
                                <td><?php echo e($payments->t_name); ?></td>
                                <?php endif; ?>

                                <?php if($payments->t_phone == ''): ?>
                                <td>Not available</td>
                                <?php else: ?>
                                <td><?php echo e($payments->t_phone); ?></td>
                                <?php endif; ?>
                                <td><?php echo e($payments->trans_date); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                <div class="row clearfix">
                    <div class="col-md-6">
                        <h5>Payment Note</h5>
                        <p>Payment for rent by <?php echo e($payments->first_name); ?> <?php echo e($payments->last_name); ?> through mobile
                            number <?php echo e($payments->t_phone); ?> at
                            <?php echo e($payments->trans_date); ?>. <br> Mpesa confirmation code <?php echo e($payments->trans_id); ?> </p>
                    </div>
                    <div class="col-md-6 text-right">
                        <p class="m-b-0"><b>Sub-total: </b><?php echo e($currency_symbol); ?>

                            <?php echo e(number_format($payments->trans_amount, 2, '.', ',')); ?></p>
                        <p class="m-b-0">Discount: 0.00%</p>
                        <p class="m-b-0">VAT: 0.00%</p>
                        <h3 class="m-b-0 m-t-10"><?php echo e($currency_symbol); ?>

                            <?php echo e(number_format($payments->trans_amount, 2, '.', ',')); ?></h3>
                    </div>
                    <div class="hidden-print col-md-12 text-right">
                        <hr>
                        <a href="" data-target="#confirmPaymentModal" data-toggle="modal" data-backdrop="static"
                            data-keyboard="false" class="btn btn-sm btn-primary">
                            <i class="fa fa-check"></i>
                            <span>Confirm Payment</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make('payments.modals.modal-confirm-payment', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>