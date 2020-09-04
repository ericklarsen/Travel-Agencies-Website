<?php

class Mobil_model extends CI_Model	{
	


	function ambil_mobil($kategori_mobil){ //'mobil' = namatabel
		$query = $this->db->get_where('mobil', array('kategori_mobil' => $kategori_mobil));//'kategori_mobil'=nama kolom di tabel
		return $query->result_array();
		
	}

	function ambil_id_mobil($id_mobil){ //'mobil' = namatabel
		$query = $this->db->get_where('mobil', array('id_mobil' => $id_mobil));//'id_mobil'=nama kolom di tabel
		return $query->result_array();
		
	}
	function ambil_id_gambar($id_mobil){ //'mobil' = namatabel
		$query = $this->db->get_where('mobil', array('id_mobil' => $id_mobil));//'id_mobil'=nama kolom di tabel
		return $query->row();
		
	}


	function ambil_semua_mobil(){
		$query = $this->db->get_where('mobil', array('kategori_mobil' => 'mobil'));//'id_mobil'=nama kolom di tabel
		return $query->result_array();
		
	}

	function ambil_semua_mobil_bus(){ //'mobil' = namatabel
		$query = $this->db->get_where('mobil', array('kategori_mobil' => 'bus'));//'id_mobil'=nama kolom di tabel
		return $query->result_array();
		
	}


	function save_tambah($data,$tabel){
		$this->db->insert($tabel,$data);
	}

	function save_edit($data,$id){
		$this->db->where($id);
		$this->db->update('mobil',$data);
	}

	function hapus($id){
		$this->db->delete('mobil',$id);

	}



	}

	?>