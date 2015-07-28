<?php

class Controller_Artworks extends Controller
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

		$data['artworks_type'] = 'Landscapes';

		$this->view->generate('', 'artworks_view.php', $data);
		//$this->view->generate('main_view.php', 'template_view.php');

			
	}

	function select_gallery() {
echo '123<BR>123<BR>123';
		$data['artworks_type'] = $_POST['artworks_type'];

		//$this->view->generate('', 'artworks_view.php', $data);

	}
		
}