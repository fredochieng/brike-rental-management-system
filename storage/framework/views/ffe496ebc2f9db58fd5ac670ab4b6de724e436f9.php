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
        <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/jvectormap/jquery-jvectormap-2.0.3.min.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/morrisjs/morris.min.css')); ?>" />

        <link rel="stylesheet"
            href="<?php echo e(asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')); ?>" />

        <link rel="stylesheet"
            href="<?php echo e(asset('assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/ecommerce.css')); ?>" />

        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">


        <?php if(Request::segment(2) === 'property-list' || Request::segment(2) === 'tenants-list' || Request::segment(2)
        ===
        'categories' || Request::segment(2) === 'variations' || Request::segment(2) === 'rooms-list' ||
        Request::segment(2) === 'room-assignments' || Request::segment(2) === 'room-adjustments' || Request::segment(2)
        === 'dashboard'): ?>
        <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css')); ?>" />
        <link rel="stylesheet"
            href="<?php echo e(asset('assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css')); ?>" />
        <link rel="stylesheet"
            href="<?php echo e(asset('assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/sweetalert/sweetalert.css')); ?>" />
        <?php endif; ?>

        <?php if(Request::segment(2) === 'property-create' || Request::segment(2) === 'tenants-create' ): ?>
        <link rel="stylesheet"
            href="<?php echo e(asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/multi-select/css/multi-select.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/nouislider/nouislider.min.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css')); ?>" />
        <?php endif; ?>

        <?php if(Request::segment(1) === 'dashboard' ): ?>
        <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/chartist/css/chartist.min.css')); ?>" />
        <link rel="stylesheet"
            href="<?php echo e(asset('assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css')); ?>" />
        <?php endif; ?>


        <!-- Custom Css -->
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/main.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/color_skins.css')); ?>">

        <?php echo $__env->yieldPushContent('after-styles'); ?>

        <?php if(trim($__env->yieldContent('page-styles'))): ?>
        <?php echo $__env->yieldContent('page-styles'); ?>
        <?php endif; ?>

    </head>

    <?php 
        $setting = !empty($_GET['theme']) ? $_GET['theme'] : '';
        $theme = "theme-green";
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
        }else if($setting == 'cy'){
              $theme = "theme-cyan";
        }
        else {
             $theme = "theme-green";
        }

    ?>

    <body class="<?= $theme ?>">

        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30"><img src="<?php echo e(url('/')); ?>/assets/img/logo-icon.svg" width="48" height="48" alt="Lucid">
                </div>
                <p>Loading Brike Rentals Management System...</p>
            </div>
        </div>

        <div id="wrapper">

            <?php echo $__env->make('layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <div id="main-content">
                <div class="container-fluid">
                    <div class="block-header">
                        <div class="row">
                            <div class="col-lg-5 col-md-8 col-sm-12">
                                <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                            class="fa fa-arrow-left"></i></a> <?php echo $__env->yieldContent('title'); ?></h2>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><i
                                                class="icon-home"></i></a></li>
                                    <?php if(trim($__env->yieldContent('parentPageTitle'))): ?>
                                    <li class="breadcrumb-item"><?php echo $__env->yieldContent('parentPageTitle'); ?></li>
                                    <?php endif; ?>
                                    <?php if(trim($__env->yieldContent('title'))): ?>
                                    <li class="breadcrumb-item active"><?php echo $__env->yieldContent('title'); ?></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <?php echo $__env->yieldContent('content'); ?>

                </div>
            </div>

        </div>

        <!-- Scripts -->
        <?php echo $__env->yieldPushContent('before-scripts'); ?>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js">
        </script>
        <?php echo Toastr::render(); ?>

        <script src="<?php echo e(asset('assets/bundles/libscripts.bundle.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/bundles/vendorscripts.bundle.js')); ?>"></script>

        <script src="<?php echo e(asset('assets/bundles/morrisscripts.bundle.js')); ?>"></script><!-- Morris Plugin Js -->
        
        <script src="<?php echo e(asset('assets/bundles/knob.bundle.js')); ?>"></script>

        <script src="<?php echo e(asset('assets/bundles/datatablescripts.bundle.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/vendor/jquery-datatable/buttons/buttons.html5.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/vendor/jquery-datatable/buttons/buttons.print.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/vendor/sweetalert/sweetalert.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/pages/tables/jquery-datatable.js')); ?>"></script>


        <script src="<?php echo e(asset('assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/vendor/jquery-inputmask/jquery.inputmask.bundle.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/vendor/jquery.maskedinput/jquery.maskedinput.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/vendor/multi-select/js/jquery.multi-select.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/vendor/nouislider/nouislider.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/pages/forms/advanced-form-elements.js')); ?>"></script>



        <script src="<?php echo e(asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/widgets/infobox/infobox-1.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/index3.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/sparkline.js')); ?>"></script>
        <script src="<?php echo e(asset('/js/variationRoomsSelector.js')); ?>"></script>
        <script src="<?php echo e(asset('/js/getVariationsSelector.js')); ?>"></script>
        <script src="<?php echo e(asset('/js/smsRoomSelector.js')); ?>"></script>
        <script src="<?php echo e(asset('/js/confirmPaymentRoomSelector.js')); ?>"></script>

        <?php if(Request::segment(1) === 'dashboard' ): ?>
        <script src="<?php echo e(asset('assets/bundles/chartist.bundle.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/vendor/chartist/polar_area_chart.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/pages/charts/chartjs.js')); ?>"></script>
        <?php endif; ?>


        <?php if(Request::segment(1) === 'dashboard' ): ?>
        <script src="<?php echo e(asset('assets/vendor/nestable/jquery.nestable.js')); ?>"></script> <!-- Jquery Nestable -->
        <script src="<?php echo e(asset('assets/js/pages/ui/sortable-nestable.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/dashboard.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/bundles/datatablescripts.bundle.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/vendor/jquery-datatable/buttons/buttons.html5.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/vendor/jquery-datatable/buttons/buttons.print.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/vendor/sweetalert/sweetalert.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/pages/tables/jquery-datatable.js')); ?>"></script>
        <?php endif; ?>

        <?php if(Request::segment(2) === 'variations'): ?>
        <script src="<?php echo e(asset('/js/addVariation.js')); ?>"></script>
        <?php endif; ?>

        <?php if(Request::segment(2) === 'payments'): ?>
        <script src="<?php echo e(asset('/js/paymentsRoomSelector.js')); ?>"></script>
        <?php endif; ?>

        <?php if(Request::segment(2) === 'processed-transactions'): ?>
        <script src="<?php echo e(asset('/js/paymentsRoomSelector.js')); ?>"></script>
        <?php endif; ?>

        <?php if(Request::segment(2) === 'pending-transactions'): ?>
        <script src="<?php echo e(asset('/js/paymentsRoomSelector.js')); ?>"></script>
        <?php endif; ?>

        <?php if(Request::segment(2) === 'rooms-list' || Request::segment(2) === 'room-adjustments'): ?>
        <script src="<?php echo e(asset('/js/variationValSelector.js')); ?>"></script>
        <?php endif; ?>


        <?php if(Request::segment(2) === 'property-create' || Request::segment(2) === 'tenants-create' ): ?>
        <script src="<?php echo e(asset('assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/vendor/jquery-inputmask/jquery.inputmask.bundle.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/vendor/jquery.maskedinput/jquery.maskedinput.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/vendor/multi-select/js/jquery.multi-select.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/vendor/nouislider/nouislider.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/pages/forms/advanced-form-elements.js')); ?>"></script>
        <script src="<?php echo e(asset('/js/test.js')); ?>"></script>
        <?php endif; ?>

        <script src="<?php echo e(asset('assets/bundles/mainscripts.bundle.js')); ?>"></script>

        <?php echo $__env->yieldPushContent('after-scripts'); ?>

        <?php if(trim($__env->yieldContent('page-script'))): ?>
        <script>
            <?php echo $__env->yieldContent('page-script'); ?>
        </script>
        <?php endif; ?>
    </body>

</html>