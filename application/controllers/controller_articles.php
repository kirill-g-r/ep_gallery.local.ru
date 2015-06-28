<?php

class Controller_Articles extends Controller
{
				
	function action_index() {
				
		$this->view->generate('', 'articles_view.php');
		//$this->view->generate('main_view.php', 'template_view.php');
			

			
	}
		
}