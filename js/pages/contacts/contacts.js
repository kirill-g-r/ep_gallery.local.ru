function sentMail() {

       $.ajax({
        type: "POST",
        url: "contacts",
        data: {
            type_request: 'ajax_request',
            action: 'sent_mail',
            name: $('#about_send_mail_name').val(),
            email: $('#about_send_mail_email').val(),
            subject: $('#about_send_mail_subject').val(),
            message: $('#about_send_mail_message').val()

        },

        success: function (data) {


            $('#about_send_mail_name').val('');
            $('#about_send_mail_email').val('');
            $('#about_send_mail_subject').val('');
            $('#about_send_mail_message').val('');

            alert("Your letter has been sent!");

        }

    });

}



