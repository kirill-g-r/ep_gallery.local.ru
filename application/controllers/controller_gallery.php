<?php

class Controller_Gallery extends Controller
{

    function action_index() {

        if ( $this->userIsLogged() ) {

            //header('Location:/charges');
            $this->view->generate('', 'gallery_view.php');

        } else {

            $this->view->generate('', 'gallery_view.php');
            //$this->view->generate('main_view.php', 'template_view.php');

        }

    }

}