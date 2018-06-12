<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

        public $username;
        public $password;
        public $date;
		
		function __construct(){
			parent::__construct();
			//$this->load->database();
		}
		
		public function index(){
			//
		}
		
		public function login_user()
		{
			$userdata = $this->input->post('user');
			//$this->db->select('*');
			$this->db->select('first_name, user_email, user_name');
			$this->db->from('tbl_users');
			$this->db->where('user_name', $userdata['username']);
			$this->db->where('user_password', $userdata['password']);
			$query = $this->db->get();
			$res   = $query->result();      
			return $res;
		}
		
	
	
	
		//
        public function get_last_ten_entries(){
			$query = $this->db->get('entries', 10);
			return $query->result();
        }

        public function insert_entry()
        {
                $this->title    = $_POST['title']; // please read the below note
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->insert('entries', $this);
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }

}

?>