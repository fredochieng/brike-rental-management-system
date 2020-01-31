    $(function () {
        //console.log('welcome fredrick....');
        $('#variation_val_id').on('change', function (e) {
            var variation_val_id = e.target.value;
            console.log(variation_val_id);
            $.get('/property/get-variation-rooms?variation_val_id=' + variation_val_id, function (data) {
                console.log(data);
                if (data.length == 0) {

                    $("#assignRoomBtn").attr('disabled', true)
                    // notification popup
                    toastr.options.closeButton = true;
                    toastr.options.positionClass = 'toast-top-right';
                    toastr.options.showDuration = 2;
                    toastr['warning']('No vacant rooms availabe...');

                    $('#variation_rooms').empty();
                    $('#variation_rooms').append('<option value="" disable="true" required>Select room number</option>');
                } else {
                    // console.log('data found');
                    $("#assignRoomBtn").attr('disabled', false)
                    $('#variation_rooms').empty();
                    $('#variation_rooms').append('<option value="" disable="true" required>Select room number</option>');

                    // notification popup
                    toastr.options.closeButton = true;
                    toastr.options.positionClass = 'toast-top-right';
                    toastr.options.showDuration = 2;
                    toastr['success']('vacant rooms availabe...');

                    $.each(data, function (index, variationRoomsObj) {
                        $('#variation_rooms').append('<option value="' + variationRoomsObj.id + '">' +
                            variationRoomsObj.room_no + '</option>');
                    })
                }
            });
        });
    });