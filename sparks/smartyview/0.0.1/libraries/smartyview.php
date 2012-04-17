<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

// set spark version
define('SMARTYVIEW_VERSION', '0.0.1');

// get smarty lib
require_once FCPATH.'sparks/smartyview/' .SMARTYVIEW_VERSION. '/vendor/Smarty.class.php';

// main class
class Smartyview {
	
	// global smarty object
	private $smarty;
	
	// construct
	public function __construct($config) {
	
		$CI = get_instance();
		// setup the object
		$this->smarty = new Smarty();
		$this->smarty->template_dir = $config['smarty_template_dir'];
		$this->smarty->compile_dir = $config['smarty_compile_dir'];
		$this->smarty->config_dir = $config['smarty_config_dir'];
		$this->smarty->cache_dir = $config['smarty_cache_dir'];
		$this->smarty->template_ext      = $config['template_ext'];
		$this->smarty->cache_lifetime    = $config['smarty_cache_lifetime'];
		$this->smarty->disableSecurity();
		
		
		// If caching is enabled, then disable force compile and enable cache
        if ($config['cache_status'] === TRUE)
        {
            $this->smarty->caching       = 1;
        }
        else
        {
            $this->disable_caching();
        }
        
        $this->smarty->error_reporting   = $config['template_error_reporting'];
        
        // Should let us access Codeigniter stuff in views
        $this->smarty->assign("this", $CI);
		
	}
	
	/**
    * Disable Caching
    * Allows you to disable caching on a page by page basis
    * @example $this->smarty->disable_caching(); then do your parse call
    * 
    */
    public function disable_caching()
    {
        $this->smarty->caching = 0; 
    }
	
	public function osmarty()
	{
		return $this->smarty;
	}
	
}