<div class="modal fade" id="reactivateTenantModal_<?php echo e($tenant->tenant_id); ?>" tabindex="-1" role="dialog"
    data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Reactivate tenant - <?php echo e($tenant->t_name); ?></h6>
            </div>

            <?php echo Form::open(['action'=>['TenantsController@reactivateTenant',$tenant->tenant_id],'method'=>'POST']); ?>


            <div class="modal-body">
                <p>Are you sure you want to reactivate <?php echo e($tenant->t_name); ?>?</p>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success pull-right"><i class="icon-check"></i> Yes,
                    reactivate</button>
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
            </div>
            <?php echo Form::close(); ?>

        </div>
    </div>
</div>