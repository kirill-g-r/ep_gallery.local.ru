<?php

class Controller_Contacts extends Controller
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


		$this->view->generate('', 'contacts_view.php');
		//$this->view->generate('main_view.php', 'template_view.php');



	}

	function sent_mail() {
/*
		$username   = 'kika';
		$email      = 'kika@mail.ru';
		$subject    = 'test';
		$message    = 'tetetetetete';
		$message .= "\n\n--------------------------\n" . "Letter from:\n" . $username . "\t" . $email;

		if (empty($message)) {

			$message = 'EMPTY MESSAGE';

		}

		mail("admin@kirillgoryunov.com", $subject, $message);

		echo '123321';
*/


		$username   = $_POST['name'];
		$email      = $_POST['email'];
		$subject    = $_POST['subject'];
		$message    = $_POST['message'];

		$to      = 'info@elena-opaleva.com';
		$subject = $subject;
		$message = $message;
		$headers = 'From: '.$username.' <'.$email.'>' . "\r\n" .
//    'Reply-To: admin@kirillgoryunov.com' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();

		mail($to, $subject, $message, $headers);








	}

		
}