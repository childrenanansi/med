<?php

class Model_Ajax extends Model
{
	
	public function get_data()
	{
    	$model = new Model(false, 'medrab');
    	$type = $model->get_post('type');
        if($type == 'save_instation'){
        	$model = new Model(false, 'medych');
            $model->number =  $model->get_post('number_ych');
            $model->name =  $model->get_post('name_ych');
            $model->short_name =  $model->get_post('short_name_ych');
            $model->address =  $model->get_post('address_ych');
            $model->email =  $model->get_post('ych_email');
            $model->phone =  $model->get_post('phones_ych');
            $model->type =  $model->get_post('type_ych');
            $result =$model->save('medych');
            if($result) {
                return json_encode(array('status' => 'Tr'));
            }else{
                return json_encode(array('status' => 'Fal', 'desc' =>'При сохранении что-то пошло не так'));
            }
        }
        if($type == 'save_employee'){
            $model->first =  $model->get_post('first');
            $model->last =  $model->get_post('last');
            $model->second =  $model->get_post('second');
            $model->position =  $model->get_post('position');
            $model->specialty =  $model->get_post('specialty');
            $model->code =  $model->get_post('code');
            $model->date_from =  $model->get_post('date_from');
            $model->date_to =  $model->get_post('date_to');
            $model->id_institution =  $model->get_post('id_institution');
            $model->id_employee =  $model->get_post('id_employee');
            $result =$model->save('medrab');
            if($result) {
                return json_encode(array('status' => 'Tr'));
            }else{
                return json_encode(array('status' => 'Fal', 'desc' =>'При сохранении что-то пошло не так'));
            }
        }
        if($type == 'update_instation'){
            $select = array(
                'where' => 'id = '. $model->get_post('id')
            );
            $model = new Model($select, 'medych');
            $model->fetchOne();
            $model->number =  $model->get_post('number_ych');
            $model->name =  $model->get_post('name_ych');
            $model->short_name =  $model->get_post('short_name_ych');
            $model->address =  $model->get_post('address_ych');
            $model->email =  $model->get_post('ych_email');
            $model->phone =  $model->get_post('phones_ych');
            $model->type =  $model->get_post('type_ych');
            $result = $model->update('medych');
            if($result) {
                return json_encode(array('status' => 'Tr', 'desc' => $result));
            }else{
                return json_encode(array('status' => 'Fal', 'desc' =>'При обновлении что-то пошло не так'));
            }
        }
        if($type == 'update_em'){
            $select = array(
                'where' => 'id = '. $model->get_post('id')
            );
            $model = new Model($select, 'medrab');
            $model->fetchOne();
            $model->first =  $model->get_post('first');
            $model->last =  $model->get_post('last');
            $model->second =  $model->get_post('second');
            $model->position =  $model->get_post('position');
            $model->specialty =  $model->get_post('specialty');
            $model->code =  $model->get_post('code');
            $model->date_from =  $model->get_post('date_from');
            $model->date_to =  $model->get_post('date_to');
            $model->id_institution =  $model->get_post('id_institution');
            $model->id_employee =  $model->get_post('id_employee');
            $result = $model->update('medrab');
            if($result) {
                return json_encode(array('status' => 'Tr', 'desc' => $result));
            }else{
                return json_encode(array('status' => 'Fal', 'desc' =>'При обновлении что-то пошло не так'));
            }
        }
	    return json_encode(array('status' => 'Fal', 'desc' =>'Не корректный Тип'));
	}

}
