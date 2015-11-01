function deletePost(postID) {


    $.ajax({
        type: "POST",
        url: "news",
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
