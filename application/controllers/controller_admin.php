<?php

class Controller_Admin extends Controller
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
				
		$this->view->generate('', 'admin_view.php');
		//$this->view->generate('main_view.php', 'template_view.php');
			

			
	}

	function login() {

		if ($_POST['username'] == 'opaleva' && $_POST['password'] == '123') {

			setcookie("admin", 'true');

		}

		//echo $_POST['username'];

	}

	function logout() {

		setcookie("admin", null);

		//echo $_POST['username'];

	}
		
}