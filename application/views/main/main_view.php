
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




		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script src="assets/js/main.js"></script>

		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>

	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">



					<!-- Inner -->
						<div class="inner">

							<header>
								<h1 style="font-size: 600%" class="text-shadow-logo slideLeft"><a href="/" id="logo">Elena Opaleva</a></h1>
								<hr class="hr_logo_name slideLeft"  />
								<p class="slideLeft">ARTIST</p>
							</header>
							<footer>

								<a href="#banner" class="button circled scrolly fa fa-arrow-circle-down fa-5x"></a>

							</footer>

						</div>

					<!-- Nav -->

						<nav id="nav">

							<ul>

								<?php

								if ($_COOKIE['language'] == 'EN') {


									echo '
											<li><a href="/">Home</a></li>
											<li><a class="transition" href="/artworks">Artworks</a></li>
											<li><a href="/artist">Artist</a></li>
											<li><a href="/news">News</a></li>
											<li><a href="/articles">Articles</a></li>
											<li><a href="/contacts">Contacts</a></li>

											';



								} else {

									echo '
											<li><a href="/">Главная</a></li>
											<li><a class="transition" href="/artworks">Галерея</a></li>
											<li><a href="/artist">О хужожнице</a></li>
											<li><a href="/news">Новости</a></li>
											<li><a href="/articles">Статьи</a></li>
											<li><a href="/contacts">Контакты</a></li>

											';

								}


								?>

<!--
								<li><a href="/">Home</a></li>
								<li><a class="transition" href="/artworks">Artworks</a></li>
								<li><a href="/artist">Artist</a></li>
								<li><a href="/news">News</a></li>
								<li><a href="/articles">Articles</a></li>
								<li><a href="/contacts">Contacts</a></li>
-->

							</ul>

							<br>
							<br>

							<a style="cursor: pointer" onclick="change_language('EN');">EN</a>/<a style="cursor: pointer" onclick="change_language('RU');">RU</a>


							<!--<a href="../../../../EN">EN</a>/<a href="../../../../RU">RU</a>
							-->

						</nav>

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
<!--
					<li><a href="/">Home</a></li>
					<li><a href="/artworks">Artworks</a></li>
					<li><a href="/artist">Artist</a></li>
					<li><a href="/news">News</a></li>
					<li><a href="/articles">Articles</a></li>
					<li><a href="/contacts">Contacts</a></li>
-->

				</ul>

			</div>

			<!-- Banner -->
			<section id="banner" style="padding-top: 2%; padding-bottom: 1%;">
				<header>
					<a href="/artworks"><h2 class="zapfiro text-shadow" style="font-size: 400%;">Artworks</h2></a>
					<!--
                                            <p>
                                                A (free) responsive site template by <a href="http://html5up.net">HTML5 UP</a>.
                                                Built on <strong>skel</strong> and released under the <a href="http://html5up.net/license">CCA</a> license.
                                            </p>
                    -->
				</header>
			</section>

			<!-- Carousel -->
			<section id="carousel2" class="carousel">
				<div class="reel">
					<div id="carousel">
						<article>
							<a  href="images/slider/large/1.jpg" class="image featured"><img src="images/slider/small/1.jpg_small.jpg"  alt="" title="Baptism"></a>
							<!--<a href="#banner" class="image featured"><img src="images/1_2.jpg" alt="" /></a>-->
<!--
							<header>
								<h3>#Натюрморт</h3>
							</header>
