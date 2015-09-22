
function select_gallery(gallery_type) {

    $.ajax({
        type: "POST",
        url: "artworks",
        data: { type_request:'ajax_request',
                action: 'select_gallery',
                artworks_type:        gallery_type

        },

        success: function(data){
//alert(data);

            $('#gallery').animate({width: 'hide'}, 700);
            //load(document    .URL);
            $('#gallery').html('').html(data);
            //$("#gallery").slideToggle();
            $('#gallery').animate({width: 'show'}, 700);
            //$('#xxx_test').load(document    .URL +  ' #xxx_test').html().html(data);

    // Update for gallery window works
            $(function() {
                $('#gallery').poptrox({
                    usePopupCaption: true
                });
                $('.caption').css('font-size', '70%');
                $('.caption').css('line-height', '115%');
                $('.caption').css('padding', '5%');


            });

        }
    });

}