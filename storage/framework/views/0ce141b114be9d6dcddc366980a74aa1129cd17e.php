<div class="modal fade" id="editRoomModal_<?php echo e($room->room_id); ?>" tabindex="-1" role="dialog" data-backdrop="static"
    data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title">Edit Room</h6>
            </div>

            <?php echo Form::open(['action'=>['RoomsController@update',$room->room_id],'method'=>'POST']); ?>

            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone" class="control-label">Property <span class="text-danger">*</span></label>
                            <select class="custom-select" name="property_id" disabled required>
                                <option value="<?php echo e($room->prop_id); ?>"><?php echo e($room->prop_name); ?></option>
                                <?php $__currentLoopData = $property; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value='<?php echo e($item->property_id); ?>'><?php echo e($item->prop_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone" class="control-label">Variation <span
                                    class="text-danger">*</span></label>
                            <select class="custom-select" name="variation_val_id" disabled required>
                                <option value="<?php echo e($room->var_val_id); ?>"><?php echo e($room->var_name); ?></option>
                                <?php $__currentLoopData = $property; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value='<?php echo e($item->property_id); ?>'><?php echo e($item->prop_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone-ex" class="control-label">Room Number <span
                                    class="text-danger">*</span></label>
                            <div class="form-group">
                                <?php echo e(Form::text('room_no', $room->room_no, ['class' => 'form-control', 'required', 'placeholder' => 'Enter room number' ])); ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone" class="control-label">Maximum Occupants <span
                                    class="text-danger">*</span></label>
                            <select class="custom-select" name="max_occupants" required>
                                <option value="<?php echo e($room->max_occupants); ?>"><?php echo e($room->max_occupants); ?></option>
                                <option value='1'>1 person</option>
                                <option value='2'>2 people</option>
                                <option value='3'>3 people</option>
                                <option value='4'>4 people</option>
                                <option value='5'>5 people</option>
                                <option value='6'>6 people</option>
                                <option value='7'>7 people</option>
                                <option value='8'>8 people</option>
                                <option value='9'>9 people</option>
                                <option value='No max'>No maximum number</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success"><i class="icon-check"></i> Update Room</button>
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
            </div>
            <?php echo Form::close(); ?>

        </div>
    </div>
</div>