$(function () {
    //Room selector for confirm payments
    $('#trans_property_id').on('change', function (e) {
        console.log('chelsea');
        var property_id = e.target.value;
        console.log(property_id);

        // console.log(variation_val_id);
        $.get('/property/get-transaction-rooms?property_id=' + property_id, function (data) {
            console.log(data);

            if (data.length == 0) {

                $("#confirmPaymentBtn").attr('disabled', true)
                // notification popup
                toastr.options.closeButton = true;
                toastr.options.positionClass = 'toast-top-right';
                toastr.options.showDuration = 2;
                toastr['warning']('No rooms availabe...');

                $('#transaction_room').empty();
                $('#transaction_room').append('<option value="" disable="true" required>Select room number</option>');
            } else {
                // console.log('data found');
                $("#confirmPaymentBtn").attr('disabled', false)
                $('#transaction_room').empty();
                $('#transaction_room').append('<option value="" disable="true" required>Select room number</option>');

                // notification popup
                toastr.options.closeButton = true;
                toastr.options.positionClass = 'toast-top-right';
                toastr.options.showDuration = 2;
                toastr['success']('Rooms availabe...');

                $.each(data, function (index, transRoomsObj) {
                    $('#transaction_room').append('<option value="' + transRoomsObj.id + '">' +
                        transRoomsObj.room_no + '</option>');
                })
            }
        });
    });

    //tenant selector for payment confirmation
    // $('#variation_val_id1').on('change', function (e) {
    //     var variation_val_id = e.target.value;
    //     var property_id = document.getElementById('prop_id').value;
    //     console.log(variation_val_id);
    //     $.get('/property/get-variation-rented-rooms?variation_val_id=' + variation_val_id + "&property_id=" + property_id, function (data) {
    //         console.log(data);
    //         if (data.length == 0) {
    //
    //             $("#addTenantRoomBtn").attr('disabled', true)
    //             // notification popup
    //             toastr.options.closeButton = true;
    //             toastr.options.positionClass = 'toast-top-right';
    //             toastr.options.showDuration = 2;
    //             toastr['warning']('No rented rooms availabe...');
    //
    //             $('#variation_rooms1').empty();
    //             $('#variation_rooms1').append('<option value="" disable="true" required>Select room number</option>');
    //         } else {
    //             // console.log('data found');
    //             $("#addTenantRoomBtn").attr('disabled', false)
    //             $('#variation_rooms1').empty();
    //             $('#variation_rooms1').append('<option value="" disable="true" required>Select room number</option>');
    //
    //             // notification popup
    //             toastr.options.closeButton = true;
    //             toastr.options.positionClass = 'toast-top-right';
    //             toastr.options.showDuration = 2;
    //             toastr['success']('rented rooms availabe...');
    //
    //             $.each(data, function (index, variationRoomsObj) {
    //                 $('#variation_rooms1').append('<option value="' + variationRoomsObj.id + '">' +
    //                     variationRoomsObj.room_no + '</option>');
    //             })
    //         }
    //     });
    //});
});