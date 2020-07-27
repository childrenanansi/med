<?php

class Controller_Main extends Controller
{

    function __construct()
    {
        $this->model = new Model_Main();
        $this->view = new View();
    }

    function action_index()
    {
    	$data = $this->model->get_data();
    	$return_data = [];
		foreach ($data['medrab'] as $rows){
			if($rows['id_employee'] != 0){
				$return_data['ap'][$rows['id_employee']][] = $rows;
			}
		}
    	$return_data['task'] = $data['task'];
    	$return_data['medrab'] = $data['medrab'];
        $this->view->generate('main_view.php', 'template_view.php', $return_data);
    }
}