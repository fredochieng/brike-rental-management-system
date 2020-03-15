<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title">Add New User</h6>
            </div>
            <?php echo Form::open(['url' => action('UsersController@store'), 'method' => 'post']); ?>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="phone-ex" class="control-label">Name <span
                                            class="text-danger">*</span></label>
                                <div class="form-group">
                                    <?php echo e(Form::text('name', null, ['class' => 'form-control', 'required', 'placeholder' => 'Enter name' ])); ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="phone-ex" class="control-label">Email address <span
                                            class="text-danger">*</span></label>
                                <div class="form-group">
                                    <?php echo e(Form::email('email', null, ['class' => 'form-control', 'required', 'placeholder' => 'Enter email address' ])); ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="phone-ex" class="control-label">Username <span
                                            class="text-danger">*</span></label>
                                <div class="form-group">
                                    <?php echo e(Form::text('username', null, ['class' => 'form-control', 'required', 'placeholder' => 'Enter username' ])); ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="phone-ex" class="control-label">Password <span
                                            class="text-danger">*</span></label>
                                <div class="form-group">
                                   <?php echo Form::password('password', ['class' => 'form-control', 'required', 'placeholder' => 'Enter password']); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="icon-check"></i> Add User</button>
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                </div>
                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>