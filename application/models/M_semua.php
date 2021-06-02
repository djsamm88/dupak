<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

	class M_semua extends CI_Model {
		
		function __construct() {
			parent::__construct();
		
			$this->load->helper('custom_func');
		}

	public function m_kecamatan()
	{
		$q = $this->db->query("SELECT a.* FROM master_kecamatan a ");
		return $q->result();
	}


//guru
	public function m_guru()
	{
		$q = $this->db->query("SELECT a.* FROM master_guru a ");
		return $q->result();
	}

	

	public function m_guru_by_id($id)
	{
		$q = $this->db->query("SELECT a.*
									FROM master_guru a 
									
									WHERE a.id='$id'
							  ");
		return $q->result();
	}

	public function tambah_guru($serialize)
	{
		$this->db->set($serialize);
		$this->db->insert('master_guru');
	}



	public function update_guru($serialize,$id)
	{
		$this->db->set($serialize);
		$this->db->where('id',$id);
		$this->db->update('master_guru');
	}

	//dokumen

	public function m_dokumen($tahun,$nip)
	{
		$q = $this->db->query("			
			SELECT a.*,b.* FROM tbl_dokumen a LEFT JOIN master_guru b ON a.NIP=b.NIP WHERE a.tahun='$tahun' AND a.NIP='$nip' 
			");
		return $q->result();
	}

public function tambah_dokumen($serialize)
{
	$this->db->set($serialize);
	$this->db->insert('tbl_dokumen');
	return $this->db->insert_id();
}

public function update_dokumen($serialize)
	{
		$nip = $serialize['NIP'];
		$tahun = $serialize['tahun'];
		$this->db->set($serialize);
		$array = array('tahun =' => $tahun, 'NIP' => $nip);
		$this->db->where($array);
		$this->db->update('tbl_dokumen');
	}
	


//usulan
	
	public function m_usulan($tahun,$posisi)
	{
		if($posisi==1)//admin
		{
			$and = "";
		}else{
			$and = " AND a.posisi=$posisi ";
		}

		$q = $this->db->query("SELECT a.*,b.* FROM tbl_dokumen a LEFT JOIN master_guru b ON a.NIP=b.NIP WHERE tahun='$tahun' $and ORDER BY a.tahun DESC");
		return $q->result();
	}




	//history
	public function history_dokumen($id_dokumen,$posisi)
	{
		$serialize['id_dokumen']=$id_dokumen;
		$serialize['posisi']=$posisi;
		$this->db->set($serialize);
		$this->db->insert('history_dokumen');
	}


}