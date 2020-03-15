<?php $__env->startSection('title', 'User Listing'); ?>
<?php $__env->startSection('parentPageTitle', 'Users'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <a href="#addUserModal" data-toggle="modal" data-target="#addUserModal"
                       class="btn btn-info pull-right"><i class="icon-plus"></i> ADD NEW USER
                    </a>
                </div>
                <div class="body">
                    <div class="table-responsive" style="font-size:13px">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($count + 1); ?></td>
                                    <td><?php echo e($user->name); ?></td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td><?php echo e($user->username); ?></td>
                                    <td><?php echo e($user->created_at); ?></td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" title="Edit " href="#" data-toggle="modal"
                                           disabled data-target="#editUserModal_<?php echo e($user->id); ?>"
                                           data-backdrop="static" data-keyboard="false"><i class="icon-pencil"></i></a>

                                        <a class="btn btn-danger btn-sm" title="Delete " href="#" data-toggle="modal"
                                           disabled data-target="#deleteUserModal_<?php echo e($user->id); ?>"
                                           data-backdrop="static" data-keyboard="false"><i class="icon-trash"></i></a>
                                    </td>
                                </tr>
                                <?php echo $__env->make('user-management.modals.modal-edit-user', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('user-management.modals.modal-add-user', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>