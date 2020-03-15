<div class="modal fade" id="addVariationModal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Add Property Variation</h6>
            </div>
            <?php echo Form::open(['url' => action('PropertyVariationsController@store'), 'method' => 'post']); ?>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <?php echo Form::label('Variation Name *'); ?>

                            <div class="form-group">
                                <?php echo e(Form::text('variation_name', null, ['class' => 'form-control', 'required', 'placeholder' => 'Enter variation name' ])); ?>

                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="dynamic_field">
                            <tr>
                                <td>
                                    <label>Add variation values</label>
                                    <input type="text" name="variation_value[]" placeholder="Enter variation value"
                                        class="form-control variation_value_list" required />
                                </td>
                                <td><label>Click to add/remove record</label><br />
                                    <button type="button" name="add" id="add" class="btn btn-success">
                                        <i class="fa fa-plus"></i> </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary"><i class="icon-check"></i> Add variation</button>
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
            </div>
            <?php echo Form::close(); ?>

        </div>
    </div>
</div>