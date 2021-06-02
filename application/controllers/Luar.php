<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Luar extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');				
		$this->load->helper('custom_func');		
		$this->load->helper('text');
		date_default_timezone_set("Asia/jakarta");		
		$this->load->model('m_semua');


		
	}

	public function index()
	{		
		$data['all_harga'] = $this->m_semua->history_harga_bulan();			
		$data['kecamatan'] = $this->m_semua->m_kecamatan();
		$data['m_terbaru_termahal']=$this->m_semua->m_terbaru_termahal();
		$data['m_terbaru_terluas']=$this->m_semua->m_terbaru_terluas();
		$data['m_terbaru_terbanyak_produksi']=$this->m_semua->m_terbaru_terbanyak_produksi();
		$data['m_termahal_sepanjang_masa']=$this->m_semua->m_termahal_sepanjang_masa();
		$data['m_terluas_sepanjang_masa']=$this->m_semua->m_terluas_sepanjang_masa();
		$data['m_terbanyak_produksi_sepanjang_masa']=$this->m_semua->m_terbanyak_produksi_sepanjang_masa();
		$this->load->view('luar.php',$data);
	}


	public function tbl_detail_by_id_kec_id_sub()
	{
		$id_kecamatan=$this->input->get('id_kecamatan');
		$id_sub_kategori=$this->input->get('id_sub_kategori');
		$data['all'] = $this->m_semua->m_tbl_detail_by_id_kec_id_sub($id_kecamatan,$id_sub_kategori);
		$this->load->view('part_luar.php',$data);
	}
	

}