-->

						</article>

						<article>
							<a href="images/slider/large/2.jpg" class="image featured"><img src="images/slider/small/2.jpg_small.jpg" alt="" title="Snow in Paris"/></a>

						</article>

						<article>
							<a href="images/slider/large/3.jpg" class="image featured"><img src="images/slider/small/3.jpg_small.jpg" alt="" title="Barges on the Seine"/></a>

						</article>

						<article>
							<a href="images/slider/large/4.jpg" class="image featured"><img src="images/slider/small/4.jpg_small.jpg" alt="" title="Strasbourg Pont St. Martin"/></a>

						</article>

						<article>
							<a href="images/slider/large/5.jpg" class="image featured"><img src="images/slider/small/5.jpg_small.jpg" alt="" title="Strasbourg Pont St. Martin"/></a>

						</article>

						<article>
							<a href="images/slider/large/10.jpg" class="image featured"><img src="images/slider/small/10.jpg_small.jpg" alt="" title="Strasbourg. La Petite France"/></a>

						</article>

						<article>
							<a href="images/slider/large/11.jpg" class="image featured"><img src="images/slider/small/11.jpg_small.jpg" alt="" title="Shady Street. Eze"/></a>

						</article>

						<article>
							<a href="images/slider/large/8.jpg" class="image featured"><img src="images/slider/small/8.jpg_small.jpg" alt="" title="Flower Market in Paris"/></a>

						</article>

						<!--Reprize slider-->

						<article>
							<a  href="images/slider/large/1.jpg" class="image featured"><img src="images/slider/small/1.jpg_small.jpg"  alt="" title="Baptism"></a>
							<!--<a href="#banner" class="image featured"><img src="images/1_2.jpg" alt="" /></a>-->
							<!--
                                                        <header>
                                                            <h3>#Натюрморт</h3>
                                                        </header>
                            -->

						</article>

						<article>
							<a href="images/slider/large/2.jpg" class="image featured"><img src="images/slider/small/2.jpg_small.jpg" alt="" title="Snow in Paris"/></a>

						</article>

						<article>
							<a href="images/slider/large/3.jpg" class="image featured"><img src="images/slider/small/3.jpg_small.jpg" alt="" title="Barges on the Seine"/></a>

						</article>

						<article>
							<a href="images/slider/large/4.jpg" class="image featured"><img src="images/slider/small/4.jpg_small.jpg" alt="" title="Strasbourg Pont St. Martin"/></a>

						</article>

						<article>
							<a href="images/slider/large/5.jpg" class="image featured"><img src="images/slider/small/5.jpg_small.jpg" alt="" title="Strasbourg Pont St. Martin"/></a>

						</article>

						<article>
							<a href="images/slider/large/10.jpg" class="image featured"><img src="images/slider/small/10.jpg_small.jpg" alt="" title="Strasbourg. La Petite France"/></a>

						</article>

						<article>
							<a href="images/slider/large/11.jpg" class="image featured"><img src="images/slider/small/11.jpg_small.jpg" alt="" title="Shady Street. Eze"/></a>

						</article>

						<article>
							<a href="images/slider/large/8.jpg" class="image featured"><img src="images/slider/small/8.jpg_small.jpg" alt="" title="Flower Market in Paris"/></a>

						</article>

						<!--End of reprize slider-->

					</div>
				</div>
			</section>


			<?php

