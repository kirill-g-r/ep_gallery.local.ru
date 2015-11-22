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


	}

	function update_artist_info() {

		$file = 'translations/artist/' . $_COOKIE['language'] . '/artist.txt';

		$fp = fopen($file, "w");
		fwrite($fp, $_POST['artist_info']);

	}


		
}