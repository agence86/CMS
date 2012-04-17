<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        /*$this->load->spark('DataMapper-ORM/1.8.2');
        $user=new User();
        $user->get();*/
         $this->load->library('parser');
		 
        $data['test']='MA VALEUR TESTééé';
		
		$cache_id = md5($this->uri->segment(3));
		$html=$this->parser->parse('welcome_message.php', $data,true,true,$cache_id);
        //$out=$this->auto->smartyview->getoutput('welcome_message.php',$data);
        $this->auto->topdf->setcontent($html)->render('monpdf.pdf');
        
        
        //var_dump($out);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */