<?php

class Controller_News extends Controller
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

		$this->view->generate('', 'news_view.php');
		//$this->view->generate('main_view.php', 'template_view.php');



	}

	function delete_post() {

		//$post_date = date("Ymd", strtotime($_POST['post_id']));
		$post_date = $_POST['post_id'];


		$this->removeDir('translations/news/' . $post_date);
		$this->removeDir('images/news/' . $post_date);


//		unlink('translations/news/' . $_POST['post_id'] . '/' . $_COOKIE['language'] . '/item.txt');
//		unlink('images/news/' . $_POST['post_id'] . '/img.jpg');

		echo $_POST['post_id'];

	}
		
}