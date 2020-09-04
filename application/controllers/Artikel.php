<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Artikel extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Artikel_model');
    }

    public function index()
    {
        $data['artikel'] = $this->Artikel_model->ambil_semua_artikel();
		$this->load->view('admin/artikel',$data);

    }

    public function isi($id)
    {
        $data['artikel'] = $this->Artikel_model->ambil_id_artikel($id);
        $this->load->view('guest/artikel_isi',$data);

    }

    public function tambah() 
    {
        $this->load->view('admin/artikel_tambah');
    }

    function tambah_aksi(){
        $judul = $this->input->post('judul'); //'' = sesuai nama di form
        $ringkasan = $this->input->post('ringkasan');
        $isi = $this->input->post('isi');
        $tanggal = $this->input->post('tanggal');

        $config['upload_path']       = './assets_upload/artikel_gambar';
        $config['allowed_types']     = 'jpg|png|jpeg';
        $config['overwrite']         = true;
        $config['max_size']          = 3072; // 3MB

            $this->load->library('upload',$config); //library 'upload' dari CI
            
            if(!$this->upload->do_upload('foto')){ //upload foto
                $this->session->set_flashdata('error', "Tambah Data Gagal, Format Gambar Tidak Mendukung");
                redirect('Artikel/tambah');
            }else{
                $gambar1 = $this->upload->file_name;
                $this->session->set_flashdata('success', "Data Berhasil Diinputkan");
            }

            $data = array(
                'judul_artikel' => $judul, //bagiam kiri adalah nama di db
                'ringkasan_artikel' => $ringkasan,
                'isi_artikel' => $isi,
                'gambar_artikel' => $gambar1,
                'tanggal' => $tanggal
            );

            $this->Artikel_model->save_tambah($data,'artikel');
            redirect('Artikel');

        }

        function edit($id_artikel){
            $data['artikel'] = $this->Artikel_model->ambil_id_artikel($id_artikel);
            $this->load->view('admin/artikel_edit',$data);
        }

        function edit_aksi(){
        $judul = $this->input->post('judul'); //'' = sesuai nama di form
        $ringkasan = $this->input->post('ringkasan');
        $isi = $this->input->post('isi');
        $tanggal = $this->input->post('tanggal');
        $id = $this->input->post('id_artikel');

        $config['upload_path']       = './assets_upload/artikel_gambar';
        $config['allowed_types']     = 'jpg|png';
        $config['overwrite']         = true;
        $config['max_size']          = 3072; // 3MB

        if (!empty($_FILES['foto']['name'])){ //kalau ada gambar yang diupload
            $this->load->library('upload',$config);
                if(!$this->upload->do_upload('foto')){ //upload foto
                    $this->session->set_flashdata('error', "Edit Gagal, Format Gambar Tidak Mendukung");
                    redirect('artikel');
                }else{
                    $gambar1 = $this->upload->file_name;
                    $this->session->set_flashdata('success', "Data Berhasil Diedit");
                }

            }else{
                $gambar1= $this->input->post('foto_old'); //kalau ga ada gambar yang diupload
                $this->session->set_flashdata('success', "Data Berhasil Diedit");
            }

            $data = array(
                'judul_artikel' => $judul, //bagiam kiri adalah nama di db
                'ringkasan_artikel' => $ringkasan,
                'isi_artikel' => $isi,
                'gambar_artikel' => $gambar1,
                'tanggal' => $tanggal
            );
            $where=array('id_artikel'=>$id);
            $this->Artikel_model->save_edit($data,$where);
            redirect('artikel');

        }

        function hapus($id){
            $data = $this->Artikel_model->ambil_id_gambar($id);
            $path = './assets_upload/artikel_gambar/';
            @unlink($path.$data->gambar_artikel);

            $where=array('id_artikel'=>$id);
            $this->Artikel_model->hapus($where);
            $this->session->set_flashdata('success', "Data Berhasil Dihapus");
            redirect('artikel');
        }

}

?>
