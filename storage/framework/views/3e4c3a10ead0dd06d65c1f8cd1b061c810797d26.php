<?php $__env->startSection('title', 'Property Categories'); ?>
<?php $__env->startSection('parentPageTitle', 'Property'); ?>


<?php $__env->startSection('content'); ?>

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <a href="#addCategoryModal" data-toggle="modal" data-target="#addCategoryModal"
                    class="btn btn-info pull-right"><i class="icon-plus"></i> ADD CATEGORY
                </a>
            </div>
            <div class="body">
                <div class="table-responsive" style="font-size:13px">
                    <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $property_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($count + 1); ?></td>
                                <td><?php echo e($item->category_name); ?></td>
                                <td><?php echo e($item->created_at); ?></td>
                                <td>
                                    <a class="btn btn-primary btn-sm" title="Edit " href="#" data-toggle="modal"
                                        disabled data-target="#editCategoryModal_<?php echo e($item->category_id); ?>"
                                        data-backdrop="static" data-keyboard="false"><i class="icon-pencil"></i></a>

                                    <?php if($item->prop_cat_id == ''): ?>
                                    <a class="btn btn-danger btn-sm" title="Delete " href="#" data-toggle="modal"
                                        disabled data-target="#deleteCategory_<?php echo e($item->category_id); ?>"
                                        data-backdrop="static" data-keyboard="false"><i class="icon-trash"></i></a>
                                    <?php else: ?>

                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php echo $__env->make('property.categories.modals.modal-edit-category', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make('property.categories.modals.modal-add-category', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>