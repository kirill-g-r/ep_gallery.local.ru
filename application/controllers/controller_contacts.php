<?php

class Controller_Contacts extends Controller
{
				
	function action_index() {
				
		$this->view->generate('', 'contacts_view.php');
		//$this->view->generate('main_view.php', 'template_view.php');
			

			
	}
		
}