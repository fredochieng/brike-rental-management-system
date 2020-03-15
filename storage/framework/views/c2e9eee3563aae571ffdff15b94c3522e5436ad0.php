<?php $__env->startSection('title', 'Room Assignments'); ?>
<?php $__env->startSection('parentPageTitle', 'Rooms'); ?>

<?php $__env->startSection('content'); ?>

<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <?php echo Form::open(['url' => action('RoomAssignmentController@index'), 'method' => 'get']); ?>

            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <label>Search room assignments by property</label>
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
                                <span>Search room assignments</span></button>
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
                
            </div>
            <div class="body">
                <div class="table-responsive" style="font-size:12px">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Property</th>
                                <th>Variation</th>
                                <th>Room Number</th>
                                <th>Tenant Name</th>
                                <th>Phone</th>
                                <th>Tenancy Start Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $searched_r_assignments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count => $r_assignments): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($count + 1); ?></td>
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
<?php else: ?>
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                
            </div>
            <div class="body">
                <div class="table-responsive" style="font-size:12px">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Property</th>
                                <th>Variation</th>
                                <th>Room Number</th>
                                <th>Tenant Name</th>
                                <th>Phone</th>
                                <th>Tenancy Start Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $room_assignments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count => $r_assignments): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($count + 1); ?></td>
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
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>