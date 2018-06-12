<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('main');
		$this->load->view('includes/footer');
	}
	
	public function news($slug = NULL)
	{
		$data['slug'] = $slug;
		$this->load->view('includes/header');
		$this->load->view('news',$data);
		$this->load->view('includes/footer');
		/*
		$data['news_item'] = $this->news_model->get_news($slug);
		if (empty($data['news_item']))
		{
				show_404();
		}
		$data['title'] = $data['news_item']['title'];
		$this->load->view('templates/header', $data);
		$this->load->view('news/view', $data);
		$this->load->view('templates/footer');
		*/
	}
}
