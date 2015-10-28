function change_language(language) {


    $.ajax({
        type: "POST",
        url: "main",
        data: {
            type_request: 'ajax_request',
            action: 'change_language',
            language: language

        },

        success: function (data) {



        }

    });

}