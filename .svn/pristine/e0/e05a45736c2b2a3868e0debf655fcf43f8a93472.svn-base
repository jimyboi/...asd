<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/** 
 * INITIALIZATION
 *
 * Initialized the helper, library, database and timezone.
 *
 * @author		Enalds
 * @copyright	Copyright (c) 2011 - 2012, CreationEyed.
 *
 * @since		CE Version 2.0
 * @version		1.1
 */
class Initialization {
	
	var $CI;
	var $no_session;
		
	function __construct() 
	{
		$this->CI =& get_instance();
		date_default_timezone_set(TIME_ZONE);
		$this->CI->load->database();
		
		// GPC strip_tags the value of any GET, POST and COOKIE [Enalds]
		$gpc = array(&$_GET, &$_POST, &$_REQUEST, &$_COOKIE);
		foreach ($gpc as &$arr)
		{
			foreach ($arr as $key => $value)
			{
				if (is_string($value))
				{
					$arr[$key] = trim(strip_tags($value));
				}
			}
		}
		
		$this->no_session = array('','main'); // Controller that do not required session [Enalds]
	}
	
	function is_authorized()
	{
		$url = $this->CI->uri->segment(1);
		
		if(in_array($url, $this->no_session))
		{
			// DO NOTHING
		}
		else
		{
			// SET Function Here
		}
	}
}

/* End of file initialization.php */
/* Location: ./module/hooks/initialization.php */