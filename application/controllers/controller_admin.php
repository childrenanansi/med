<?php

class Controller_Admin extends Controller
{

    function __construct()
    {
        $this->model = new Model_Admin();
        $this->view = new View();
    }

    function action_index()
    {
        $data= $this->model->get_data();
        $this->view->generate('main_admin.php', 'template_view.php', $data);
    }
    
    function action_employee()
    {
        $data = $this->model->get_data_em();
        $this->view->generate('main_admin_employee.php', 'template_view.php', $data);
    }
    
    
    function action_institution()
    {
        $data = $this->model->get_data_inst();
        $this->view->generate('main_admin_institution.php', 'template_view.php', $data);
    }
}