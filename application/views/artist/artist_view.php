
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
						<li><a href="/">Home</a></li>
						<li><a href="/artworks">Artworks</a></li>
						<li><a href="/artist">Artist</a></li>
						<!--								<li><a href="/artist">Artist</a></li>
                                                            <ul>
                                                                <li><a href="">Biographi</a></li>
                                                                <li>
                                                                    <a href="">Media &hellip;</a>
                                                                    <ul>
                                                                        <li><a href="">Photo</a></li>
                                                                        <li><a href="">Video</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a href="">Exhibitions</a></li>
                                                                <li><a href="">Publishing</a></li>
                                                            </ul>

                                                        </li>
                        -->
						<li><a href="/news">News</a></li>
						<li><a href="/articles">Articles</a></li>
						<li><a href="/contacts">Contacts</a></li>
					</ul>
				</nav>

			</div>
</div>

		<div id="footer_gkg" style="opacity: 0.9">

			<ul id="nav_bottom" style=" text-align: center; margin-bottom: 0%;">
				<li><a href="/">Home</a></li>
				<li><a href="/artworks">Artworks</a></li>
				<li><a href="/artist">Artist</a></li>
				<!--								<li><a href="/artist">Artist</a></li>
                                                    <ul>
                                                        <li><a href="">Biographi</a></li>
                                                        <li>
                                                            <a href="">Media &hellip;</a>
                                                            <ul>
                                                                <li><a href="">Photo</a></li>
                                                                <li><a href="">Video</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="">Exhibitions</a></li>
                                                        <li><a href="">Publishing</a></li>
                                                    </ul>

                                                </li>
                -->
				<li><a href="/news">News</a></li>
				<li><a href="/articles">Articles</a></li>
				<li><a href="/contacts">Contacts</a></li>
			</ul>

		</div>
			<!-- Main -->
			<div class="wrapper style1">

				<div class="container slideLeft">

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
<!--							Elena has loved painting as long as she can remember; she trained as an economist but her heart always lay in creativity and so she took up a career in interior design. She continued to sketch or paint anything she saw that created an impression on her, eager to capture the image on paper, experimenting in many styles including abstract, impressionistic works and gradually moving towards realism as her work developed. Her love for beautiful interior designs merged with her remarkable talent for reproducing the essence of what she saw around her – from a street scene to a still life or even a neighbour’s dog - as part of her continual search for harmony and beauty in the world around us.
							Her magnificent works have featured in many art exhibitions in Russia and Europe, including the International Federation of Watercolour Artists in Moscow, and she has been awarded repeated prizes for her paintings in Moscow’s annual International Competition of Contemporary Art. She has travelled extensively in Europe seeking inspiration for her paintings. She has also been published in various catalogues including the Russian Art Catalogue and the Best Works of 2013 in Russia Catalogue.
							Elena is proficient in many mediums including acrylics, oils, pastels, pen and ink, pencil and watercolours.
-->
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



<!--
						<a href="#" class="image featured"><img src="images/pic06.jpg" alt="" /></a>
						<p>
							Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa
							posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus
							lobortis. Auctor etiam porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum
							consequat integer interdum integer purus sapien. Nibh eleifend nulla nascetur pharetra commodo mi augue
							interdum tellus. Ornare cursus augue feugiat sodales velit lorem. Semper elementum ullamcorper lacinia
							natoque aenean scelerisque vel lacinia mollis quam sodales congue.
						</p>
						<section>
							<header>
								<h3>Ultrices tempor sagittis nisl</h3>
							</header>
							<p>
								Nascetur volutpat nibh ullamcorper vivamus at purus. Cursus ultrices porttitor sollicitudin imperdiet
								at pretium tellus in euismod a integer sodales neque. Nibh quis dui quis mattis eget imperdiet venenatis
								feugiat. Neque primis ligula cum erat aenean tristique luctus risus ipsum praesent iaculis. Fermentum elit
								fringilla consequat dis arcu. Pellentesque mus tempor vitae pretium sodales porttitor lacus. Phasellus
								egestas odio nisl duis sociis purus faucibus morbi. Eget massa mus etiam sociis pharetra magna.
							</p>
							<p>
								Eleifend auctor turpis magnis sed porta nisl pretium. Aenean suspendisse nulla eget sed etiam parturient
								orci cursus nibh. Quisque eu nec neque felis laoreet diam morbi egestas. Dignissim cras rutrum consectetur
								ut penatibus fermentum nibh erat malesuada varius.
							</p>
						</section>
						<section>
							<header>
								<h3>Augue euismod feugiat tempus</h3>
							</header>
							<p>
								Pretium tellus in euismod a integer sodales neque. Nibh quis dui quis mattis eget imperdiet venenatis
								feugiat. Neque primis ligula cum erat aenean tristique luctus risus ipsum praesent iaculis. Fermentum elit
								ut nunc urna volutpat donec cubilia commodo risus morbi. Lobortis vestibulum velit malesuada ante
								egestas odio nisl duis sociis purus faucibus morbi. Eget massa mus etiam sociis pharetra magna.
							</p>
						</section>
-->
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