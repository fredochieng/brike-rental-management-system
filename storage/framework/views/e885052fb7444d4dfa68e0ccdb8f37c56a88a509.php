<div class="modal fade" id="editUserModal_<?php echo e($user->id); ?>" tabindex="-1" role="dialog" data-backdrop="static"
     data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title">Edit Room</h6>
            </div>

            <?php echo Form::open(['action'=>['UsersController@update',$room->id],'method'=>'POST']); ?>

            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone-ex" class="control-label">Name <span
                                        class="text-danger">*</span></label>
                            <div class="form-group">
                                <?php echo e(Form::text('name', $user->name, ['class' => 'form-control', 'required' ])); ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone-ex" class="control-label">Email address <span
                                        class="text-danger">*</span></label>
                            <div class="form-group">
                                <?php echo e(Form::email('email', $user->email, ['class' => 'form-control', 'required' ])); ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="phone-ex" class="control-label">Username <span
                                        class="text-danger">*</span></label>
                            <div class="form-group">
                                <?php echo e(Form::text('email', $user->username, ['class' => 'form-control', 'required' ])); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success"><i class="icon-check"></i> Update User</button>
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
            </div>
            <?php echo Form::close(); ?>

        </div>
    </div>
</div>