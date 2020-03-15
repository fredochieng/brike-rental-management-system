<?php $__env->startSection('title', 'Login'); ?>


<?php $__env->startSection('content'); ?>

<div class="vertical-align-wrap">
    <div class="vertical-align-middle auth-main">
        <div class="auth-box">
            <div class="top">
                
                
            </div>
            <div class="card">
                <div class="header">
                    <p class="lead">Login to your account</p>
                </div>
                <div class="body">

                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="signin-email" class="control-label sr-only">Username</label>
                            <input type="text" class="form-control<?php echo e($errors->has('username') ? ' is-invalid' : ''); ?>"
                                class="form-control" id="username" name="username" required
                                value="<?php echo e(old('username')); ?>" placeholder="Username">
                        </div>

                        
                <div class="form-group">
                    <label for="signin-password" class="control-label sr-only">Password</label>
                    <input type="password" class="form-control" id="signin-password" name="password"
                        placeholder="Password" required>
                </div>
                <div class="form-group clearfix">
                    <label class="fancy-checkbox element-left">
                        <input type="checkbox">
                        <span>Remember me</span>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                <div class="bottom">
                    <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a
                            href="<?php echo e(route('authentication.forgot-password')); ?>">Forgot password?</a></span>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.authentication', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>