<?php
if ( ! function_exists('redirect'))
{
	function redirect($uri = '', $method = 'location', $http_response_code = 302)
	{
		$ci= &get_Instance();
        if ( ! preg_match('#^https?://#i', $uri))
		{
			$uri = site_url($uri);
		}
        $ci->session->sess_write();
		switch($method)
		{
			case 'refresh'	: header("Refresh:0;url=".$uri);
				break;
			default			: header("Location: ".$uri, TRUE, $http_response_code);
				break;
		}
		exit;
	}
}