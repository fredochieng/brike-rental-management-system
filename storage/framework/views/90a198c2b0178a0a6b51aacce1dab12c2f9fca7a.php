<div class="modal fade" id="editCategoryModal_<?php echo e($item->category_id); ?>" tabindex="-1" role="dialog" data-backdrop="static"
    data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Edit Property Category</h6>
            </div>

            <?php echo Form::open(['action'=>['PropertyCategoriesController@update',$item->category_id],'method'=>'POST']); ?>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <?php echo Form::label('Category Name *'); ?>

                            <div class="form-group">
                                <?php echo e(Form::text('category_name', $item->category_name, ['class' => 'form-control', 'required' ])); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success"><i class="icon-check"></i> Update category</button>
                <button type="button" class="btn btn-danger ml-2" data-dismiss="modal">Close</button>
            </div>
            <?php echo Form::close(); ?>

        </div>
    </div>
</div>