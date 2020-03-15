<div class="modal fade" id="adjustRoomModal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title">Room Adjustment</h6>
            </div>
            <?php echo Form::open(['url' => action('RoomAdjustmentController@store'), 'method' => 'post']); ?>


            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone" class="control-label">Property <span class="text-danger">*</span></label>
                            <select class="custom-select" name="property_id" id="property_id" required>
                                <option value="">Select property</option>
                                <?php $__currentLoopData = $property; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value='<?php echo e($item->property_id); ?>'><?php echo e($item->prop_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone" class="control-label">Property Variation <span
                                    class="text-danger">*</span></label>
                            <select class="custom-select" name="variation_val_id" id="variation_values" required>
                                <option value="">Select property</option>
                                <option value="" disabled="true" selected="true">Select property first</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone-ex" class="control-label">Quantity <span
                                    class="text-danger">*</span></label>
                            <div class="form-group">
                                <?php echo e(Form::text('quantity', null, ['class' => 'form-control', 'required', 'placeholder' => 'Enter adjustment value' ])); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" id="assignRoomBtn" class="btn btn-primary"><i class="icon-check"></i> Adjust
                    Room</button>
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
            </div>
            <?php echo Form::close(); ?>

        </div>
    </div>
</div>