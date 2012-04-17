<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

// set spark version
define('TOPDF_VERSION', '0.0.1');

// get dompdf lib
require_once FCPATH.'sparks/topdf/' .TOPDF_VERSION. '/libraries/MPDF54/mpdf.php';

class topdf
{
    private $pdf;
    private $html_content;
	public $format = 'A4';
	public $orientation  = 'P';
	public $charset = 'utf-8';
    public $margin = Array(15,15,16,16,9,9);
    
    public function __construct($config='') {
		// setup the object
		$this->pdf = new mPDF($this->charset, $this->format ,0, '', $this->margin[0], $this->margin[1], $this->margin[2], $this->margin[3], $this->margin[4], $this->margin[5], $this->margin[6], $this->orientation);
	}
    
	/** 
	$mode (String) : 
			I (inline in browser); 
			S (return a String for email for example); 
			D (Force Download); 
			F (Save in a local file).
	**/
    public function render($filename='',$mode='I')
    {
        if($this->html_content=='')
            return false;
        $this->opdf()->WriteHTML($this->html_content);
        $this->opdf()->Output($filename,$mode);
    }
    
    public function setcontent($html)
    {
        $this->html_content=$html;
        return $this;
    }
	
	public function opdf()
	{
		return $this->pdf;
	}
}
