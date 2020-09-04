<?php

class Dokumentasi_model extends CI_Model	{
	


	function ambil_dokumentasi($kategori_dokumentasi){ //'dokumentasi' = namatabel
		$query = $this->db->get_where('dokumentasi', array('kategori_dokumentasi' => $kategori_dokumentasi));//'kategori_dokumentasi'=nama kolom di tabel
		return $query->result_array();
		
	}

	function ambil_id_dokumentasi($id_dokumentasi){ //'dokumentasi' = namatabel
		$query = $this->db->get_where('dokumentasi', array('id_dokumentasi' => $id_dokumentasi));//'id_dokumentasi'=nama kolom di tabel
		return $query->result_array();
		
	}
	function ambil_id_gambar($id_dokumentasi){ //'dokumentasi' = namatabel
		$query = $this->db->get_where('dokumentasi', array('id_dokumentasi' => $id_dokumentasi));//'id_dokumentasi'=nama kolom di tabel
		return $query->row();
		
	}


	function ambil_semua_dokumentasi(){
		$query = $this->db->get('dokumentasi');
		return $query->result_array();
		
	}


	function save_tambah($data,$tabel){
		$this->db->insert($tabel,$data);
	}

	function save_edit($data,$id){
		$this->db->where($id);
		$this->db->update('dokumentasi',$data);
	}

	function hapus($id){
		$this->db->delete('dokumentasi',$id);

	}



	}

	?>