    $(function () {
        // console.log('welcome fredrick....');
        $('#variation_val_id').on('change', function (e) {
            var variation_val_id = e.target.value;

            $.get('/property/get-variation-rooms?variation_val_id=' + variation_val_id, function (data) {
                console.log(data);
                $('#variation_rooms').empty();
                $('#variation_rooms').append('<option value="0" disable="true" selected="true">Select room number</option>');

                $.each(data, function (index, variationRoomsObj) {
                    $('#variation_rooms').append('<option value="' + variationRoomsObj.id + '">' +
                        variationRoomsObj.room_no + '</option>');
                })
            });
        });
    });