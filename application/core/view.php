<?php

class View
{
	
	//public $template_view; // здесь можно указать общий вид по умолчанию.
	
	/*
	$content_file - виды отображающие контент страниц;
	$template_file - общий для всех страниц шаблон;
	$data - массив, содержащий элементы контента страницы. Обычно заполняется в модели.
	*/
	function generate( $content_view, $template_view, $data = array() )
	{

		
		/*
		if(is_array($data)) {

			// преобразуем элементы массива в переменные
			extract($data);
		}
		*/
		
		/*
		динамически подключаем общий шаблон (вид),
		внутри которого будет встраиваться вид
		для отображения контента конкретной страницы.
		*/

		$template_folder = substr($template_view, 0, strpos($template_view, '_'));
		$content_folder = substr($content_view, 0, strpos($content_view, '_'));

		$content_view = $content_folder.'/'.$content_view;

		$data['scripts'][] = $this->include_scripts();

		include 'application/views/'.$template_folder.'/'.$template_view;
	}

	function include_scripts() {

		$res = explode('/', $_SERVER['REQUEST_URI']);

		return $res[1];

	}
}
