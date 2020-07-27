<?php

class Model_Admin extends Model
{

    public function get_data_em()
    {
        $model = new Model();
        return $model->get_data_em();
    }
    
     public function get_data()
    {
        $model = new Model();
        return $model->get_data_all();
    }
    
    public function get_data_inst()
    {
        $model = new Model();
        return $model->get_data_inst();
    }

}
