$(function () {
    //    console.log('testing testing')
    $("#variation_template").on("change", function (e) {
        var variation_template = e.target.value;
        console.log(variation_template);

        $.get(
            "/property/get-variation-values?variation_template=" + variation_template,
            function (data) {
                console.log(data);
                $("#variation_values").empty();
                //  $('#variation_values').append('<option value="0" disable="true" selected="true">Select variation value</option>');

                $.each(data, function (index, variationValuesObj) {
                    $("#variation_values").append(
                        '<tr><td><input type="hidden" name="var_value_id[]" class="form-control" value="' +
                        variationValuesObj.id +
                        '"></td><td><input type="text" name="v_name[]" class="form-control" readonly value="' +
                        variationValuesObj.var_value_name +
                        '"></td><td><input type="number" name="rooms[]" class="form-control" min="0" required placeholder="Number of rooms"></td><td><input type="number" name="rent[]" min="0" required class="form-control" placeholder="Rent per month"></td></tr>'
                    );
                });
            }
        );
    });
});