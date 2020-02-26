$(function () {
    //Room selector for payment confirmation
    $('#trans_property_id').on('change', function (e) {
        var property_id = e.target.value;

        $.get('/property/get-transaction-rooms?property_id=' + property_id, function (data) {
            console.log(data);
            if (data.length == 0) {

                $('#trans_room_id').empty();
                $('#trans_room_id').append('<option value="" disable="true" required>Select room number</option>');
            } else {

                $('#trans_room_id').empty();
                $('#trans_room_id').append('<option value="" disable="true" required>Select room number</option>');

                $.each(data, function (index, transRoomsObj) {
                    $('#trans_room_id').append('<option value="' + transRoomsObj.id + '">' +
                        transRoomsObj.room_no + '</option>');
                })
            }
        });
    });

    // Tenant selector for payment confirmation
    $('#trans_room_id').on('change', function (e) {
        var room_id = e.target.value;

        $.get('/payments/get-payment-tenants?room_id=' + room_id, function (data) {
            console.log(data);
            if (data.length == 0) {

                $("#confirmPaymentBtn").attr('disabled', true);

                // notification popup
                toastr.options.closeButton = true;
                toastr.options.positionClass = 'toast-top-right';
                toastr.options.showDuration = 2;
                toastr['warning']('No tenant availabe...');

                $('#trans_tennat_id').empty();
                $('#trans_tennat_id').append('<option value="" disable="true" required>Select room number</option>');
            } else {
                $("#confirmPaymentBtn").attr('disabled', false);

                // notification popup
                toastr.options.closeButton = true;
                toastr.options.positionClass = 'toast-top-right';
                toastr.options.showDuration = 2;
                toastr['success']('Room tenants found...');

                $('#trans_tennat_id').empty();
                $('#trans_tennat_id').append('<option value="" disable="true" required>Select room number</option>');

                $.each(data, function (index, transRoomObj) {
                    $('#trans_tennat_id').append('<option value="' + transRoomObj.t_id + '">' +
                        transRoomObj.t_name + '</option>');
                })
            }
        });
    });
});