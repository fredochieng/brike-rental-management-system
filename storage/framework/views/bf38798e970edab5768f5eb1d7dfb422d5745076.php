<?php $__env->startSection('title', ' New Tenant'); ?>
<?php $__env->startSection('parentPageTitle', 'Tenants'); ?>


<?php $__env->startSection('content'); ?>

<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2>Tenant Details</h2>
            </div>

            <?php echo Form::open(['url' => action('TenantsController@store'), 'method' => 'post']); ?>


            
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="phone" class="control-label">Property <span
                                        class="text-danger">*</span></label>
                                <select class="custom-select" name="t_property_id" required>
                                    <option value="">Select property</option>
                                    <?php $__currentLoopData = $property; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value='<?php echo e($item->property_id); ?>'><?php echo e($item->prop_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="phone-ex" class="control-label">ID/Reg Number <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="t_id_no" class="form-control" required
                                    placeholder="Enter ID/Reg number">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="phone-ex" class="control-label">Full Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="t_name" class="form-control" required
                                    placeholder="Enter last name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="phone" class="control-label">Phone Number <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="t_phone" id="phone" class="form-control" required
                                    placeholder="Enter phone number">

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="phone" class="control-label">Alt. Phone Number</label>
                                <input type="text" name="t_alt_phone" id="alt_phone" class="form-control"
                                    placeholder="Enter alternative phone (optional)">

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="phone" class="control-label">Email Adress</label>
                                <input type="email" name="t_email" id="email" class="form-control"
                                    placeholder="Enter email address (optional)">

                            </div>
                        </div>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <div class="form-group">

                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 pull-right">
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary"><i
                                        class="fa fa-check-circle"></i>
                                    <span>Add New Tenant</span></button>
                            </div>
                        </div>
                    </div>
                </div>

                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>