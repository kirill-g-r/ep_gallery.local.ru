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

		if ($_COOKIE['language'] == 'EN') {

			$data['artworks_type'] = 'landscapes';

		} else {

			$data['artworks_type'] = 'пейзажи';

		}

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

				$contents = '';
				$file = 'translations/artworks/' . $type . '/' . $_COOKIE['language'] . '/'.substr($artworks['small'][$key], 0, -3).'txt';

				if (file_exists($file)) {

					$fp = fopen($file, "r");
					$contents = fread($fp, filesize($file));
					fclose($fp);
					unset($fp);

					/* заменяем переносы строки в файле на тег BR. заменить можно что угодно */
					$contents = str_replace("\n", "<br>", $contents);


				}

				$html .= '

					<article class="3u">
						<a href="images/artworks/' . $type . '/large/' . $artworks['large'][$key] . '" class="image fit"><img src="images/artworks/' . $type . '/small/' . $artworks['small'][$key] . '" id="'.$id_work_name.'" alt="" title="<b>' . $contents . '</b>" /></a>'.$delete_button.'
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


		}

		return $html;

	}

	function add_gallery() {

		mkdir('images/artworks/' . $_POST['new_gallery_name'], 0777, true);
		mkdir('images/artworks/' . $_POST['new_gallery_name'] . '/large', 0777, true);
		mkdir('images/artworks/' . $_POST['new_gallery_name'] . '/small', 0777, true);

		mkdir('translations/artworks/' . $_POST['new_gallery_name'], 0777, true);
		mkdir('translations/artworks/' . $_POST['new_gallery_name'] . '/EN', 0777, true);
		mkdir('translations/artworks/' . $_POST['new_gallery_name'] . '/RU', 0777, true);


	}
	function add_work() {


		return true;


	}
	function delete_work() {

		unlink($_POST['src_img_small']);
		unlink(str_replace('/small/', '/large/', $_POST['src_img_small']));


		$name_tr_del = $_POST['src_img_small'];
		$name_tr_del_2 = substr($name_tr_del, (strrpos($name_tr_del, '/small/') + 7), -3);

		$name_tr_del_3 = str_replace('images/artworks/', '', $name_tr_del);
		$name_tr_del_3 = substr($name_tr_del_3, 0, strpos($name_tr_del_3, '/small'));

		unlink('translations/artworks/' .$name_tr_del_3 . '/'.$_COOKIE['language'].'/'.$name_tr_del_2 . 'txt');


	}
	function delete_gallery() {

		$this->removeDir('images/artworks/' .$_POST['gallery_type']);

	}
		
}

