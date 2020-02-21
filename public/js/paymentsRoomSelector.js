    $(function () {
        //Room selector for room assignemnts
        $('#pay_property_id').on('change', function (e) {
            var property_id = e.target.value;
            console.log(property_id);

            // console.log(variation_val_id);
            $.get('/rent/get-payment-rooms?property_id=' + property_id, function (data) {
                console.log(data);
                //  var string_url = "http://www.example.com/?" + a + "&blabla=" + b;
                if (data.length == 0) {

                    $("#assignRoomBtn").attr('disabled', true)
                    // notification popup
                    toastr.options.closeButton = true;
                    toastr.options.positionClass = 'toast-top-right';
                    toastr.options.showDuration = 2;
                    toastr['warning']('No rooms availabe...');

                    $('#prop_room_id').empty();
                    $('#prop_room_id').append('<option value="" disable="true" required>Select room number</option>');
                } else {
                    // console.log('data found');
                    $("#assignRoomBtn").attr('disabled', false)
                    $('#prop_room_id').empty();
                    $('#prop_room_id').append('<option value="" disable="true" required>Select room number</option>');

                    // notification popup
                    toastr.options.closeButton = true;
                    toastr.options.positionClass = 'toast-top-right';
                    toastr.options.showDuration = 2;
                    toastr['success']('rooms availabe...');

                    $.each(data, function (index, propRoomsObj) {
                        $('#prop_room_id').append('<option value="' + propRoomsObj.id + '">' +
                            propRoomsObj.room_no + '</option>');
                    })
                }
            });
        });

        //Room selector for adding another tenant to a room
        $('#variation_val_id1').on('change', function (e) {
            var variation_val_id = e.target.value;
            var property_id = document.getElementById('prop_id').value;
            console.log(variation_val_id);
            $.get('/property/get-variation-rented-rooms?variation_val_id=' + variation_val_id + "&property_id=" + property_id, function (data) {
                console.log(data);
                if (data.length == 0) {

                    $("#addTenantRoomBtn").attr('disabled', true)
                    // notification popup
                    toastr.options.closeButton = true;
                    toastr.options.positionClass = 'toast-top-right';
                    toastr.options.showDuration = 2;
                    toastr['warning']('No rented rooms availabe...');

                    $('#variation_rooms1').empty();
                    $('#variation_rooms1').append('<option value="" disable="true" required>Select room number</option>');
                } else {
                    // console.log('data found');
                    $("#addTenantRoomBtn").attr('disabled', false)
                    $('#variation_rooms1').empty();
                    $('#variation_rooms1').append('<option value="" disable="true" required>Select room number</option>');

                    // notification popup
                    toastr.options.closeButton = true;
                    toastr.options.positionClass = 'toast-top-right';
                    toastr.options.showDuration = 2;
                    toastr['success']('rented rooms availabe...');

                    $.each(data, function (index, variationRoomsObj) {
                        $('#variation_rooms1').append('<option value="' + variationRoomsObj.id + '">' +
                            variationRoomsObj.room_no + '</option>');
                    })
                }
            });
        });
    });