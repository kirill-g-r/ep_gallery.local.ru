<?php

class Controller_Main extends Controller
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
				
		$this->view->generate('', 'main_view.php');
		//$this->view->generate('main_view.php', 'template_view.php');
			

			
	}

	function change_language() {

		setcookie("language", $_POST['language']);
		//echo $_COOKIE['language'];

	}
		
}