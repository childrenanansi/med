<?php

class Controller_Ajax extends Controller
{

	function __construct()
	{
		$this->model = new Model_Ajax();
		$this->view = new View();
	}
	
	function action_index()
	{
		$data = $this->model->get_data();
        echo $data;
		return $data;
	}
}
