<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dokumentasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Dokumentasi_model');
    }

    public function index()
    {   
        $data['dokumentasi'] = $this->Dokumentasi_model->ambil_semua_dokumentasi();
		$this->load->view('admin/dokumentasi',$data);

    }

    public function tambah() 
    {
        $this->load->view('admin/dokumentasi_tambah');
    }

    function tambah_aksi(){
        $judul = $this->input->post('judul'); //'' = sesuai nama di form
        $deskripsi = $this->input->post('deskripsi');

        $config['upload_path']       = './assets_upload/dokumentasi_gambar';
        $config['allowed_types']     = 'jpg|png|jpeg';
        $config['overwrite']         = true;
        $config['max_size']          = 3072; // 3MB

            $this->load->library('upload',$config); //library 'upload' dari CI
            
            if(!$this->upload->do_upload('foto')){ //upload foto
                $this->session->set_flashdata('error', "Tambah Data Gagal, Format Gambar Tidak Mendukung");
                redirect('Dokumentasi/tambah');
            }else{
                $gambar1 = $this->upload->file_name;
                $this->session->set_flashdata('success', "Data Berhasil Diinputkan");
            }

            $data = array(
                'judul_dokumentasi' => $judul, //bagiam kiri adalah nama di db
                'deskripsi_dokumentasi' => $deskripsi,
                'gambar_dokumentasi' => $gambar1
            );

            $this->Dokumentasi_model->save_tambah($data,'dokumentasi');
            redirect('Dokumentasi');

        }

        function hapus($id){
            $data = $this->Dokumentasi_model->ambil_id_gambar($id);
            $path = './assets_upload/dokumentasi_gambar/';
            @unlink($path.$data->gambar_dokumentasi);

            $where=array('id_dokumentasi'=>$id);
            $this->Dokumentasi_model->hapus($where);
            $this->session->set_flashdata('success', "Data Berhasil Dihapus");
            redirect('Dokumentasi');
        }

        function edit($id_dokumentasi){
            $data['dokumentasi'] = $this->Dokumentasi_model->ambil_id_dokumentasi($id_dokumentasi);
            $this->load->view('admin/dokumentasi_edit',$data);
        }

        function edit_aksi(){
        $id=$this->input->post('id_dokumentasi');
        $judul = $this->input->post('judul'); //'' = sesuai nama di form
        $deskripsi = $this->input->post('deskripsi');

        $config['upload_path']       = './assets_upload/dokumentasi_gambar';
        $config['allowed_types']     = 'jpg|png';
        $config['overwrite']         = true;
        $config['max_size']          = 3072; // 3MB

        if (!empty($_FILES['foto']['name'])){ //kalau ada gambar yang diupload
            $this->load->library('upload',$config);
                if(!$this->upload->do_upload('foto')){ //upload foto
                    $this->session->set_flashdata('error', "Edit Gagal, Format Gambar Tidak Mendukung");
                    redirect('Dokumentasi');
                }else{
                    $gambar1 = $this->upload->file_name;
                    $this->session->set_flashdata('success', "Data Berhasil Diedit");
                }

            }else{
                $gambar1= $this->input->post('foto_old'); //kalau ga ada gambar yang diupload
                $this->session->set_flashdata('success', "Data Berhasil Diedit");
            }

            $data = array(
                'judul_dokumentasi' => $judul, //bagiam kiri adalah nama di db
                'deskripsi_dokumentasi' => $deskripsi,
                'gambar_dokumentasi' => $gambar1
            );
            $where=array('id_dokumentasi'=>$id);
            $this->Dokumentasi_model->save_edit($data,$where);
            redirect('Dokumentasi');

        }

}

?>
