<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pesan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('pesan_model');
    }

    public function index()
    {
        $data['pesan'] = $this->pesan_model->ambil_semua_pesan();
		$this->load->view('admin/pesan',$data);
    }


    function tambah_aksi(){
        $nama = $this->input->post('nama'); //'' = sesuai nama di form
        $email = $this->input->post('email');
        $subjek = $this->input->post('subjek');
        $isi = $this->input->post('isi');

               

            $data = array(
                'nama_pesan' => $nama, //bagiam kiri adalah nama di db
                'email_pesan' => $email,
                'subjek_pesan' => $subjek,
                'isi_pesan' => $isi
            );

            $hasil = $this->pesan_model->save_tambah($data,'pesan');
            if (empty($hasil)) {
                $this->session->set_flashdata('success', "Pesan Terkirim");
                redirect('Home/kontak');
            }else
            {
                $this->session->set_flashdata('error', "Pesan Tidak Terkirim, Mohon Ulangi.");
                redirect('Home/kontak');
            }

        }

        function tambah_aksi_email(){
        $email = $this->input->post('email');
               

            $data = array(
                'nama_pesan' => " ", //bagiam kiri adalah nama di db
                'email_pesan' => $email,
                'subjek_pesan' => " ",
                'isi_pesan' => " "
            );

            $hasil = $this->pesan_model->save_tambah($data,'pesan');
            if (empty($hasil)) {
                $this->session->set_flashdata('success', "Pesan Terkirim");
                redirect('Home');
            }else
            {
                $this->session->set_flashdata('error', "Pesan Tidak Terkirim, Mohon Ulangi.");
                redirect('Home');
            }

        }

        function hapus($id){
            $where=array('id_pesan'=>$id);
            $this->pesan_model->hapus($where);
            $this->session->set_flashdata('success', "Data Berhasil Dihapus");
            redirect('pesan');
        }

}

?>
