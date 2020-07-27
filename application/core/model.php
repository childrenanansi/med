<?php

Class Model extends Model_Base
{
    public $name;
    public $email;
    public $short_name;
    public $address;
    public $phone;
    public $type;
    
    public $first;
    public $last;
    public $second;
    public $specialty;
    public $code;
    public $date_from;
    
    public $date_to;
    public $id_institution;
    public $id_employee;

    public function fieldsTable(){
        return array(
            'id' => 'id',
            'name' => 'name',
            'email' => 'email',
            'short_name' => 'short_name',
            'address' => 'address',
            'number' => 'number',
            'phone' => 'phone',
            'type' => 'type',
        );
    }
    
    public function fieldsTableMedrab(){
        return array(
            'id' => 'id',
            'first' => 'first',
            'last' => 'last',
            'second' => 'second',
            'position' => 'position',
            'specialty' => 'specialty',
            'code' => 'code',
            'date_from' => 'date_from',
            'date_to' => 'date_to',
            'id_institution' => 'id_institution',
            'id_employee' => 'id_employee'
        );
    }

    public function get_post($name){
        if(!empty($_POST[$name])) {
            return htmlspecialchars($_POST[$name], ENT_QUOTES);
        }else{
            return False;
        }
    }

    public function get_get($name){
        if(!empty($_GET[$name])) {
            return htmlspecialchars($_GET[$name], ENT_QUOTES);
        }else{
            return False;
        }
    }

    public function get_pagination($page, $num){
        $model = new Model();
        $count = "SELECT COUNT(*) FROM medych";
        $posts = $model->_getResultCount($count);
        $total = intval(($posts - 1) / $num) + 1;
        $page = intval($page);

        if(empty($page) or $page < 0) $page = 1;
        if($page > $total) $page = $total;

        $start = $page * $num - $num;

        return array('start'=>$start, 'page' => $page, 'total' => $total);
    }

    public function get_data_all()
    {
        $num = 20;
        if(empty($this->get_get('page'))){
            $page = 1;
        }else{
            $page = $this->get_get('page');
        }
        $orders = [];
        if(!empty($_SESSION['sort_name']) || !empty($_SESSION['sort_email']) || !empty($_SESSION['sort_text'])){
            if(!empty($_SESSION['sort_name'])){
                if($_SESSION['sort_name'] == 1){
                    $orders[] = 'name ASC';
                }
                if($_SESSION['sort_name'] == 2){
                    $orders[] = 'name DESC';
                }
            }
            if(!empty($_SESSION['sort_email'])){
                if($_SESSION['sort_email'] == 1){
                    $orders[] = 'email ASC';
                }
                if($_SESSION['sort_email'] == 2){
                    $orders[] = 'email DESC';
                }
            }
            if(!empty($_SESSION['sort_text'])){
                if($_SESSION['sort_text'] == 1){
                    $orders[] = 'text ASC';
                }
                if($_SESSION['sort_text'] == 2){
                    $orders[] = 'text DESC';
                }
            }
        }else{
            $orders[] = 'id DESC';
        }
        $order = implode(',', $orders);
        $pag = $this->get_pagination($page, $num);
        $select = array(
            'order' => $order,
            'step' => $pag['start'],
            'limit' => $num
        );
        
        
        $model = new Model($select, 'medych');
        $task = $model->getAllRows();
        
        $select = array(
            'order' => 'id ASC',
            'step' => '0',
            'limit' => '10000000'
        );
        $model = new Model($select, 'medrab');
        $medrab = $model->getAllRows();
        
        
    	$model = new Model($select, 'medych');
        $medych = $model->getAllRows();
        return array('task'=> $task, 'page' => $pag['page'], 'total' => $pag['total'], 'medrab' => $medrab, 'medych' => $medych);
    }
    
    public function get_data_inst()
    {
        $num = 20;
        if(empty($this->get_get('page'))){
            $page = 1;
        }else{
            $page = $this->get_get('page');
        }
        $orders = [];
        if(!empty($_SESSION['sort_name']) || !empty($_SESSION['sort_email']) || !empty($_SESSION['sort_text'])){
            if(!empty($_SESSION['sort_name'])){
                if($_SESSION['sort_name'] == 1){
                    $orders[] = 'name ASC';
                }
                if($_SESSION['sort_name'] == 2){
                    $orders[] = 'name DESC';
                }
            }
            if(!empty($_SESSION['sort_email'])){
                if($_SESSION['sort_email'] == 1){
                    $orders[] = 'email ASC';
                }
                if($_SESSION['sort_email'] == 2){
                    $orders[] = 'email DESC';
                }
            }
            if(!empty($_SESSION['sort_text'])){
                if($_SESSION['sort_text'] == 1){
                    $orders[] = 'text ASC';
                }
                if($_SESSION['sort_text'] == 2){
                    $orders[] = 'text DESC';
                }
            }
        }else{
            $orders[] = 'id DESC';
        }
        $order = implode(',', $orders);
        $pag = $this->get_pagination($page, $num);
        $select = array(
            'order' => $order,
            'step' => $pag['start'],
            'limit' => $num
        );
        
        
        $model = new Model($select, 'medych');
        $task = $model->getAllRows();
        
        $select = array(
            'order' => 'id ASC',
            'step' => '0',
            'limit' => '10000000'
        );
        $model = new Model($select, 'medrab');
        $medrab = $model->getAllRows();
        
        
    	$model = new Model($select, 'medych');
        $medych = $model->getAllRows();
        return array('task'=> $task, 'page' => $pag['page'], 'total' => $pag['total'], 'medrab' => $medrab, 'medych' => $medych);
    }
    
    public function get_data_em()
    {
        $num = 20;
        if(empty($this->get_get('page'))){
            $page = 1;
        }else{
            $page = $this->get_get('page');
        }
        $orders = [];
        if(!empty($_SESSION['sort_name']) || !empty($_SESSION['sort_email']) || !empty($_SESSION['sort_text'])){
            if(!empty($_SESSION['sort_name'])){
                if($_SESSION['sort_name'] == 1){
                    $orders[] = 'name ASC';
                }
                if($_SESSION['sort_name'] == 2){
                    $orders[] = 'name DESC';
                }
            }
            if(!empty($_SESSION['sort_email'])){
                if($_SESSION['sort_email'] == 1){
                    $orders[] = 'email ASC';
                }
                if($_SESSION['sort_email'] == 2){
                    $orders[] = 'email DESC';
                }
            }
            if(!empty($_SESSION['sort_text'])){
                if($_SESSION['sort_text'] == 1){
                    $orders[] = 'text ASC';
                }
                if($_SESSION['sort_text'] == 2){
                    $orders[] = 'text DESC';
                }
            }
        }else{
            $orders[] = 'id DESC';
        }
        $order = implode(',', $orders);
        $pag = $this->get_pagination($page, $num);
        $select = array(
            'order' => $order,
            'step' => $pag['start'],
            'limit' => $num
        );
        
        
        $model = new Model($select, 'medrab');
        $task = $model->getAllRows();
        
        $select = array(
            'order' => 'id ASC',
            'step' => '0',
            'limit' => '10000000'
        );
        $model = new Model($select, 'medrab');
        $medrab = $model->getAllRows();
        
        
    	$model = new Model($select, 'medych');
        $medych = $model->getAllRows();
        return array('task'=> $task, 'page' => $pag['page'], 'total' => $pag['total'], 'medrab' => $medrab, 'medych' => $medych);
    }
}