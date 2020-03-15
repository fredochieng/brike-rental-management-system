<?php $__env->startSection('title', 'Property Variations'); ?>
<?php $__env->startSection('parentPageTitle', 'Property'); ?>


<?php $__env->startSection('content'); ?>

<div class="row clearfix">

    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <a href="#addVariationModal" data-toggle="modal" data-target="#addVariationModal"
                    class="btn btn-info pull-right"><i class="icon-plus"></i> ADD VARIATION
                </a>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Variation Name</th>
                                <th>Variation Values</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $property_variations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($count + 1); ?></td>
                                <td><?php echo e($item->temp_name); ?></td>
                                <td><?php echo e($item->name); ?></td>
                                <td><?php echo e($item->created_at); ?></td>
                                <td>
                                    <a class="btn btn-primary btn-sm" title="Edit " href="#" data-toggle="modal"
                                        disabled data-target="#editVariationModal_<?php echo e($item->variation_id); ?>"
                                        data-backdrop="static" data-keyboard="false"><i class="icon-eye"></i></a>

                                    <?php if($item->prop_var_id == ''): ?>
                                    <a class="btn btn-danger btn-sm" title="Delete " href="#" data-toggle="modal"
                                        disabled data-target="#deleteVariation_<?php echo e($item->variation_id); ?>"
                                        data-backdrop="static" data-keyboard="false"><i class="icon-trash"></i></a>
                                    <?php else: ?>

                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php echo $__env->make('property.variations.modals.modal-edit-variation', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make('property.variations.modals.modal-add-variation', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>