<?php

class parent_controller extends CI_Controller{
    
    protected $view = 'list';
    protected $theme = 'themes/color/admin/';
    protected $data = array();
    function __construct() {
        parent::__construct();
    }
            
    function index()
    {
       
       echo $this->createPage();
        
    }
    function createPage()
    {
        $header = $this->Header();
        $content   = $this->Content();
        $footer = $this->Footer();
    
        $data['header']= $header;
        $data['content']=$content;
        $data['footer']=$footer;
        $data['base']= base_url('themes/color/').'/';
        return $this->parser->parse('themes/color/admin/layout',$data,true);
        
    }
    function Header()
    {
        $data['site_name']="Udemy Course";
        return $this->load->view('admin/header',$data,true);
    }
    function Footer()
    {
       
        return $this->load->view('admin/footer',null,true);
    }
}
