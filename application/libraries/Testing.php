<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testing 
{
	public function __construct()
	{
		$CI = get_instance();
		
		// Do something with $params
		$CI->load->helper('url');
		$CI->load->library('session');
		$CI->config->item('base_url');
	}
	
	public function add()
	{
		return "This is Testing(class) and add(method)";
	}
}