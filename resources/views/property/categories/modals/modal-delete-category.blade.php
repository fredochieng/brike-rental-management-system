<div class="modal fade" id="deleteCategory_{{ $item->category_id }}" tabindex="-1" role="dialog" data-backdrop="static"
    data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title">Delete Property Category</h6>
            </div>

            {!!
            Form::open(['action'=>['PropertyCategoriesController@deleteCategory',$item->category_id],'method'=>'POST'])
            !!}
            <input type="hidden" name="category_id" value="{{ $item->category_id }}">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <p> Are you sure you want to delete this category? </p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary"><i class="icon-check"></i> Yes, delete

                </button>
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>