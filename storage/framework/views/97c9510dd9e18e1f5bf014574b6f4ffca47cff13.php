<?php $__env->startSection('title', 'Tenant Listing'); ?>
<?php $__env->startSection('parentPageTitle', 'Tenants'); ?>

<?php $__env->startSection('content'); ?>

<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <?php echo Form::open(['url' => action('TenantsController@index'), 'method' => 'get']); ?>

            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <label>Search tenants by property</label>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="form-group">
                            <select class="custom-select" name="property_id" required>
                                <option value="">Select property</option>
                                <?php $__currentLoopData = $property; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value='<?php echo e($item->property_id); ?>'><?php echo e($item->prop_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="form-group">
                            <select class="custom-select" name="t_status" required>
                                <option value="">Select tenant status</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-search"></i>
                                <span>Search tenants</span></button>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo Form::close(); ?>

        </div>
    </div>
</div>

<?php if($searched == 'yes'): ?>
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <div class="table-responsive" style="font-size:10px">
                    <table class="table table-bordered table-hover dataTable js-exportable" style="font-size:13px">
                        <thead>
                            <tr style="font-size:12px">
                                <th>#</th>
                                <th>Name</th>
                                <th>ID/Reg Number</th>
                                <th>Phone Number</th>
                                <th>Email Address</th>
                                <th>Property</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $searched_tenants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($count + 1); ?></td>
                                <td><?php echo e($item->t_name); ?></td>
                                <td><?php echo e($item->t_id_no); ?></td>
                                <td><?php echo e($item->t_phone); ?></td>
                                <?php if($item->t_email == ''): ?>
                                <td>Not Available</td>
                                <?php else: ?>
                                <td><?php echo e($item->t_email); ?></td>
                                <?php endif; ?>
                                <td><?php echo e($item->prop_name); ?></td>
                                <td><?php echo e($item->t_created_at); ?></td>
                                <td>
                                    <div class="btn-group btn-group-sm role=" group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item" href="/tenant/manage/&id=<?php echo e($item->tenant_id); ?>"><i
                                                    class="icon-eye"></i> View
                                                tenant</a>

                                            <?php if($item->t_tenant_id == ''): ?>
                                            <a class="dropdown-item" href="#" data-toggle="modal" disabled
                                                data-target="deleteTenantModal_<?php echo e($item->tenant_id); ?>"
                                                data-backdrop="static" data-keyboard="false"><i class="icon-trash"></i>
                                                Delete
                                                tenant</a>
                                            <?php else: ?>

                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php echo $__env->make('tenants.modals.modal-edit-tenant', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php else: ?>
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <div class="table-responsive" style="font-size:10px">
                    <table class="table table-bordered table-hover dataTable js-exportable" style="font-size:13px">
                        <thead>
                            <tr style="font-size:12px">
                                <th>#</th>
                                <th>Name</th>
                                <th>ID/Reg Number</th>
                                <th>Phone Number</th>
                                <th>Email Address</th>
                                <th>Property</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>No records</td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>