/*

			if (isset($_COOKIE['admin']) && $_COOKIE['admin'] == 'true') {
				echo '<div style="text-align: center" xmlns="http://www.w3.org/1999/html">
									<form enctype="multipart/form-data" method="POST">

										<label>Large image</label><input name="silder_img_large1" id="slider_img_large1" type="file" />
										<br>
										<label>Small image</label><input name="slider_img_small1" id="slider_img_small1" type="file" />
										<br>

										<label>Name work</label><textarea name="name_work1" cols="150" rows="2" ></textarea>
										<br>

										<label>Large image</label><input name="silder_img_large2" id="slider_img_large2" type="file" />
										<br>
										<label>Small image</label><input name="slider_img_small2" id="slider_img_small2" type="file" />
										<br>

										<label>Name work</label><textarea name="name_work2" cols="150" rows="2" ></textarea>
										<br>

										<label>Large image</label><input name="silder_img_large3" id="slider_img_large3" type="file" />
										<br>
										<label>Small image</label><input name="slider_img_small3" id="slider_img_small3" type="file" />
										<br>

										<label>Name work</label><textarea name="name_work3" cols="150" rows="2" ></textarea>
										<br>

										<label>Large image</label><input name="silder_img_large4" id="slider_img_large4" type="file" />
										<br>
										<label>Small image</label><input name="slider_img_small4" id="slider_img_small4" type="file" />
										<br>

										<label>Name work</label><textarea name="name_work4" cols="150" rows="2" ></textarea>
										<br>

										<label>Large image</label><input name="silder_img_large5" id="slider_img_large5" type="file" />
										<br>
										<label>Small image</label><input name="slider_img_small5" id="slider_img_small5" type="file" />
										<br>

										<label>Name work</label><textarea name="name_work5" cols="150" rows="2" ></textarea>
										<br>

										<label>Large image</label><input name="silder_img_large6" id="slider_img_large6" type="file" />
										<br>
										<label>Small image</label><input name="slider_img_small6" id="slider_img_small6" type="file" />
										<br>

										<label>Name work</label><textarea name="name_work6" cols="150" rows="2" ></textarea>
										<br>

										<label>Large image</label><input name="silder_img_large7" id="slider_img_large7" type="file" />
										<br>
										<label>Small image</label><input name="slider_img_small7" id="slider_img_small7" type="file" />
										<br>

										<label>Name work</label><textarea name="name_work" cols="150" rows="2" ></textarea>
										<br>

										<label>Large image</label><input name="silder_img_large" id="slider_img_large" type="file" />
										<br>
										<label>Small image</label><input name="slider_img_small" id="slider_img_small" type="file" />
										<br>

										<label>Name work</label><textarea name="name_work" cols="150" rows="2" ></textarea>
										<br>


										<button  onclick="addWork();" >Update Slider</button>

										<!--<input type="submit"  value="Send File" />-->

									</form>
								</div>';
				echo '<BR>';
				echo '<BR>';
				echo '<BR>';
				echo '<BR>';

				echo '</td></tr>';

				echo '</table>';


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

			}

			##############

*/
			?>


			<div id="header-like">
			</div>

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">

							<!-- Tweets -->
								<section class="4u 12u(mobile)">
									<header>
										<a href="/news">
											<h3 class="zapfiro" style="font-size: 300%;">News</h3>
                                        	<br>
											<h2 class="icon fa-newspaper-o circled"><span class="label">Tweets</span></h2>
										</a>
									</header>
									<ul class="divided">



											<?php

											$dir = scandir('translations/news/');

											arsort($dir);

											if ($dir) {

												foreach ($dir as $key => $item) {

													if (strlen($item) != 8) {

														continue;

													}

													if ($key == 3) {

														break;

													}


													$file = 'translations/news/' . $item . '/' . $_COOKIE['language'] . '/item.txt';

													if (file_exists($file)) {

														$fp = fopen($file, "r");
														$contents = fread($fp, filesize($file));
														fclose($fp);
														unset($fp);

														/* заменяем переносы строки в файле на тег BR. заменить можно что угодно */
														if (strpos($contents, "\n")) {

															$contents = substr($contents, 0, strpos($contents, "\n"));

														} else {

															$contents = $contents;

														}


														echo '	<li>
														<article class="tweet">
															' . $contents . '
															<BR>
															<span class="timestamp">' . date("d.m.Y", strtotime($item)) . '</span>
															</article>
														</li>';

														unset($contents);

													}


												}

											}

											unset($dir);



											?>


<!--
											<article class="tweet">
												Added a new artwork in landscapes theme.
												<BR>
												<span class="timestamp">21.10.2015</span>
											</article>
										</li>
										<li>
											<article class="tweet">
												Added a new artwork in landscapes theme.
												<BR>
												<span class="timestamp">19.10.2015</span>
											</article>
										</li>
										<li>
											<article class="tweet">
												Added a new artwork in compositions theme.
												<BR>
												<span class="timestamp">9.10.2015</span>
											</article>
										</li>
