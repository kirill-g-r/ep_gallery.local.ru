function login() {


    $.ajax({
        type: "POST",
        url: "admin",
        data: {
            type_request: 'ajax_request',
            action: 'login',
            username: $('#username').val(),
            password: $('#password').val()

        },

        success: function (data) {

            alert("You're Admin Now!");

        }

    });

}

function logout() {


    $.ajax({
        type: "POST",
        url: "admin",
        data: {
            type_request: 'ajax_request',
            action: 'logout'

        },

        success: function (data) {

            alert("You're Not Admin Now!");

        }

    });

}

