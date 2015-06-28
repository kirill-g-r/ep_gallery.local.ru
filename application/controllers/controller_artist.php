<?php

class Controller_Artist extends Controller
{
				
	function action_index() {
				
		$this->view->generate('', 'artist_view.php');
		//$this->view->generate('main_view.php', 'template_view.php');
			

			
	}
		
}