<!DOCTYPE HTML>
<!--
    ELENA OPALEVA Official site
    by KIRILLGORYUNOV.COM

	email: info@KIRILLGORYUNOV.COM
-->

<html>
<head>
	<title>Elena Opaleva | Official Site</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.poptrox.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/jquery.dropotron.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/jquery.onvisible.min.js"></script>
	<script src="assets/js/util.js"></script>
	<!--<script src="assets/js/page_transition.js"></script>-->

	<link rel="stylesheet" type="text/css" href="assets/gallery/css/style_gallery.css"/>
	<script src="assets/gallery/js/modernizr.custom.70736.js"></script>
	<noscript><link rel="stylesheet" type="text/css" href="assets/gallery/css/noJS.css"/></noscript>

	<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="assets/js/main.js"></script>

	<link rel="stylesheet" href="assets/css/main.css" />
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
</head>
<style>


</style>
<body class="no-sidebar">
<div id="page-wrapper">

	<div style=" width: 100%">
		<!-- Header -->
		<div id="header" style="opacity: 0.9; background-image: url(/images/banner_FIRST.jpg); padding: 2.0em 0 0em 0;">
			<!--					<div id="header" style="opacity: 0.9; background-image: url(/images/banner_FIRST.jpg); padding: 2.5em 0 2em 0;">
            <h1 class="logo_simple" style="margin-top: 1%; font-size: 400%;" ><a href="/" id="logo">Elena Opaleva</a></h1>
            -->
			<h1 class="logo_simple" style="margin-top: -3%; font-size: 400%;" ><a href="/" id="logo">Elena Opaleva</a></h1>
			<!-- Inner -->


			<!-- Nav -->
			<nav id="nav" style="position: static; padding: 0.5em 0 1.5em 0 ">
				<ul>

                    <?php

                    if ($_COOKIE['language'] == 'EN') {

                        echo '
                                <li><a href="/">Home</a></li>
                                <li><a href="/artworks">Artworks</a></li>
                                <li><a href="/artist">Artist</a></li>
                                <li><a href="/news">News</a></li>
                                <li><a href="/articles">Articles</a></li>
                                <li><a href="/contacts">Contacts</a></li>
                        ';


                    } else {

                        echo '
                                <li><a href="/">Главная</a></li>
                                <li><a href="/artworks">Галерея</a></li>
                                <li><a href="/artist">О художнице</a></li>
                                <li><a href="/news">Новости</a></li>
                                <li><a href="/articles">Статьи</a></li>
                                <li><a href="/contacts">Контакты</a></li>
                        ';

                    }


                    ?>

				</ul>
			</nav>

		</div>
	</div>

	<div id="footer_gkg" style="opacity: 0.9">

		<ul id="nav_bottom" style=" text-align: center; margin-bottom: 0%;">

            <?php

            if ($_COOKIE['language'] == 'EN') {

                echo '
                                <li><a href="/">Home</a></li>
                                <li><a href="/artworks">Artworks</a></li>
                                <li><a href="/artist">Artist</a></li>
                                <li><a href="/news">News</a></li>
                                <li><a href="/articles">Articles</a></li>
                                <li><a href="/contacts">Contacts</a></li>
                        ';


            } else {

                echo '
                                <li><a href="/">Главная</a></li>
                                <li><a href="/artworks">Галерея</a></li>
                                <li><a href="/artist">О художнице</a></li>
                                <li><a href="/news">Новости</a></li>
                                <li><a href="/articles">Статьи</a></li>
                                <li><a href="/contacts">Контакты</a></li>
                        ';

            }


            ?>

		</ul>

	</div>


	<!-- Banner -->
	<section id="banner" style="padding: 4.5em 0 1em 0" class="slideLeft">

		<header>
			<h2 id="artworks_label" class="zapfiro text-shadow" style="font-size: 300%;  ">Artworks</h2>
		</header>

		<ul id="nav_bottom_artworks">

            <?php

            $dir = scandir('images/artworks');
            if ($dir) {
                foreach ($dir as $d) {

                    if (strlen($d) < 3) {
                        continue;
                    }

                    $d = ltrim($d);

                    $d_name = mb_convert_case($d, MB_CASE_TITLE, "UTF-8");


                    if ($_COOKIE['language'] == 'EN') {

                        if (preg_match( '/[А-Яа-я]/', $d_name )) {

                            continue;

                        }

                    }
                    if ($_COOKIE['language'] == 'RU') {

                        if (preg_match( '/[A-Za-z]/', $d_name )) {

                            continue;

                        }

                    }


                    $d = "'$d'";

                    if (isset($_COOKIE['admin']) && $_COOKIE['admin'] == 'true') {

                        echo '<li ><a href = "#" onclick = "select_gallery(' . $d . ');" >' . $d_name . '</a ><br><button onclick="delete_gallery(' . $d . ');";>Delete Gallery</button></li >';


                    } else {

                        echo '<li ><a href = "#" onclick = "select_gallery(' . $d . ');" >' . $d_name . '</a ></li >';
                        #	<li><a href="#" onclick="select_gallery('landscapes');">Landsacpes</a></li>

                    }


                }
            }

            if (isset($_COOKIE['admin']) && $_COOKIE['admin'] == 'true') {

                echo '</ul><ul><li><input type="text" id="new_gallery"></li><li><button onclick = "add_gallery();" >Add Gallery</button ></li >';

            }

            ?>

		</ul>

	</section>

	<div id="xxx_test" class="container slideLeft" style=" -webkit-animation-duration: 3s; ">
		<div class="main">

			<div class="gamma-container gamma-loading" id="gamma-container" style="min-height: 500px">

				<div class="row 25%" id="gallery" style="display:none" >

					<?php echo $data['artworks']; ?>

				</div>

				<div class="gamma-overlay"></div>

				<div id="loadmore" class="loadmore">Example for loading more items...</div>

			</div><!--/main-->
		</div>
	</div>



    <?php

    if (isset($_COOKIE['admin']) && $_COOKIE['admin'] == 'true') {
        echo '<div style="text-align: center" xmlns="http://www.w3.org/1999/html">
									<form enctype="multipart/form-data" method="POST">

										<label>Large image</label><input name="gallery_img_large" id="gallery_img_large" type="file" />
										<br>
										<label>Small image</label><input name="gallery_img_small" id="gallery_img_small" type="file" />

										<br>
										<label>Name work</label><textarea name="name_work" cols="150" rows="2" ></textarea>

										<br>
										<label>Name gallery type</label><textarea name="name_gallery_type" cols="5" rows="1" ></textarea>

										<br>
										<button  onclick="addWork();" >Add Work</button>

										<!--<input type="submit"  value="Send File" />-->

									</form>
								</div>';
        echo '<BR>';
        echo '<BR>';
        echo '<BR>';
        echo '<BR>';

        echo '</td></tr>';

        echo '</table>';

    }



    #############

    if (isset($_POST['name_gallery_type'])) {

        $post_id = date('Ymd');

        $upload_dir = 'images/artworks/' . $_POST['name_gallery_type'];

        $artworks_dir = scandir($upload_dir . '/large');

        $new_name = date('YmdHi');


        if (isset($_FILES['gallery_img_large']['tmp_name']) && isset($_FILES['gallery_img_small']['tmp_name'])) {

            if (!file_exists($upload_dir . '/large/' . $new_name . '.jpg')) {

                if (isset($_FILES['gallery_img_large']['tmp_name'])) {

                    move_uploaded_file($_FILES['gallery_img_large']['tmp_name'], $upload_dir . '/large/' . $new_name . '.jpg');

                }
            }

            if (!file_exists($upload_dir . '/small/' . $new_name . '.jpg')) {

                if (isset($_FILES['gallery_img_small']['tmp_name'])) {

                    move_uploaded_file($_FILES['gallery_img_small']['tmp_name'], $upload_dir . '/small/' . $new_name . '.jpg');

                }

            }


            $file = 'translations/artworks/' . $_POST['name_gallery_type'] . '/' . $_COOKIE['language'] . '/' . $new_name . '.txt';

            $fp = fopen($file, "w");
            fwrite($fp, $_POST['name_work']);


        }

    }


    ##############


    ?>



	<!-- Footer -->
	<div id="footer">
		<div class="container">


			<div class="row">
				<div class="12u">

					<!-- Contact -->
					<section class="contact">
						<header>



							<h1 style="font-size: 400%" class="text-shadow-logo"><a href="/">Elena Opaleva</a></h1>
						</header>
						<p>Find on social networks</p>
						<ul class="icons">
							<li><a href="https://twitter.com/" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="https://www.facebook.com/?_rdr" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="https://instagram.com/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="https://ru.pinterest.com/" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
							<li><a href="https://dribbble.com/" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="https://www.linkedin.com/home" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>
						</ul>
					</section>

					<!-- Copyright -->
					<div class="copyright">
						<ul class="menu">
							<li>&copy; 2015 ELENA OPALEVA. All rights reserved.</li><li>Design by <a href="http://kirillgoryunov.com">KIRILL GORYUNOV</a></li>
						</ul>
					</div>

				</div>

			</div>
		</div>
	</div>

