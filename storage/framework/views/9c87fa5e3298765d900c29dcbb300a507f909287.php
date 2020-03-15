<?php $__env->startSection('title', 'User Profile'); ?>
<?php $__env->startSection('parentPageTitle', 'Profile'); ?>


<?php $__env->startSection('content'); ?>
<div class="row clearfix">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2> Basic Information</h2>
            </div>
            <div class="body">
                <?php echo Form::open(['action'=>['UsersController@update_profile', $user->id],'method'=>'POST']); ?>


                <div class="form-group">
                    <input type="text" name="name" class="form-control" value="<?php echo e($user->name); ?>">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" value="<?php echo e($user->email); ?>">
                </div>
                <div class="form-group">
                    <input type="text" name="username" class="form-control" value="<?php echo e($user->username); ?>" readonly>
                </div>
                <button type="submit" class="btn btn-primary">Update Profile</button>
                <?php echo e(Form::close()); ?>

            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Change Password</h2>
            </div>
            <div class="body">
                <?php echo Form::open(['action'=>['UsersController@change_password', $user->id],'method'=>'POST']); ?>

                <div class="form-group">
                    <input type="password" name="current_password" class="form-control"
                        placeholder="Enter current password">
                </div>
                <div class="form-group">
                    <input type="password" name="new_password" class="form-control" placeholder="Enter new password">
                </div>
                <div class="form-group">
                    <input type="password" name="confirm_password" class="form-control"
                        placeholder="Retype new passwod">
                </div>
                <button type="submit" class="btn btn-primary">Change Password</button>
                <?php echo e(Form::close()); ?>

            </div>
        </div>

        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('page-script'); ?>

        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>