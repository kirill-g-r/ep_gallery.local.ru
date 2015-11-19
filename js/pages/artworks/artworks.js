
function select_gallery(gallery_type) {

    $.ajax({
        type: "POST",
        url: "artworks",
        data: { type_request:'ajax_request',
                action: 'select_gallery',
                artworks_type: gallery_type

        },

        success: function(data) {

            if (document.readyState === "complete") {


                $("#xxx_test").fadeOut('slow');

            $("#xxx_test").load(location.href + " #xxx_test", function () {

                $("#xxx_test").fadeIn('slow');

                $("#xxx_test").html(data);

                $(function () {
                    $('#gallery').poptrox({
                        usePopupCaption: true
                    });
                    $('.caption').css('font-size', '80%');
                    $('.caption').css('line-height', '115%');
                    $('.caption').css('padding-top', '2%');
                    $('.caption').css('padding-bottom', '5%');


                });

                return true;

            });


//alert(data);

            //$('#gallery').animate({width: 'hide'}, 700);
            //load(document    .URL);
            //$('#gallery').html('').html(data);
            //$('#gallery').addClass('slideLeft');


            $("#gallery").fadeOut("slow", function () {

                $('#gallery').html('').html(data);
                $("#gallery").fadeIn("slow");

                // Update for gallery window works
                $(function () {
                    $('#gallery').poptrox({
                        usePopupCaption: true
                    });
                    $('.caption').css('font-size', '80%');
                    $('.caption').css('line-height', '115%');
                    $('.caption').css('padding-top', '2%');
                    $('.caption').css('padding-bottom', '5%');


                });

            });


            //$('#gallery').html('').html(data);

            //$( "#gallery" ).fadeIn( "slow");

            //$("#gallery").slideToggle();
            //$('#gallery').animate({width: 'show'}, 700);
            //$('#xxx_test').load(document    .URL +  ' #xxx_test').html().html(data);

            // Update for gallery window works
            $(function () {
                $('#gallery').poptrox({
                    usePopupCaption: true
                });
                $('.caption').css('font-size', '80%');
                $('.caption').css('line-height', '115%');
                $('.caption').css('padding-top', '2%');
                $('.caption').css('padding-bottom', '5%');


            });

        }

        }

    });

}

function add_gallery() {

    $.ajax({
        type: "POST",
        url: "artworks",
        data: {
            type_request: 'ajax_request',
            action: 'add_gallery',
            new_gallery_name: $('#new_gallery').val()

        },

        success: function (data) {

            location.reload();

        }

    });

}

function delete_work(id_work) {


    $.ajax({
        type: "POST",
        url: "artworks",
        data: {
            type_request: 'ajax_request',
            action: 'delete_work',
            src_img_small: $('#'+id_work).attr('src')

        },

        success: function (data) {

            location.reload();

        }

    });

}
function addWork() {

    $.ajax({
        type: "POST",
        url: "artworks",
        data: {
            type_request: 'ajax_request',
            action: 'add_work',
            gallery_img_large: $('#gallery_img_large').val(),
            gallery_img_small: $('#gallery_img_small').val()


        },

        success: function (data) {

            location.reload();

            if (data.length < 5) {

                alert('New work added!!');

            } else {

                alert(data);

            }

        }

    });

}

function delete_gallery(gallery_type) {

    $.ajax({
        type: "POST",
        url: "artworks",
        data: {
            type_request: 'ajax_request',
            action: 'delete_gallery',
            gallery_type: gallery_type

        },

        success: function (data) {

            location.reload();

        }

    });

}