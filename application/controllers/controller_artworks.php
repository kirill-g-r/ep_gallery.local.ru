<?php

class Controller_Artworks extends Controller
{
				
	function action_index() {
				
		$this->view->generate('', 'artworks_view.php');
		//$this->view->generate('main_view.php', 'template_view.php');
			

			
	}
		
}