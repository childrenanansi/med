<?php

class Model_Main extends Model
{

	public function get_data()
	{
        $model = new Model();
        return $model->get_data_all();
	}

}
