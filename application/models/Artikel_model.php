<?php

class Artikel_model extends CI_Model	{
	


	function ambil_artikel($kategori_artikel){ //'artikel' = namatabel
		$query = $this->db->get_where('artikel', array('kategori_artikel' => $kategori_artikel));//'kategori_artikel'=nama kolom di tabel
		return $query->result_array();
		
	}

	function ambil_id_artikel($id_artikel){ //'artikel' = namatabel
		$query = $this->db->get_where('artikel', array('id_artikel' => $id_artikel));//'id_artikel'=nama kolom di tabel
		return $query->result_array();
		
	}
	function ambil_id_gambar($id_artikel){ //'artikel' = namatabel
		$query = $this->db->get_where('artikel', array('id_artikel' => $id_artikel));//'id_artikel'=nama kolom di tabel
		return $query->row();
		
	}


	function ambil_semua_artikel(){
		$query = $this->db->get('artikel');
		return $query->result_array();
		
	}


	function save_tambah($data,$tabel){
		$this->db->insert($tabel,$data);
	}

	function save_edit($data,$id){
		$this->db->where($id);
		$this->db->update('artikel',$data);
	}

	function hapus($id){
		$this->db->delete('artikel',$id);

	}



	}

	?>