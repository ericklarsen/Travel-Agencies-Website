<?php

class Pesan_model extends CI_Model	{
	
	function ambil_semua_pesan(){
		$query = $this->db->get('pesan');
		return $query->result_array();
		
	}

	function save_tambah($data,$tabel){
		$this->db->insert($tabel,$data);
	}

	function hapus($id){
		$this->db->delete('pesan',$id);

	}



	}

	?>