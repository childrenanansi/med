<?php

class Model_Admin_Employee extends Model
{

    public function get_data()
    {
        $model = new Model();
        return $model->get_data_task();
    }

}
