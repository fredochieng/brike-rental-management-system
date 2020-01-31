    $(function () {
        //  console.log('testing testing')
        $('#variation_tempate').on('change', function (e) {
            var variation_tempate = e.target.value;
            console.log(variation_tempate);

            // $.get('/rooms/get-variation-values?variation_tempate=' + variation_tempate, function (data) {
            //     console.log(data);
            //     $('#variation_values').empty();
            //     $('#variation_values').append('<option value="0" disable="true" selected="true">Select variation value</option>');

            //     $.each(data, function (index, variationValuesObj) {
            //         $('#variation_values').append('<option value="' + variationValuesObj.variation_value_id + '">' +
            //             variationValuesObj.var_name + '</option>');
            //     })
            // });
        });
    });