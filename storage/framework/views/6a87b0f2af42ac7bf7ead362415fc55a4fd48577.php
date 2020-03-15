<?php $__env->startSection('title', 'Forget Password'); ?>

<?php $__env->startSection('content'); ?>

<div class="vertical-align-wrap">
    <div class="vertical-align-middle auth-main">
        <div class="auth-box">
            <div class="top">
                <h3>Rentals Management System</h3>
            </div>
            <div class="card">
                <div class="header">
                    <p class="lead">Recover my password</p>
                </div>
                <div class="body">
                    <p>Please enter your email address below to receive instructions for resetting password.</p>
                    <form class="form-auth-small" action="<?php echo e(route('password.reset')); ?>" method="post">
                        <?php echo csrf_field(); ?>

                        
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="Email address">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">RESET PASSWORD</button>
                        <div class="bottom">
                            <span class="helper-text">Know your password? <a
                                    href="<?php echo e(route('authentication.login')); ?>">Login</a></span>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.authentication', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>