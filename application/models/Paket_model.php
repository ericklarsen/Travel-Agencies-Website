<?php

class paket_model extends CI_Model	{
	public $table_name = 'paket';
	
	function ambil_id_paket($id_paket){ //'paket' = namatabel
		$query = $this->db->get_where('paket', array('id_paket' => $id_paket));//'id_paket'=nama kolom di tabel
		return $query->result_array();
	}
	function ambil_id_paket2($id_paket){ //'paket' = namatabel
		$query = $this->db->get_where('paket', array('id_paket' => $id_paket));//'id_paket'=nama kolom di tabel
		return $query->result_array();
	}
	function ambil_id_gambar($id_paket){ //'paket' = namatabel
		$query = $this->db->get_where('paket', array('id_paket' => $id_paket));//'id_paket'=nama kolom di tabel
		return $query->row();
	}

	function ambil_semua_paket(){
		$query = $this->db->get('paket');
		return $query->result_array();
	}

	function ambil_semua_paket_terbaru(){
		$this->db->from($this->table_name);
		$this->db->order_by("id_paket", "desc");
		$query = $this->db->get(); 
		return $query->result_array();
	}

	function save_tambah($data,$tabel){
		$this->db->insert($tabel,$data);
	}

	function save_edit($data,$id){
		$this->db->where($id);
		$this->db->update('paket',$data);
	}

	function hapus($id){
		$this->db->delete('paket',$id);
	}


	}

	?>