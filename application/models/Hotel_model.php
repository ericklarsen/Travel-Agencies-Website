<?php

class Hotel_model extends CI_Model	{
	


	function ambil_hotel($kategori_hotel){ //'hotel' = namatabel
		$query = $this->db->get_where('hotel', array('kategori_hotel' => $kategori_hotel));//'kategori_hotel'=nama kolom di tabel
		return $query->result_array();
		
	}

	function ambil_id_hotel($id_hotel){ //'hotel' = namatabel
		$query = $this->db->get_where('hotel', array('id_hotel' => $id_hotel));//'id_hotel'=nama kolom di tabel
		return $query->result_array();
		
	}
	function ambil_id_gambar($id_hotel,$daerahhotel){ //'hotel' = namatabel
		$query = $this->db->get_where('hotel', array('nama_hotel' => $id_hotel ,'daerah_hotel' => $daerahhotel));//'id_hotel'=nama kolom di tabel
		return $query->row();
		
	}


	//function ambil_semua_hotel(){
		//$query = $this->db->get('hotel');
		//return $query->result_array();
		
	//}

	function ambil_semua_hotel(){
		$query = $this->db->get('hotel');
		return $query->result_array();
		//$this->db->select('DISTINCT(nama_hotel),hotel.daerah_hotel,hotel.gambar_hotel,hotel.id_hotel,');
		//$this->db->from('hotel');
		//$this->db->join('tkamar', 'hotel.id_hotel = tkamar.id_hotel');
		 
		//$query = $this->db->get();
		//return $query->result_array();
	}

	function ambil_semua_hotel_daerah($id){
		//$this->db->select('*');
		//$this->db->from('hotel');
		//$this->db->join('tkamar','hotel.id_hotel=tkamar.id_hotel');
		//$this->db->where('hotel.daerah_hotel',$id);
		//$query=$this->db->get();
		//return $query->result_array();
        $hasil=$this->db->query("SELECT * FROM hotel WHERE daerah_hotel='$id'");
        return $hasil->result_array();
    }
    function ambil_semua_hotel_daerah_all($id){
		//$this->db->select('*');
		//$this->db->from('hotel');
		//$this->db->join('tkamar','hotel.id_hotel=tkamar.id_hotel');
		//$this->db->where('hotel.daerah_hotel',$id);
		//$query=$this->db->get();
		//return $query->result_array();
        $hasil=$this->db->query("SELECT * FROM tkamar where id_hotel ='$id'");
        return $hasil->result();
    }

    function ambil_hotel_daerah(){
        $this->db->select('DISTINCT(daerah_hotel)');
		$this->db->from('hotel');
		$query = $this->db->get();
		return $query->result_array();
    }

	function ambil_semua_kamar($id_hotel){ //'hotel' = namatabel
		$query = $this->db->get_where('tkamar', array('id_hotel' => $id_hotel));//'id_hotel'=nama kolom di tabel
		return $query->result_array();
	}
	function save_tambah($data,$tabel){
		$this->db->insert($tabel,$data);
	}

	function save_batch($data){
    	$this->db->insert_batch('tkamar', $data);
  }

	function save_edit($data,$id){
		$this->db->where($id);
		$this->db->update('hotel',$data);
	}

	function save_edit_tkamar($data,$id){
		$this->db->update_batch('tkamar',$data,'id_tkamar');
	}

	function hapus($id){
		$this->db->delete('hotel',$id);

	}

	function delete_tkamar($id){
		$this->db->delete('tkamar',$id);

	}



	}

	?>