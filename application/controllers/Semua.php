<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Semua extends CI_Controller {
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
		$this->load->model('m_semua');
		

	}


	public function data_guru()
	{
		$data['all_guru'] = $this->m_semua->m_guru();	
		$this->load->view('data_guru',$data);
	}

	public function data_guru_xl()	
	{

		$file="Data Guru ".date('Y-m-d')." .xls";
		header("Content-type: application/octet-stream");
		header("Content-Disposition: attachment; filename=$file");
		header("Pragma: no-cache");
		header("Expires: 0");	

		$data['all_guru'] = $this->m_semua->m_guru();	
		$this->load->view('data_guru_xl',$data);
	}


	public function data_guru_by_id($id)
	{
		header('Content-Type: application/json');
		$data['all_guru'] = $this->m_semua->m_guru_by_id($id);
		echo json_encode($data['all_guru']);
	}



	public function hapus_guru_by_id($id)
	{
		$this->db->query("DELETE FROM master_guru WHERE id='$id'");
	}


	public function simpan_guru()
	{
		$id = $this->input->post('id');		

		$serialize = $this->input->post();
		
		//var_dump($serialize["user_admin"]);



		if($id=='')
		{
			//var_dump($serialize);
			$this->m_semua->tambah_guru($serialize);
			die('1');
		}else{


		
			$this->m_semua->update_guru($serialize,$id);
			die('1');
		

		}
		
		

	}

//dokumen
	public function simpan_dokumen()
	{
		$config['upload_path'] = 'uploads';        
        $config['max_size'] = 2000;
 	
 
        $this->load->library('upload', $config);

		$serialize = $this->input->post();
		$serialize['posisi']=4;
		
		

		$tahun=$serialize['tahun'];
		$nip = $this->session->userdata('user_admin');
		$cek = $this->m_semua->m_dokumen($tahun,$nip);


		if(count($cek)==0)
		{
			//var_dump($serialize);
			
			foreach ($_FILES as $key => $value) {
				echo "$key";
				$serialize[$key] = upload_file($key);
			}
			$id_dokumen = $this->m_semua->tambah_dokumen($serialize);


			//die('1');
		}else{

			
			
			
			foreach ($_FILES as $key => $value) {
				//echo "$key";
				//$serialize[$key] = upload_file($key);
				if(upload_file($key)!=""){
					$serialize[$key] = upload_file($key);	
				}
				$this->m_semua->update_dokumen($serialize,$nip);
			}
			
			//die('1');
		

		}

		var_dump($serialize);
		
		

	}

public function data_dokumen($tahun)
	{
		$data['dok'] = $this->m_semua->m_dokumen($tahun,$this->session->userdata('user_admin'));	
		$data['tahun'] = $tahun;
		$this->load->view('data_dokumen',$data);
	}


	public function data_usulan($tahun)
	{
		$posisi = $this->session->userdata('level');
		$data['all'] = $this->m_semua->m_usulan($tahun,$posisi);	
		$data['tahun'] = $tahun;
		$this->load->view('data_usulan',$data);
	}

	public function data_usulan_siap_cetak($tahun)
	{
		$data['all'] = $this->m_semua->m_usulan($tahun,1);	
		$data['tahun'] = $tahun;
		$this->load->view('data_usulan_siap_cetak',$data);
	}


	
	public function data_dokumen_by_nip()
	{
		$tahun=$this->input->get('tahun');
		$NIP=$this->input->get('NIP');

		$data['dok'] = $this->m_semua->m_dokumen($tahun,$NIP);	
		$data['tahun'] = $tahun;
		$this->load->view('part_dokumen',$data);
	}

	public function data_penilaian_by_nip()
	{
		$tahun=$this->input->get('tahun');
		$NIP=$this->input->get('NIP');
		
		$data['dok'] = $this->m_semua->m_dokumen($tahun,$NIP);	
		$data['tahun'] = $tahun;
		$this->load->view('part_penilaian',$data);
	}

	public function simpan_nilai()
	{
		$serialize = $this->input->post();
		$serialize['posisi'] = $this->session->userdata('level')-1;
		$this->m_semua->update_dokumen($serialize);
	}

	public function preview_cetak()
	{
		$tahun=$this->input->get('tahun');
		$NIP=$this->input->get('NIP');
		
		$data['dok'] = $this->m_semua->m_dokumen($tahun,$NIP);	
		$data['tahun'] = $tahun;
		$this->load->view('preview_cetak',$data);
	}


	public function preview_cetak_xl()
	{



		$tahun=$this->input->get('tahun');
		$NIP=$this->input->get('NIP');

		$file="DUPAK_".$NIP."_".$tahun.".xls";
		header("Content-type: application/octet-stream");
		header("Content-Disposition: attachment; filename=$file");
		header("Pragma: no-cache");
		header("Expires: 0");	

		
		$data['dok'] = $this->m_semua->m_dokumen($tahun,$NIP);	
		$data['tahun'] = $tahun;
		$this->load->view('preview_cetak',$data);
	}




}