</div>


<!-- Scripts -->
<script>

	$(function () {


		$('#gallery').poptrox({
			usePopupCaption: true
		});
		$('.caption').css('font-size', '80%');
		$('.caption').css('line-height', '115%');
		$('.caption').css('padding-top', '2%');
		$('.caption').css('padding-bottom', '5%');

		$("#gallery").show('fast');


	});


</script>

<script src="/js/pages/artworks/artworks.js"></script>

<script src="assets/gallery/js/jquery.masonry.min.js"></script>
<script src="assets/gallery/js/jquery.history.js"></script>
<script src="assets/gallery/js/js-url.min.js"></script>
<script src="assets/gallery/js/jquerypp.custom.js"></script>
<script src="assets/gallery/js/gamma.js"></script>
<script type="text/javascript">

	$(function() {

		var GammaSettings = {
			// order is important!
			viewport : [ {
				width : 1200,
				columns : 5
			}, {
				width : 900,
				columns : 4
			}, {
				width : 500,
				columns : 3
			}, {
				width : 320,
				columns : 2
			}, {
				width : 0,
				columns : 2
			} ]
		};

		Gamma.init( GammaSettings, fncallback );


		// Example how to add more items (just a dummy):



		function fncallback() {
			/*
			 $( '#loadmore' ).show().on( 'click', function() {

			 ++page;
			 var newitems = items[page-1]
			 if( page <= 1 ) {

			 Gamma.add( $( newitems ) );

			 }
			 if( page === 1 ) {

			 $( this ).remove();

			 }

			 } );
			 */
		}

	});

</script>

</body>
</html>
