function updateArtistInfo() {


    $.ajax({
        type: "POST",
        url: "artist",
        data: {
            type_request: 'ajax_request',
            action: 'update_artist_info',
            artist_info: $('#artist_info').val()


        },

        success: function (data) {

            //alert(data);

        }

    });

}
