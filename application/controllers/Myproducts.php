<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myproducts extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('security');
		$this->load->database('default');
		$this->load->model('user_model');
		$this->load->library('session');
		
		//Custom Helper
		$this->load->helper('demo');
		
		//Custom Library
		$this->load->library('testing');
	}
	
	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('myproducts/products');
		$this->load->view('includes/footer');
	}
	
	public function get_users()
	{
		$data = array();
		$type = $this->input->post('type');
		$this->db->select('*');
		$this->db->from('tbl_users');
		$query = $this->db->get();
		$res   = $query->result();
		$data['data'] = $res;
		$data['success'] = true;
		echo json_encode($data);
		exit;
	}
	
	public function view($slug = NULL)
	{
		$data['slug'] = $slug;
		$data['title'] = "User Details";
		$this->load->view('includes/header');
		$this->load->view('myproducts/view',$data);
		$this->load->view('includes/footer');
	}
	
	public function encrypt()
	{
		
		$this->load->library('encrypt');

		$msg = 'My secret message';
		$key = 'VIJAY';

		//echo $encrypted_string = $this->encrypt->encode($msg, $key);
		
		$encrypted_string = 'VZ0f5Iw8N46qSO6Q7LSgBXTZSulOqrL11ztpnhbidR2eu+HkE8OaJ/M5i96LddkG/O9BccRJnuu4sYnI+qZXLA==';
		echo $plaintext_string = $this->encrypt->decode($encrypted_string);
	}
	
	public function email()
	{
		$this->load->library('email');
		
		$config['protocol'] = 'sendmail';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;

		$this->email->initialize($config);
		
		$this->email->from('vijaydwivedics@gmail.com', 'Dwivedi Vijay');
		$this->email->to('vijay.deepstechnology@gmail.com');
		//$this->email->cc('another@another-example.com');
		//$this->email->bcc('them@their-example.com');

		$this->email->subject('Testing Email');
		$this->email->message('Testing the email class.');
		var_dump($this->email->send());
		
		$this->email->print_debugger();
	}
	
	public function calendar()
	{
		$data = array(
			'year' => $this->uri->segment(3),
			'month' => $this->uri->segment(4)
		);
		$data['title'] = 'Calendar';
		$data['date'] = array(
				3  => 'http://example.com/news/article/2006/06/03/',
				7  => 'http://example.com/news/article/2006/06/07/',
				13 => 'http://example.com/news/article/2006/06/13/',
				26 => 'http://example.com/news/article/2006/06/26/'
		);
		
		// Creating template for table
		$prefs['template'] = '
		{table_open}<table cellpadding="1" cellspacing="2">{/table_open}

		{heading_row_start}<tr>{/heading_row_start}

		{heading_previous_cell}<th class="prev_sign"><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
		{heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
		{heading_next_cell}<th class="next_sign"><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

		{heading_row_end}</tr>{/heading_row_end}

		//Deciding where to week row start
		{week_row_start}<tr class="week_name" >{/week_row_start}
		//Deciding  week day cell and  week days
		{week_day_cell}<td >{week_day}</td>{/week_day_cell}
		//week row end
		{week_row_end}</tr>{/week_row_end}

		{cal_row_start}<tr class="day">{/cal_row_start}
		{cal_cell_start}<td>{/cal_cell_start}

		{cal_cell_content}<a href="{content}">{day}</a>{/cal_cell_content}
		{cal_cell_content_today}<div class="highlight"><a href="{content}">{day}</a></div>{/cal_cell_content_today}

		{cal_cell_no_content}{day}{/cal_cell_no_content}
		{cal_cell_no_content_today}<div class="highlight">{day}</div>{/cal_cell_no_content_today}

		{cal_cell_blank}&nbsp;{/cal_cell_blank}

		{cal_cell_end}</td>{/cal_cell_end}
		{cal_row_end}</tr>{/cal_row_end}

		{table_close}</table>{/table_close}
		';

		$prefs['day_type'] = 'short';
		$prefs['show_next_prev'] = true;
		$prefs['next_prev_url'] = '';

		// Loading calendar library and configuring table template
		$this->load->library('calendar', $prefs);
		// Load view page
		
		$this->load->view('includes/header');
		$this->load->view('myproducts/calendar',$data);
		$this->load->view('includes/footer');
		
	}
	
	public function create()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('firstName', 'First Name', 'required');
		$this->form_validation->set_rules('lastName', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required',
			array('required' => 'You must provide a %s.')
		);
		$this->form_validation->set_rules('conf_password', 'Password Confirmation', 'required');
		
		$data['title'] = 'Create User';
		$data['msg'] = 'Fill the Form';
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('includes/header', $data);
			$this->load->view('myproducts/create');
			$this->load->view('includes/footer');
		}
		else
		{
			$this->load->view('formsuccess');
		}
	}
	
	public function create1()
	{
		//$this->load->library('calendar');
		$this->load->library('form_validation');

		$data['title'] = 'Create User';
		$data['msg'] = 'Fill the Form';
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'Text', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('includes/header', $data);
			$this->load->view('myproducts/create');
			$this->load->view('includes/footer');

		}
		else
		{
			$this->news_model->set_news();
			$this->load->view('news/success');
		}
	}
	
	public function upload()
	{
		$this->load->library('form_validation');

		$data['title'] = 'Create User';
		$data['msg'] = 'Fill the Form';
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'Text', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('includes/header', $data);
			$this->load->view('myproducts/upload');
			$this->load->view('includes/footer');

		}
		else
		{
			$data['msg'] = 'Form submitted Successfully.';
			
			$this->load->view('includes/header', $data);
			$this->load->view('myproducts/upload');
			$this->load->view('includes/footer');
		}
	}
	
	public function do_upload()
	{
		$config['upload_path']          = 'uploads';
		$config['allowed_types']        = 'gif|jpg|png';
		//$config['max_size']             = 100;
		//$config['max_width']            = 1024;
		//$config['max_height']           = 768;
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('image'))
		{
			$error['title'] = 'Upload';
			$error['msg'] = array('error' => $this->upload->display_errors());
			$this->load->view('includes/header', $error);
			$this->load->view('myproducts/upload');
			$this->load->view('includes/footer');
		}
		else
		{
			/*
			//Creating Thumb
			$image_data = $this->upload->data();
			$filename = $image_data['file_name'];
			$source_path =  $image_data['full_path'];
			$target_path = 'uploads/avatar/';
			$config_manip = array(
				'image_library' => 'gd2',
				'source_image' => $source_path,
				'new_image' => $target_path,
				'maintain_ratio' => TRUE,
				'create_thumb' => TRUE,
				'thumb_marker' => '_thumb',
				'width' => 150,
				'height' => 150
			);
			$this->load->library('image_lib', $config_manip);
			
			if (!$this->image_lib->resize()) {
				echo $this->image_lib->display_errors();
			}
			// clear //
			$this->image_lib->clear();
			*/
			
			$image_data = $this->upload->data();
			
			//Watermark
			$config_w['source_image'] = $image_data['full_path'];
			$config_w['wm_text'] = 'Copyright 2018 - CI Admin';
			$config_w['wm_type'] = 'text';
			$config_w['wm_font_path'] = 'system/fonts/blackjack.otf'; //'system/fonts/texb.ttf';
			$config_w['wm_font_size'] = '45';
			$config_w['wm_font_color'] = 'ffffff';
			$config_w['wm_vrt_alignment'] = 'bottom'; //'middle';
			$config_w['wm_hor_alignment'] = 'center';
			//$config_w['wm_padding'] = '20';
			$config['rotation_angle'] = '90';
			
			$this->load->library('image_lib', $config_w);
			$this->image_lib->watermark();
			
			$image_sizes = array(
				'thumb'  => array(150, 100),
				'medium' => array(300, 300),
				'large'  => array(800, 600)
			);
			
			//$this->load->library('image_lib');
			foreach ($image_sizes as $resize) 
			{
				$source_path =  $image_data['full_path'];
				$target_path = 'uploads/';
				$config = array(
					'source_image' 	 => $source_path,
					'new_image' 	 => $target_path,
					'maintain_ratio' => TRUE,
					'create_thumb' 	 => TRUE,
					'thumb_marker'   => '-'.$resize[0].'x'.$resize[1],
					'width' 		 => $resize[0],
					'height' 		 => $resize[1]
				);
				//Watermark
				/*
				$config['wm_text'] = 'Copyright 2006 - John Doe';
				$config['wm_type'] = 'text';
				$config['wm_font_path'] = 'system/fonts/texb.ttf';
				$config['wm_font_size'] = '16';
				$config['wm_font_color'] = 'ffffff';
				$config['wm_vrt_alignment'] = 'bottom';
				$config['wm_hor_alignment'] = 'center';
				$config['wm_padding'] = '20';
				*/
				$this->image_lib->initialize($config);
				$this->image_lib->resize();
				$this->image_lib->clear();
			}
			
			$data['title'] = 'Upload';
			$data['msg'] = array('upload_data' => $image_data);
			$this->load->view('includes/header', $data);
			$this->load->view('myproducts/upload');
			$this->load->view('includes/footer');
		}
	}
	
	
	public function edit()
	{
		//Call Private Method 
		//$this->_utility();
		$this->load->library('form_validation');
		$data['title'] = 'Edit User';
		
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'Text', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('includes/header', $data);
			$this->load->view('myproducts/edit');
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
	
	public function demo()
	{
		$data['title'] = 'Demo';
		$data['random_element'] = random_element();
		$data['testing'] = $this->testing->add();
		$this->load->view('includes/header', $data);
		$this->load->view('myproducts/demo');
		$this->load->view('includes/footer');
	}
}
