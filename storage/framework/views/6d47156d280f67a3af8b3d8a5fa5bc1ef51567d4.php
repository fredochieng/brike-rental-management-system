<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <link rel="icon" href="<?php echo e(asset('favicon.ico')); ?>" type="image/x-icon"> <!-- Favicon-->
        <title><?php echo $__env->yieldContent('title'); ?> - <?php echo e(config('app.name')); ?></title>
        <meta name="description" content="<?php echo $__env->yieldContent('meta_description', config('app.name')); ?>">
        <meta name="author" content="<?php echo $__env->yieldContent('meta_author', config('app.name')); ?>">
        <?php echo $__env->yieldContent('meta'); ?>

        
        <?php echo $__env->yieldPushContent('before-styles'); ?>

        <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/bootstrap/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/font-awesome/css/font-awesome.min.css')); ?>">
        
        <!-- Custom Css -->
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/main.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/color_skins.css')); ?>">

        <?php echo $__env->yieldPushContent('after-styles'); ?>

    </head>
    
    
    <?php 
        $setting = !empty($_GET['theme']) ? $_GET['theme'] : '';
        $theme = "theme-cyan";
        $menu = "";
        if ($setting == 'p') {
            $theme = "theme-purple";
        } else if ($setting == 'b') {
            $theme = "theme-blue";
        } else if ($setting == 'g') {
            $theme = "theme-green";
        } else if ($setting == 'o') {
            $theme = "theme-orange";
        } else if ($setting == 'bl') {
            $theme = "theme-blush";
        } else {
             $theme = "theme-cyan";
        }

    ?>
    <body class="<?= $theme ?>">

        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30"><img src="<?php echo e(asset('assets/img/logo-icon.svg')); ?>" width="48" height="48" alt="Lucid"></div>
                <p>Please wait...</p>        
            </div>
        </div>

        <div id="wrapper">

            <?php echo $__env->yieldContent('content'); ?>

        </div>

        <!-- Scripts -->
        <?php echo $__env->yieldPushContent('before-scripts'); ?>

        <script src="<?php echo e(asset('assets/bundles/libscripts.bundle.js')); ?>"></script>    
        <script src="<?php echo e(asset('assets/bundles/vendorscripts.bundle.js')); ?>"></script>
        
        <script src="<?php echo e(asset('assets/bundles/mainscripts.bundle.js')); ?>"></script>

        <?php echo $__env->yieldPushContent('after-scripts'); ?>
        
    </body>
</html>
