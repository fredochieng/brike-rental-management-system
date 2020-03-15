<?php $__env->startSection('title', 'Room Adjustments'); ?>
<?php $__env->startSection('parentPageTitle', 'Rooms'); ?>

<?php $__env->startSection('content'); ?>
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <?php echo Form::open(['url' => action('RoomAdjustmentController@index'), 'method' => 'get']); ?>

            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <label>Search rooms by property</label>
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
                                <span>Search rooms adjustments</span></button>
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
                <a href="#adjustRoomModal" data-toggle="modal" data-target="#adjustRoomModal"
                    class="btn btn-info pull-right"><i class="icon-plus"></i> ADD ROOM ADJUSTMENT
                </a>
            </div>
            <div class="body">
                <div class="table-responsive" style="font-size:10px">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Property</th>
                                <th>Variation</th>
                                <th>Quantity</th>
                                <th>Initial Tot. Rooms</th>
                                <th>New Tot. Rooms</th>
                                <th>Initial Vacant Rooms</th>
                                <th>New Vacant Rooms</th>
                                <th>Initial Rented Rooms</th>
                                <th>New Rented Rooms</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $searched_adjustments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r_adjustments): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($r_adjustments->prop_name); ?></td>
                                <td><?php echo e($r_adjustments->var_name); ?></td>
                                <td><?php echo e($r_adjustments->adjustment_qty); ?></td>
                                <td><?php echo e($r_adjustments->init_tot_rooms); ?></td>
                                <td><?php echo e($r_adjustments->new_tot_rooms); ?></td>
                                <td><?php echo e($r_adjustments->init_vac_rooms); ?></td>
                                <td><?php echo e($r_adjustments->new_vac_rooms); ?></td>
                                <td><?php echo e($r_adjustments->init_ren_rooms); ?></td>
                                <td><?php echo e($r_adjustments->new_ren_rooms); ?></td>
                                <td><?php echo e($r_adjustments->r_adjustments_date); ?></td>
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
<?php echo $__env->make('rooms.modals.modal-room-adjustment', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>