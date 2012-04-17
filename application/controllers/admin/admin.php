<?php

class Admin extends MY_Controller
{
    
    function __construct()
    {
        parent::__construct();
        echo Modules::run('admin/toolbar/display');
    }
    
    public function index()
    {
    
        
    }
    
    
    public function login()
    {
        $this->parser->parse('admin/login.php');
    }
    
    public function do_login()
    {
        $identification = $this->input->post('login');
        $password   = $this->input->post('password');
        $remember   = $this->input->post('remember');
                
        if($this->auto->auth->login($identification, $password, $remember))
        {
            $res = array('success'=>true, 'message'=>$this->lang->line('login_success'));
            $this->auto->messages->add(json_encode($res),'success');
            redirect('admin/admin/');
        }
        else
        {
            $res = array('success'=>false, 'message'=>$this->lang->line('login_fail'));
            $this->auto->messages->add(json_encode($res),'error');
            redirect('admin/admin/login');
        }
        
        //echo json_encode($res);
    }
    
    public function do_logout()
    {
        $this->auth->logout();
        $res=array('success'=>true,'message'=>$this->lang->line('logged_out'));
        $this->auto->messages->add(json_encode($res),'success');
        redirect('admin/admin/login');
    }

    
}