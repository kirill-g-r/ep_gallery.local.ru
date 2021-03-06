<?php

class Controller_About extends Controller
{

    function __construct() {

        $this->model = new Model_About();
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

        $this->view->generate('about_view.php', 'template_view.php');

    }

    function addcharge() {

        $this->checkUserAccess();

        $this->model->data['user_id'] = $_SESSION['user_id'];

        $this->model->addcharge( $this->parse_new_charge() );
        $data = $this->model->get_data();
        $this->view->generate('', 'charges_view.php', $data);

    }
    function parse_new_charge() {

        $charge['name'] =       $_POST['add_charge_name'];
        $charge['coast'] =      $_POST['add_charge_coast'];
        $charge['currency'] =   $_POST['add_charge_currency'];
        $charge['category'] =   $_POST['add_charge_category'];

        foreach ($charge as $key => $ch) {

            $charge[$key] = trim(htmlspecialchars(stripcslashes($ch)));

        }

        return $charge;

    }
    function delete_charge_from_summary_table_get_id() {

        if (isset($_POST['action'])
            && $_POST['action'] == 'delete_charge_from_summary_table'
            && isset($_POST['delete_charge_from_summary_table_id'])
            && $_POST['delete_charge_from_summary_table_id']) {

            return $_POST['delete_charge_from_summary_table_id'];

        }

        return false;

    }
    function delete_charge_from_summary_table() {

        $this->checkUserAccess();

        $this->model->delete_charge_from_summary_table($this->delete_charge_from_summary_table_get_id());
        $data = $this->model->get_data();
        $this->view->generate('', 'charges_view.php', $data);

    }


    function __destruct() {


    }

}
