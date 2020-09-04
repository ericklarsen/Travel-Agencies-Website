<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Promo extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Promo_model');
        $this->load->model('Paket_model');
    }

    public function index()
    {
        $data['promo'] = $this->Promo_model->ambil_semua_promo();
        $data['populer'] = $this->Promo_model->ambil_semua_populer();
		$this->load->view('admin/promo',$data);
    }

    public function tambah()
    {
        $data['paket'] = $this->Paket_model->ambil_semua_paket();
        $this->load->view('admin/promo_tambah',$data);

    }

    public function tambah_populer()
    {
        $data['paket'] = $this->Paket_model->ambil_semua_paket();
        $this->load->view('admin/promo_tambah_populer',$data);

    }

    function tambah_aksi(){
        $id = $this->input->post('id_paket');
            
            $data = array(
                'id_paket' => $id, //bagiam kiri adalah nama di db
                
            );

            $tambah = $this->Promo_model->save_tambah($data,'promo');
            if (!$tambah) {
               $this->session->set_flashdata('success', "Promo Berhasil Ditambahkan!");
               redirect('Promo');
            }else
            {
                $this->session->set_flashdata('error', "Promo Gagal Ditambahkan!");
               redirect('Promo/tambah');
            }
            
            
        }

        function tambah_aksi_populer(){
        $id = $this->input->post('id_paket');
            if (empty($id)) {
                $this->session->set_flashdata('error', "Tidak ada data yang diinputkan");
               redirect('Promo/tambah_populer');
            }
            $data = array(
                'id_paket' => $id, //bagiam kiri adalah nama di db
                
            );
            $hitung = $this->Promo_model->hitung();
            if ($hitung > 3) {
                $this->session->set_flashdata('error', "Destinasi Populer Maksimal, Silahkan Hapus Salah Satu");
                redirect('Promo/tambah_populer');
            }else
            {
                $tambah = $this->Promo_model->save_tambah($data,'populer');
            if (!$tambah) {
               $this->session->set_flashdata('success', "Destinasi Populer Berhasil Ditambahkan!");
               redirect('Promo');
            }
            else
            {
                $this->session->set_flashdata('error', "Destinasi Populer Ditambahkan!");
               redirect('Promo/tambah_populer');
            }
            }
            
            
            
        }

        function hapus($id){
            $where=array('id_promo'=>$id);
            $this->Promo_model->hapus($where);
            $this->session->set_flashdata('success', "Promo Berhasil Dihentikan");
            redirect('Promo');
        }

        function hapus_populer($id){
            $where=array('id_populer'=>$id);
            $this->Promo_model->hapus_populer($where);
            $this->session->set_flashdata('success', "Destinasi Populer Berhasil Dihapus");
            redirect('Promo');
        }

}

?>
