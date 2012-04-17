<?php

class MY_Controller extends MX_Controller
{
    protected $_admin_part=false;
    protected $_access_key=null;
    protected $_in_admin=false;
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->spark('DataMapper-ORM/1.8.2');
        $this->load->spark('session-driver/0.0.7');
        
        $this->_init_admin();
        $this->_open_display();
  
    }
    
    private function _open_display()
    {
        $data['errors'] = $this->auto->messages->get("error");
        if($this->_in_admin && !$this->input->post('ajax'))
            echo $this->parser->parse('admin/full_admin_header.php',$data,true);
        else
            return null;
    }
    
    private function _close_display()
    {
        if($this->_in_admin && !$this->input->post('ajax'))
            return $this->parser->parse('admin/full_admin_footer.php',array(),true);
        else
            return null;
    }
    
    private function _init_admin()
    {
        $this->_admin_part= ($this->uri->segment(1)=='admin')? true:false; 
        if(!$this->_admin_part)
        {
            $this->_access_key=$this->uri->segment(1).'/'.((!$this->uri->segment(2))?'index':$this->uri->segment(2));
            return;
        }
        
        $this->_disable_admin_cache();
        $this->_in_admin=true;
        
        $this->_access_key=$this->uri->segment(2).'/'.((!$this->uri->segment(3))?'index':$this->uri->segment(3));

        $this->load->spark('secure-auth/1.0.3');
        $this->load->language('admin');
        $this->load->config('admin');
        
        //Check if logged in
        if(!$this->auth->loggedin() && !in_array($this->_access_key,$this->config->item('allowed_method')))
        {
            //We should save initial asked location
            $this->session->set_userdata(array('requested_url'=>current_url()));
            redirect('admin/admin/login');
        }
        
        //CHECK RIGHTS HERE
        
    }
    
    public function _output($output)
    {
        if(isset($this->session))
        {
            $this->session->sess_write();
        }
    
        echo $output.$this->_close_display();
    }
    
    
    public function _disable_admin_cache()
    {
        $this->smartyview->disable_caching();
    }
    
}