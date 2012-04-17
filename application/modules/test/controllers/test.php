<?php

class Test extends MX_Controller 
{
    function index()
    {
        echo 'ca marche';
        
        $this->load->spark('Debug-Toolbar/1.0.7');
        $this->load->spark('gc-qrcode/1.0.1');
        $this->load->spark('DataMapper-ORM/1.8.2');
        
        $this->load->library('console');                  
        $this->output->enable_profiler(true);
        
        Console::log($url = $this->gc_qrcode->url());
        $data['hello']='hello';
        $this->auto->smartyview->render('my_tpl.php',$data);
        
        
        $this->auto->gc_qrcode->size(400)
                ->data("http://www.passionvitesse.com/")
                ->output_encoding('UTF-8')
                //->error_correction_level('L')
                ->margin(0);
        Console::log($url = $this->gc_qrcode->url());
        echo $this->gc_qrcode->img();

        
        
        //$this->load->view('welcome_message');
        
    }
}