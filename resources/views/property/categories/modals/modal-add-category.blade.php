<div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Add Property Category</h6>
            </div>
            {!! Form::open(['url' => action('PropertyCategoriesController@store'), 'method' => 'post'])
            !!}
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::label('Category Name *') !!}
                            <div class="form-group">
                                {{Form::text('category_name', null, ['class' => 'form-control', 'required', 'placeholder' => 'Enter category name' ])}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary"><i class="icon-check"></i> Add Room</button>
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>