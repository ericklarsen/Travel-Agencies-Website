<?php 
/**
* 
*/
class Promo_model extends CI_Model	{

public $nama_table = 'promo';
public $id = 'id_paket';

	function save_tambah($data,$tabel){
		$this->db->insert($tabel,$data);
	}

	function ambil_semua_promo(){
		$this->db->select('*');
$this->db->from('promo');
$this->db->join('paket', 'promo.id_paket = paket.id_paket');
 
$query = $this->db->get();
return $query->result_array();
	}

	function ambil_semua_populer(){
		$this->db->select('*');
$this->db->from('populer');
$this->db->join('paket', 'populer.id_paket = paket.id_paket');
 
$query = $this->db->get();
return $query->result_array();
	}

	function hitung(){
		$query = $this->db->query('SELECT * FROM populer');
	return $query->num_rows();;
	}

	function hapus($id){
		$this->db->delete('promo',$id);
	}

	function hapus_populer($id){
		$this->db->delete('populer',$id);
	}
}
 ?>