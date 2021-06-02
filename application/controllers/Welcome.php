<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');				
		$this->load->helper('custom_func');
		if ($this->session->userdata('id_admin')=="") {
			redirect(base_url().'index.php/login');
		}
		$this->load->helper('text');
		date_default_timezone_set("Asia/jakarta");
		//$this->load->library('datatables');
		$this->load->model('m_admin');
		$this->load->model('m_semua');


		
	}

	public function index()
	{
		$data['session']=$this->session->userdata();
		
		$this->load->view('welcome_message',$data);
	}



	public function simpan_chat()
	{
		$data = $this->input->post();
		$this->db->insert('tbl_chat',$data);
	}

	

}
