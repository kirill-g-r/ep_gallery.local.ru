function deletePost(postID) {


    $.ajax({
        type: "POST",
        url: "articles",
        data: {
            type_request: 'ajax_request',
            action: 'delete_post',
            //post_id: $('#post_id').val()
            post_id: postID


        },

        success: function (data) {

            location.reload();

            alert('Post ' + data + ' deleted!');

        }

    });

}

function addPost() {

    $.ajax({
        type: "POST",
        url: "articles",
        data: {
            type_request: 'ajax_request',
            action: 'add_post',
            post_img_id: $('#post_img_id').val(),
            post_info: $('#post_info').val()


        },

        success: function (data) {

            location.reload();

            if (data.length < 5) {

                alert('New post added!!');

            } else {

                alert(data);

            }

        }

    });

}


