    $(function () {
        //Room selector for create new sms
        $('#sms_property_id').on('change', function (e) {
            var property_id = e.target.value;
            console.log(property_id);

            $.get('/messages/get-sms-rooms?property_id=' + property_id, function (data) {
                console.log(data);
                if (data.length == 0) {

                    $('#t_room_id').empty();
                    $('#t_room_id').append('<option value="" disable="true" required>Select room number to select all tenants for the room</option>');
                } else {

                    $('#t_room_id').empty();
                    $('#t_room_id').append('<option value="" disable="true" required>Select room number to select all tenants for the room</option>');

                    $.each(data, function (index, propRoomsObj) {
                        $('#t_room_id').append('<option value="' + propRoomsObj.id + '">' +
                            propRoomsObj.room_no + '</option>');
                    })
                }
            });
        });

        $("#contact_list").change(function () {
            var val = $(this).val();
            var x = document.getElementById("rooms_div");
            var y = document.getElementById("recipient_phones_div");
            if (val == 1) {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
            if (val == 2) {
                y.style.display = "block";
            } else {
                y.style.display = "none";
            }
        });

        var maxchars = 350;

        $('#message').keyup(function () {
            var tlength = $(this).val().length;
            $(this).val($(this).val().substring(0, maxchars));
            var tlength = $(this).val().length;
            remain = maxchars - parseInt(tlength);

            if (remain <= 10) {
                $(".counting").addClass("red");
            } else {
                $(".counting").removeClass("red");
            }
            $('.remain').text(remain);
        });
    });