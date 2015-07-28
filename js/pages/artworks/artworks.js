
function select_gallery(gallery_type) {

    $.ajax({
        type: "POST",
        url: "artworks",
        data: { type_request:'ajax_request',
                action: 'select_gallery',
                artworks_type:        gallery_type

        },
        success: function(data){

            $('#artworks_gallery').html('').html(data);

        }
    });


}