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

	}

	function delete_post() {

		$post_date = $_POST['post_id'];


		$this->removeDir('translations/news/' . $post_date);
		$this->removeDir('images/news/' . $post_date);

		echo $_POST['post_id'];

	}

	function add_post() {

		$post_img_id = $_POST['post_img_id'];
		$post_info = $_POST['post_info'];
		$post_id = date('Ymd');

		if (is_dir('translations/news/' . $post_id . '/' . $_COOKIE['language'])) {

			echo 'Only one post a day!';
			return true;

		}

		mkdir('translations/news/' . $post_id . '/' . $_COOKIE['language'], 0777, true);
		$file = 'translations/news/' . $post_id . '/' . $_COOKIE['language'] . '/item.txt';

		$fp = fopen($file, "w");
		fwrite($fp, $post_info);



		if (is_dir('images/news/' . $post_id)) {

			echo 'Only one post a day!';
			return true;

		}


		mkdir('images/news/' . $post_id, 0777, true);
		$upload_dir = 'images/news/' . $post_id . '/img.jpg';

	}
		
}