-->
									</ul>
								</section>

                            <!-- Photos -->
                            <section class="4u 12u(mobile)">

								<header>
									<a href="/artworks">
										<h3 class="zapfiro" style="font-size: 300%;">Last Artworks</h3>
                                    	<br>
                                    	<h2 class="icon fa-image circled"><span class="label">Photos</span></h2>
									</a>
								</header>

<!--
                                <div class="row 25%">

                                    <div class="6u">
                                        <a href="images/20_2.jpg" class="image fit"><img src="images/20_2.jpg" alt="" /></a>
                                    </div>
                                    <div class="6u$">
                                        <a href="#" class="image fit"><img src="images/10_2.JPG" alt="" /></a>
                                    </div>
                                    <div class="6u">
                                        <a href="#" class="image fit"><img src="images/17_2.jpg" alt="" /></a>
                                    </div>
                                    <div class="6u$">
                                        <a href="#" class="image fit"><img src="images/1_2.jpg" alt="" /></a>

									</div>

                                </div>
-->

								<style>
									.layer_gkg {
										overflow: hidden; /* Добавляем полосы прокрутки */
										width: 300px; /* Ширина блока */
										height: 180px; /* Высота блока */


									}
									.layer_gkg_2 {
										overflow: hidden; /* Добавляем полосы прокрутки */
										width: 300px; /* Ширина блока */
										height: 180px; /* Высота блока */


									}

								</style>


								<div class="row 25%" id="gallery_new_artworks">


									<?php

									$dir_type = 'landscapes';

									$dir = @scandir('images/artworks/'.$dir_type.'/large/');

									arsort($dir);

									if ($dir) {

										$count = 0;
										foreach ($dir as $item) {

											if (strlen($item) < 4) {

												continue;

											}

											$count++;

											if ($count > 2) {

												break;

											}


											$file = 'translations/artworks/' . $dir_type . '/' . $_COOKIE['language'] . '/' . substr($item, 0, -4) . '.txt';

											if (file_exists($file)) {

												$fp = fopen($file, "r");
												$contents = fread($fp, filesize($file));
												$contents = str_replace("\n", "<br>", $contents);
												fclose($fp);
												unset($fp);


												echo '
												<article class="6u" >
													<a href="images/artworks/' . $dir_type . '/large/' . $item . '" class="image fit"><img src="images/artworks/' . $dir_type . '/small/' . $item . '" alt="" title="' . @$contents . '" /></a>
												</article>';

												unset($contents);

											}


										}

									}

									unset($dir);


									#####################################


									$dir_type = 'composition';

									$dir = @scandir('images/artworks/'.$dir_type.'/large/');

									arsort($dir);

									if ($dir) {

										$count = 0;
										foreach ($dir as $item) {

											if (strlen($item) < 4) {

												continue;

											}

											$count++;

											if ($count > 2) {

												break;

											}


											$file = 'translations/artworks/' . $dir_type . '/' . $_COOKIE['language'] . '/' . substr($item, 0, -4) . '.txt';

											if (file_exists($file)) {

												$fp = fopen($file, "r");
												$contents = fread($fp, filesize($file));
												$contents = str_replace("\n", "<br>", $contents);
												fclose($fp);
												unset($fp);


												echo '
												<article class="6u" >
													<a href="images/artworks/' . $dir_type . '/large/' . $item . '" class="image fit"><img src="images/artworks/' . $dir_type . '/small/' . $item . '" alt="" title="' . @$contents . '" /></a>
												</article>';

												unset($contents);

											}


										}

									}

									unset($dir);


									?>

