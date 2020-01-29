    $(document).ready(function () {

        // $("#addTenant").on("submit", function (e) {
        //     e.preventDefault(); // prevent the form submission
        //     var route = $('#addTenant').data('route');
        //     $.ajax({
        //         type: "POST",
        //         dataType: 'JSON',
        //         url: '/tenants/save',
        //         data: $('#addTenant').serialize(), // serialize all form inputs
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         },
        //         success: function (response) {
        //             console.log("de response terug");
        //             console.log(response);
        //         },
        //         error: function (data) {
        //             console.log(data)
        //         }
        //     });
        // });

        $("#addTenant").on("submit", function (e) {
            e.preventDefault(); // prevent the form submission
            var route = $('#addTenant').data('route');
            $.ajax({
                type: "POST",
                dataType: 'JSON',
                url: '/rooms/save',
                data: $('#addTenant').serialize(), // serialize all form inputs
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    console.log("de response terug");
                    console.log(response);
                },
                error: function (data) {
                    console.log(data)
                }
            });
        });
    });