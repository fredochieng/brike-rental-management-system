<?php $__env->startSection('title', 'Property Listing'); ?>
<?php $__env->startSection('parentPageTitle', 'Property'); ?>


<?php $__env->startSection('content'); ?>

<div class="row clearfix">

    <div class="col-lg-12">
        <div class="card">

            <div class="body">
                <div class="table-responsive" style="font-size:13px">
                    <table class="table table-bordered table-hover dataTable js-exportable" style="font-size:13px">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Location</th>
                                <th>Caretaker Name</th>
                                <th>Phone</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $property; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($count + 1); ?></td>
                                <td><?php echo e($item->prop_name); ?></td>
                                <td><?php echo e($item->category_name); ?></td>
                                <td><?php echo e($item->location); ?></td>
                                <td><?php echo e($item->c_name); ?></td>
                                <td><?php echo e($item->c_phone); ?></td>
                                <td><?php echo e($item->prop_created_at); ?></td>
                                <td>
                                    <div class="btn-group btn-group-sm role=" group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item"
                                                href="/property/manage/&id=<?php echo e($item->property_id); ?>"><i
                                                    class="icon-eye"></i> View
                                                property</a>
                                            <a class="dropdown-item" href="/property/edit/&id=<?php echo e($item->property_id); ?>"><i
                                                    class="icon-pencil"></i> Edit
                                                property</a>

                                            <?php if($item->room_property_id == ''): ?>
                                            <a class="dropdown-item" href=""><i class="icon-trash"></i> Delete
                                                property</a>
                                            <?php else: ?>

                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>