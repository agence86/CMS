<?php

class Toolbar extends MY_Controller
{
    private $display = null;
    
    function __construct()
    {
        parent::__construct();
        if(!$this->auth->loggedin())
            $this->display = false;
        else
            $this->display = true;
    }
    
    function _index()
    {
        
    }
    
    function display()
    {
        if($this->display)
            $this->parser->parse('admin/toolbar.php');
    }
}