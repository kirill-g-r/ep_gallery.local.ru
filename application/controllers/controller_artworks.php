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

		$data['artworks_type'] = 'landscapes';

		$data['artworks'] = $this->getArtworks($data['artworks_type']);

		$this->view->generate('', 'artworks_view.php', $data);
		//$this->view->generate('main_view.php', 'template_view.php');

			
	}

	function select_gallery() {

		$data['artworks_type'] = $_POST['artworks_type'];

		echo $data['artworks'] = $this->getArtworks($data['artworks_type']);



	}

	function getArtworks($type = 'landscapes') {

		$id_work = 0;

		$artworks = $this->model->getArtworks($type);

		$html = '';

		//--------

		$html .= '
					<div id="xxx_test" class="container slideLeft" style="-webkit-animation-duration: 3s;">
						<div class="main">
							<div class="gamma-container gamma-loading" id="gamma-container">
								<div class="row 25%" id="gallery">

					';


	//--------

		if ($artworks) {

			foreach ($artworks['large'] as $key => $artwork) {

				if (!isset($artworks['large'][$key]) || !isset($artworks['small'][$key])) {
					continue;
				}

				if (!isset($artworks['name'][$key])) {

					$artworks['name'][$key] = 'NO TITLE';

				}

				$id_work_name = $type . '_' . $id_work++;
				$id_work_name_btn = "'".$id_work_name."'";

				if (isset($_COOKIE['admin']) && $_COOKIE['admin'] == 'true') {

					$delete_button = '<button onclick="delete_work('.$id_work_name_btn.');">Delete Work</button>';


				} else {

					$delete_button = '';

				}

				$html .= '

					<article class="3u">
						<a href="images/artworks/' . $type . '/large/' . $artworks['large'][$key] . '" class="image fit"><img src="images/artworks/' . $type . '/small/' . $artworks['small'][$key] . '" id="'.$id_work_name.'" alt="" title="<b>' . $artworks['name'][$key] . '</b><BR>' . $artworks['property'][$key] . '" /></a>'.$delete_button.'
					</article>

					';


			}

		} else {

			echo '<article><label>No artworks</label></article>';

		}



		$html .= '
								</div>
							</div>
						</div>
					</div>

					';


		if (isset($_COOKIE['admin']) && $_COOKIE['admin'] == 'true') {

/*
			$html .= '<div style="text-align: center" xmlns="http://www.w3.org/1999/html">
									<form enctype="multipart/form-data" method="POST">

										<label>Large image</label><input name="gallery_img_large" id="gallery_img_large" type="file" />
										<br>
										<label>Small image</label><input name="gallery_img_small" id="gallery_img_small" type="file" />

										<br>
										<br>
										<button  onclick="addWork();" >Add Work</button>

										<!--<input type="submit"  value="Send File" />-->

									</form>
								</div>';
			$html .= '<BR>';
			$html .= '<BR>';
			$html .= '<BR>';
			$html .= '<BR>';

			$html .= '</td></tr>';

			$html .= '</table>';
*/



		}

		return $html;

	}

	function add_gallery() {

		mkdir('images/artworks/' . $_POST['new_gallery_name'], 0777, true);
		mkdir('images/artworks/' . $_POST['new_gallery_name'] . '/large', 0777, true);
		mkdir('images/artworks/' . $_POST['new_gallery_name'] . '/small', 0777, true);

	}
	function add_work() {


		return true;


	}
	function delete_work() {

		unlink($_POST['src_img_small']);
		unlink(str_replace('/small/', '/large/', $_POST['src_img_small']));

	}
		
}

