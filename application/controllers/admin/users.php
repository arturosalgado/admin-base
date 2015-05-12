<?php
require_once 'parent_controller.php';


class Users extends parent_controller{
    protected $model = 'User';
            
    function __construct() {
       
        parent::__construct();
    }
    
    function Content()
    {
        
        $record= new $this->model();
        $list = $record->get();
        $this->data['records']=$list;
        return $this->load->view($this->theme."users/list",$this->data,true);
               
    }
    
    function pages()
    {
        
    }
    
    
    
}