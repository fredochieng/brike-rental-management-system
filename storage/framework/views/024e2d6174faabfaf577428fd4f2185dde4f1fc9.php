<div class="modal fade" id="assignRoomModal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title">Assign Room</h6>
            </div>
            <?php echo Form::open(['url' => action('RoomAssignmentController@store'), 'method' => 'post']); ?>


            <div class="modal-body">
                <input type="hidden" name="property_id" id="prop_id" value="<?php echo e($property->property_id); ?>">
                <input type="hidden" name="category_name" id="prop_id" value="<?php echo e($property->category_name); ?>">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone" class="control-label">Property Variation <span
                                    class="text-danger">*</span></label>
                            <select class="custom-select" name="variation_val_id" id="variation_val_id" required>
                                <option value="">Select property variation</option>
                                <?php $__currentLoopData = $variation_values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value='<?php echo e($var_val->variation_value_id); ?>'><?php echo e($var_val->var_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone" class="control-label">Room Number <span
                                    class="text-danger">*</span></label>
                            <select class="custom-select" name="variation_room_id" id="variation_rooms" required>
                                <option value="">Select room number</option>
                                <option value="" disabled="true">Select variation first</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone" class="control-label">Tenant <span class="text-danger">*</span></label>
                            <select class="custom-select" name="r_tenant_id" required>
                                <option value="">Select room tenant</option>
                                <?php $__currentLoopData = $unassigned_tenants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tenant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value='<?php echo e($tenant->tenant_id); ?>'><?php echo e($tenant->t_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <label>Room Assignment Date</label>
                        <div class="input-group mb-3">
                            <input data-provide="datepicker" name="r_start_date"
                                placeholder="Choose room assignment date" required data-date-autoclose="true" readonly
                                class="form-control" data-date-format="yyyy/mm/dd">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" id="assignRoomBtn" class="btn btn-primary"><i class="icon-check"></i> Assign
                    Room</button>
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
            </div>
            <?php echo Form::close(); ?>

        </div>
    </div>
</div>