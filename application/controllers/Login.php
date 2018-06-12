<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('security');
		$this->load->database('default');
		$this->load->model('login_model');
		$this->load->library('session');
	}
	
	public function index()
	{
		$this->load->view('login');
	}
	
	public function do_login()
	{
		//$type = $this->input->post('type');
		//$userdata = $this->input->post('user');
		
		$res = $this->login_model->login_user();
		echo $this->get_parsed($res);
	}
	
	public function get_parsed($result)
	{
		$response = array('success'=>false,'message'=>'Unable to login.');
		if(!empty($result))
		{
			$response = array('success'=>true,'message'=>'loged in.');
		}
		//print_r($result);
		return json_encode($response);
	}
}
