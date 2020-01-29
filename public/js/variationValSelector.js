    $(function () {
        $('#property_id').on('change', function (e) {
            var property_id = e.target.value;

            $.get('/rooms/get-variation-values?property_id=' + property_id, function (data) {
                console.log(data);
                $('#variation_values').empty();
                $('#variation_values').append('<option value="0" disable="true" selected="true">Select variation value</option>');

                $.each(data, function (index, variationValuesObj) {
                    $('#variation_values').append('<option value="' + variationValuesObj.variation_value_id + '">' +
                        variationValuesObj.var_name + '</option>');
                })
            });
        });
    });