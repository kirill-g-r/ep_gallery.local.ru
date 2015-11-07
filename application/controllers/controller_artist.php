<?php

class Controller_Artist extends Controller
{

	function action_index()
	{

		if ($ajax_action = $this->ajax_request()) {

			// if AJAX-request

			return $this->$ajax_action();

		} else {

			// simple load page

			return $this->load_page();

		}

	}

	function load_page() {

		if (!isset($_COOKIE['language'])) {

			setcookie("language", 'EN');

		}

		$this->view->generate('', 'artist_view.php');
		//$this->view->generate('main_view.php', 'template_view.php');


	}

	function update_artist_info() {

		$file = 'translations/' . $_COOKIE['language'] . '/artist/artist.txt';

		$fp = fopen($file, "w");
		fwrite($fp, $_POST['artist_info']);

		/* заменяем переносы строки в файле на тег BR. заменить можно что угодно */
		//$contents = str_replace("\n", "<br>", $contents);

		//echo $_POST['artist_info'];

	}


		
}