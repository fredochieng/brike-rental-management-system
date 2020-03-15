<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('parentPageTitle', 'Dashboard'); ?>


<?php $__env->startSection('content'); ?>
<div class="row clearfix">
    <div class="col-lg-3 col-md-6">
        <div class="card top_counter">
            <div class="body">
                <div class="icon text-info"><i class="fa fa-building"></i> </div>
                <div class="content">
                    <div class="text">Property for rent</div>
                    <h6 class="number"><?php echo e($total_property); ?></h6>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card top_counter">
            <div class="body">
                <div class="icon text-warning"><i class="icon-home"></i> </div>
                <div class="content">
                    <div class="text">Vacant rooms</div>
                    <h6 class="number"><?php echo e(number_format($sum_total_vacant_rooms, 0, '.',',')); ?></h6>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card top_counter">
            <div class="body">
                <div class="icon text-success"><i class="icon-list"></i> </div>
                <div class="content">
                    <div class="text">Rented rooms</div>
                    <h6 class="number"><?php echo e($sum_total_rented_rooms); ?></h6>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card top_counter">
            <div class="body">
                <div class="icon text-danger"><i class="icon-users"></i> </div>
                <div class="content">
                    <div class="text">Tenants</div>
                    <h6 class="number"><?php echo e($tot_tenants); ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-3 col-md-6">
        <div class="card top_counter">
            <div class="body">
                <div class="icon text-info"><i class="fa fa-money"></i> </div>
                <div class="content">
                    <div class="text">Rent Income</div>
                    <h6 class="number"><?php echo e($currency_symbol); ?> <?php echo e($sum_rent_payments); ?></h6>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card top_counter">
            <div class="body">
                <div class="icon text-warning"><i class="fa fa-money"></i> </div>
                <div class="content">
                    <div class="text">Rent Arrears</div>
                    <h6 class="number"><?php echo e($currency_symbol); ?> <?php echo e($rent_arrears_amount); ?></h6>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card top_counter">
            <div class="body">
                <div class="icon text-success"><i class="fa fa-check"></i> </div>
                <div class="content">
                    <div class="text">Processed Transactions</div>
                    <h6 class="number"><?php echo e($processed_transactions); ?></h6>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card top_counter">
            <div class="body">
                <div class="icon text-danger"><i class="fa fa-exclamation"></i> </div>
                <div class="content">
                    <div class="text">Pending Transactions</div>
                    <h6 class="number"><?php echo e($pending_transactions); ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Transactions Recarp</h2>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-4 col-sm-4">
                        <span class="text-muted">Rent Revenue </span>
                        <h3 class="text-info"><?php echo e($currency_symbol); ?> <?php echo e($sum_rent_payments); ?></h3>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4">
                        <span class="text-muted">Rent Due</span>
                        <h3 class="text-warning"><?php echo e($currency_symbol); ?> <?php echo e($rent_arrears_amount); ?></h3>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4">
                        <span class="text-muted">Total Deposits</span>
                        <h3 class="text-success">KES 357,915</h3>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4">
                        <span class="text-muted">Total Expense</span>
                        <h3 class="text-danger"><?php echo e($currency_symbol); ?> <?php echo e($sum_expense_amount); ?></h3>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Recent Payments</h2>
            </div>
            <div class="body">
                <div class="table-responsive" style="font-size:11px">
                    <table class="table table-hover m-b-0" style="font-size:11px">
                        <thead class="thead-primary">
                            <tr>
                                <th>Trans ID</th>
                                <th>Amount</th>
                                <th>Phone</th>
                                <th>Paid By</th>
                                <th>Room</th>
                                <th>Property</th>
                                <th>Paid At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($item->trans_id); ?></td>
                                <td><?php echo e($currency_symbol); ?> <?php echo e(number_format($item->trans_amount, 2, '.', ',')); ?></td>
                                <td><?php echo e($item->msisdn); ?></td>
                                <td><?php echo e($item->first_name); ?> <?php echo e($item->last_name); ?></td>
                                <td><?php echo e($item->bill_ref_no); ?></td>
                                <td><?php echo e($item->prop_name); ?></td>
                                <td><?php echo e($item->trans_date); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Recent Room Assignments</h2>
            </div>
            <div class="body">
                <div class="table-responsive" style="font-size:11px">
                    <table class="table table-hover m-b-0" style="font-size:11px">
                        <thead class="thead-primary">
                            <tr>
                                <th>Property</th>
                                <th>Variation</th>
                                <th>Room</th>
                                <th>Tenant Name</th>
                                <th>Phone</th>
                                <th>Start Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $room_assignments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count => $r_assignments): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($r_assignments->prop_name); ?></td>
                                <td><?php echo e($r_assignments->var_name_value); ?></td>
                                <td><?php echo e($r_assignments->room_no); ?></td>
                                <td><?php echo e($r_assignments->t_name); ?></td>
                                <td><?php echo e($r_assignments->t_phone); ?></td>
                                <td><?php echo e($r_assignments->r_start_date); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>