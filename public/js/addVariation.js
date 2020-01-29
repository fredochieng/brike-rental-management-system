$(document).ready(function () {

    var i = 1;

    $('#add').click(function () {
        i++;
        $('#dynamic_field').append('<tr id="row' + i + '" class="dynamic-added"><td><input type="text" name="variation_value[]" placeholder="Enter variation value" class="form-control variation_value_list" required /></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove"><i class="fa fa-minus"></i></button></td></tr>');
    });

    $(document).on('click', '.btn_remove', function () {
        var button_id = $(this).attr("id");
        $('#row' + button_id + '').remove();
    });

    $('#submit').click(function () {
        i = 1;
        $('.dynamic-added').remove();
        $('#add_name')[0].reset();
        $(".print-success-msg").find("ul").html('');
        $(".print-success-msg").css('display', 'block');
        $(".print-error-msg").css('display', 'none');
        $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
    });

    function printErrorMsg(msg) {
        $(".print-error-msg").find("ul").html('');
        $(".print-error-msg").css('display', 'block');
        $(".print-success-msg").css('display', 'none');
        $.each(msg, function (key, value) {
            $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
        });
    }
});