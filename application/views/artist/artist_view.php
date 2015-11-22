
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
		<!--<script src="assets/js/page_transition.js"></script>-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
    <style>
        @font-face {
            font-family: "Zapfino";
            src: url(/fonts/Zapfino.otf) ;
            font-weight: bold;


        }



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
			<!-- Main -->
			<div class="wrapper style1">

				<div id="page" class="container slideLeft" style="display: none">

					<article id="main" class="special">
						<header>

							<p>
							<h2 class="zapfiro text-shadow" style="font-size: 300%; margin-top: -8%; margin-bottom: -2%;">Artist</h2>
							</p>
						</header>
					</article>

					<article id="main" class="special">


						<BR>

						<p style="text-indent: 50px;">
							<img src="images/artist/<?php echo $_COOKIE['language']; ?>/artist.jpg"  height="400"
								 align="left"
								 vspace="5" hspace="5" style="padding-right: 5%">

							<?php

							if (isset($_COOKIE['admin']) && $_COOKIE['admin'] == 'true') {

								$file = 'translations/artist/' . $_COOKIE['language'] . '/artist.txt';

								$fp = fopen($file, "r");
								$contents = fread($fp, filesize($file));

								/* заменяем переносы строки в файле на тег BR. заменить можно что угодно */
								$contents = str_replace("\n", "<br>", $contents);

								//echo file_get_contents($file);http://www.youtube.com/watch?v=Rq0n5MS-zw0&list=PLX4HhkDnmQ8CvaaBufs0dk63WKDnc6mHE
								echo '<textarea id="artist_info" cols="100" rows="20" >'.$contents.'</textarea>';
								echo '<BR>';
								echo '<div style="text-align: center"> <button onclick="updateArtistInfo();">Update info</button> </div>';


							} else {

								$file = 'translations/artist/' . $_COOKIE['language'] . '/artist.txt';

								$fp = fopen($file, "r");
								$contents = fread($fp, filesize($file));

								/* заменяем переносы строки в файле на тег BR. заменить можно что угодно */
								$contents = str_replace("\n", "<br>", $contents);

								//echo file_get_contents($file);
								echo $contents;

							}

							?>
						</p>

					</article>

					<hr />
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>



				</div>

			</div>
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
											<li>&copy; 2015 ELENA OPALEVA. All rights reserved.</li><li>Developed by <a href="http://kirillgoryunov.com">KIRILL GORYUNOV</a></li>
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

					$("#page").show('fast');

					$('#page').poptrox({
						usePopupCaption: true
					});
					$('.caption').css('font-size', '80%');
					$('.caption').css('line-height', '115%');
					$('.caption').css('padding-top', '2%');
					$('.caption').css('padding-bottom', '5%');




				});


			</script>


			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.onvisible.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

			<script src="/js/pages/artist/artist.js"></script>

	</body>
</html>