<?php

class Controller_Artworks extends Controller
{

	function __construct() {

		$this->model = new Model_Artworks();
		$this->view = new View();

	}
				
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

		$data['artworks'] = $this->getArtworks();

		$this->view->generate('', 'artworks_view.php', $data);
		//$this->view->generate('main_view.php', 'template_view.php');

			
	}

	function select_gallery() {
echo '123<BR>123<BR>123';
		$data['artworks_type'] = $_POST['artworks_type'];

		//$this->view->generate('', 'artworks_view.php', $data);

	}

	function getArtworks() {

		$artworks = $this->model->getArtworks();

		$html = '';

		foreach ( $artworks['large'] as $key => $artwork ) {

			if (!isset($artworks['large'][$key]) || !isset($artworks['small'][$key])) {
				continue;
			}

			if (!isset($artworks['name'][$key])) {

				$artworks['name'][$key] = 'NO TITLE';

			}

			$html .= '

				<article class="3u">
					<a href="images/artworks/large/'.$artworks['large'][$key].'" class="image fit"><img src="images/artworks/small/'.$artworks['small'][$key].'" alt="" title="'.$artworks['name'][$key].'" /></a>
				</article>

				';


		}

		return $html;

	}
		
}