<!--

									<article class="6u" >
										<a href="images/artworks/landscapes/large/1.jpg" class="image fit"><img src="images/artworks/landscapes/small/1.jpg_small.jpg" alt="" title="Baptism" /></a>
									</article>
									<article class="6u$">
										<a href="images/artworks/landscapes/large/2.jpg" class="image fit"><img src="images/artworks/landscapes/small/2.jpg_small.jpg" alt="" title="Barges on the Seine"  /></a>
									</article>
									<article class="6u">
										<a href="images/artworks/landscapes/large/3.jpg" class="image fit"><img src="images/artworks/landscapes/small/3.jpg_small.jpg" alt="" title="Barges on the Seine" /></a>
									</article>
									<article class="6u$">
										<a href="images/artworks/slider/large/4.jpg" class="image fit"><img src="images/artworks/landscapes/small/4.jpg_small.jpg" alt="" title="Restaurant on the Pont St. Martin. Strasbourg" /></a>

									</article>
-->

								</div>

                            </section>

							<!-- Posts -->
								<section class="4u 12u(mobile)">
									<header>
										<a href="/articles">
                                        	<h3 class="zapfiro" style="font-size: 300%;">Articles</h3>
                                        	<br>

											<h2 class="icon fa-file circled"><span class="label">Posts</span></h2>
										</a>
									</header>
									<ul class="divided">



										<?php

											$dir = scandir('translations/articles/');

											arsort($dir);

												if ($dir) {

													foreach ($dir as $key => $item) {

														if (strlen($item) != 8) {

															continue;

														}

														if ($key == 3) {

															break;

														}


														$file = 'translations/articles/' . $item . '/' . $_COOKIE['language'] . '/item.txt';

														if (file_exists($file)) {

															$fp = fopen($file, "r");
															$contents = fread($fp, filesize($file));
															fclose($fp);
															unset($fp);

															/* заменяем переносы строки в файле на тег BR. заменить можно что угодно */
															if (strpos($contents, "\n")) {

																$contents = substr($contents, 0, strpos($contents, "\n"));

															} else {

																$contents = $contents;

															}


															echo '<li>
																	<article class="tweet">
																	<a href="/articles">' . $contents . '</a>
																	<BR>
																	<span class="timestamp">' . date("d.m.Y", strtotime($item)) . '</span>
																	</article>
																	</li>';

															unset($contents);

														}


													}

												}

												unset($dir);



											?>


<!--
											<article class="post stub">
												<header>
													<h3><a href="#">Как правильно подобрать обрамление для картины</a></h3>
												</header>
												<span class="timestamp">3 hours ago</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">Some text, some text</a></h3>
												</header>
												<span class="timestamp">6 hours ago</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">Some text, some text</a></h3>
												</header>
												<span class="timestamp">Yesterday</span>
											</article>

											<article class="tweet">
												<a href="/articles">How to choose the right frame for the picture.</a>
												<BR>
												<span class="timestamp">11.10.2015</span>
											</article>

											<article class="tweet">
												<a href="/articles">Some text, some text.</a>
												<span class="timestamp">40 minutes ago</span>
											</article>
-->


									</ul>
								</section>

						</div>
						<hr />
						<div class="row">
							<div class="12u">

								<!-- Contact -->
									<section class="contact">
										<header>
<!--
											<ul id="nav_bottom">
												<li><a href="/">Home</a></li>
												<li><a href="/artworks">Artworks</a></li>
												<li><a href="/artist">Artist</a></li>
-->
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
<!--
												<li><a href="/news">News</a></li>
												<li><a href="/articles">Articles</a></li>
												<li><a href="/contacts">Contacts</a></li>
											</ul>
-->
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

		<script src="/js/pages/main/main.js"></script>

		<script>
			$(function() {
				$('#gallery').poptrox({
					usePopupCaption: true
				});


				$('#gallery_new_artworks').poptrox({
					usePopupCaption: true
				});

				$('.caption').css('font-size', '80%');
				$('.caption').css('line-height', '115%');
				$('.caption').css('padding-top', '2%');
				$('.caption').css('padding-bottom', '2%');

			});
		</script>

	</body>
</html>