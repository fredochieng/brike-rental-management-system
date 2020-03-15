<?php $__env->startSection('title', 'Rooms Listing'); ?>
<?php $__env->startSection('parentPageTitle', 'Rooms'); ?>

<?php $__env->startSection('content'); ?>
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <?php echo Form::open(['url' => action('RoomsController@index'), 'method' => 'get']); ?>

            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <label>Search rooms by property</label>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
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
                            <select class="custom-select" name="is_vacant" id="is_vacant" required>
                                <option value="">Select room status</option>
                                <option value='1'>Vacant</option>
                                <option value='0'>Rented</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-search"></i>
                                <span>Search rooms</span></button>
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
                <a href="#addRoomModal" data-toggle="modal" data-target="#addRoomModal"
                    class="btn btn-info pull-right"><i class="icon-plus"></i> ADD ROOM
                </a>
            </div>
            <div class="body">
                <div class="table-responsive" style="font-size:13px">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Property</th>
                                <th>Room Type</th>
                                <th>Room Number</th>
                                <th>Max. Occupants</th>
                                <th>Vacant</th>
                                <th>Room Status</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php $__currentLoopData = $searched_rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count => $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($count + 1); ?></td>
                            <td><?php echo e($room->prop_name); ?></td>
                            <td><?php echo e($room->var_name); ?></td>
                            <td><?php echo e($room->room_no); ?></td>
                            <?php if($room->max_occupants == 1): ?>
                            <td><?php echo e($room->max_occupants); ?> Person</td>
                            <?php elseif($room->max_occupants > 1): ?>
                            <td><?php echo e($room->max_occupants); ?> People</td>
                            <?php elseif($room->max_occupants == 'No max'): ?>
                            <td>No maximum number</td>
                            <?php endif; ?>
                            <?php if($room->is_vacant == 1): ?>
                            <td><span class="badge badge-success">Yes</span></td>
                            <?php else: ?>
                            <td><span class="badge badge-danger">No</span></td>
                            <?php endif; ?>

                            <?php if($room->room_status == 1): ?>
                            <td><span class="badge badge-success">Active</span></td>
                            <?php else: ?>
                            <td><span class="badge badge-danger">Inactive</span></td>
                            <?php endif; ?>
                            <td><?php echo e($room->r_created_at); ?></td>

                            <td>
                                <div class="btn-group btn-group-sm role=" group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="/room/manage/&id=<?php echo e($room->room_id); ?>"><i
                                                class="icon-eye"></i> View
                                            room</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal" disabled
                                            data-target="#editRoomModal_<?php echo e($room->room_id); ?>" data-backdrop="static"
                                            data-keyboard="false"><i class="icon-pencil"></i>
                                            Edit
                                            room</a>
                                        <?php if($room->ra_room_id == ''): ?>
                                        <a class="dropdown-item" href=""><i class="icon-trash"></i> Delete
                                            room</a>
                                        <?php else: ?>

                                        <?php endif; ?>

                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php echo $__env->make('rooms.modals.modal-edit-room', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
            <div class="header">
                <a href="#addRoomModal" data-toggle="modal" data-target="#addRoomModal"
                    class="btn btn-info pull-right"><i class="icon-plus"></i> ADD ROOM
                </a>
            </div>
            <div class="body">
                <div class="table-responsive" style="font-size:13px">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Property</th>
                                <th>Room Type</th>
                                <th>Room Number</th>
                                <th>Max. Occupants</th>
                                <th>Vacant</th>
                                <th>Room Status</th>
                                <th>Created At</th>
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
<?php echo $__env->make('rooms.modals.modal-add-room', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>