<div class="modal fade" id="unassignRoomModal_{{ $tenant->tenant_id }}" tabindex="-1" role="dialog"
    data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Unassign Room - {{ $tenant->t_name }}</h6>
            </div>

            {!!
            Form::open(['action'=>['TenantsController@unassignRoom',$tenant->tenant_id],'method'=>'POST'])
            !!}

            <input type="hidden" name="property_id" value="{{ $tenant->t_property_id }}">
            <input type="hidden" name="room_id" value="{{ $room_assignment->room_id }}">
            <input type="hidden" name="variation_val_id" value="{{ $room_assignment->variation_val_id }}">
            <div class="modal-body">
                <p>Are you sure you want to unassign room for {{ $tenant->t_name }}?</p>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success pull-right"><i class="icon-check"></i> Yes,
                    unassign</button>
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>