
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
        h1 { font-family: "Zapfino"; }


    </style>
	<body class="no-sidebar">
	<div id="page-wrapper">

			<!-- Header -->
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

		<br>

		<!-- Form to Contact -->
		<div class="container slideLeft" >

			<article id="main" class="special">
				<header>

					<p>
					<h2 class="zapfiro text-shadow" style="font-size: 300%; margin-top: -3.5%; margin-bottom: -2%;">Contacts</h2>
					</p>
				</header>
			</article>


			<div class="row" style="padding-left: 10%; padding-right: 10%">

				<section class="6u 12u(mobile)" >

					<?php

            			if ($_COOKIE['language'] == 'EN') {

							echo '
								Please contact  me for additional information about pricing<br>
					or any other questions that you may have<br><br>
							';

						} else {

							echo '
								Please contact  me for additional information about pricing<br>
					or any other questions that you may have<br><br>
							';

						}

					?>

					<a class="icon fa-phone"><span class="label">Phone</span></a>
					&nbsp&nbsp&nbsp&nbsp&nbspPhone:
					<br>
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>+7 (985) 764-09-94</b>
						<br>
					<a class="icon fa-envelope"><span class="label">Email</span></a>
						&nbsp&nbsp&nbsp&nbsp&nbspEmail:
					<br>
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>opaleva.art@gmail.com</b>


				</section>

				<section class="6u 12u(mobile)" >

					<form method="post" action="#">
						<div class="row uniform">

							<?php

								if ($_COOKIE['language'] == 'EN') {

									echo '
											<div class="12u$">
												<input type="text" name="about_send_mail_message" id="about_send_mail_name" placeholder="Your name" />
												<input type="email" name="about_send_mail_message" id="about_send_mail_email" placeholder="Your Email" />
												<input type="text" name="about_send_mail_message" id="about_send_mail_subject" placeholder="Subject" />
												<textarea name="about_send_mail_message" id="about_send_mail_message" placeholder="Your message" rows="1"></textarea>
											</div>
											<div class="12u$">
												<ul class="actions">
													<li><input type="button" value="Send Message" class="special" onclick="sentMail();"/></li>
													<li><input type="reset" value="Reset" /></li>
												</ul>
											</div>
									';

								} else {

									echo '
											<div class="12u$">
												<input type="text" name="about_send_mail_message" id="about_send_mail_name" placeholder="Ваше имя" />
												<input type="email" name="about_send_mail_message" id="about_send_mail_email" placeholder="Ваш емэйл" />
												<input type="text" name="about_send_mail_message" id="about_send_mail_subject" placeholder="Тема письма" />
												<textarea name="about_send_mail_message" id="about_send_mail_message" placeholder="Текст письма" rows="1"></textarea>
											</div>
											<div class="12u$">
												<ul class="actions">
													<li><input type="button" value="Отправить" class="special" onclick="sentMail();"/></li>
													<li><input type="reset" value="Очистить" /></li>
												</ul>
											</div>
									';

								}

							?>


						</div>
					</form>
				</section>

			</div>
		</div>
		<BR>
		<BR>
		<BR>
		<BR>
		<BR>
		<BR>
		<BR>
		<BR>
		<BR>
		<BR>
		<BR>
		<BR>
		<BR>
		<BR>
		<BR>




		<!-- End of Form to Contact -->


			<!-- Footer -->
				<div id="footer">
					<div class="container">


						<div class="row">
							<div class="12u">


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
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.onvisible.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

			<script src="/js/pages/contacts/contacts.js"></script>

	</body>
</html>