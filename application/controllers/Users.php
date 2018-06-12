<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('security');
		$this->load->database('default');
		$this->load->model('user_model');
		$this->load->library('session');
	}
	
	public function index()
	{
		//$response = $this->user_model->get_users();
		//$data['users'] = $response;
		//echo $this->get_parsed($res);
		
		$this->load->view('includes/header');
		$this->load->view('users/users');
		$this->load->view('includes/footer');
	}
	
	public function get_users()
	{
		$data = array();
		$type = $this->input->post('type');
		$response = $this->user_model->get_users();
		$data['data'] = $response;
		$data['success'] = true;
		echo json_encode($data);
		exit;
	}
	
	public function view($slug = NULL)
	{
		$data['slug'] = $slug;
		$data['title'] = "User Details";
		
		$this->load->view('includes/header');
		$this->load->view('users/view',$data);
		$this->load->view('includes/footer');
	}
	
	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Create User';

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'Text', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('includes/header', $data);
			$this->load->view('users/create');
			$this->load->view('includes/footer');

		}
		else
		{
			$this->news_model->set_news();
			$this->load->view('news/success');
		}
	}
	
	public function edit()
	{
		//Call Private Method 
		//$this->_utility();
		
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Edit User';

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'Text', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('includes/header', $data);
			$this->load->view('users/edit');
			$this->load->view('includes/footer');

		}
		else
		{
			$this->news_model->set_news();
			$this->load->view('news/success');
		}
	}
	
	public function x_remap($method)
	{
		
		if ($method === 'index')
		{
				$this->$method();
		}
		else
		{
				$this->edit();
		}
	}
	
	private function _utility()
	{
		echo "some code private";
	}

}
