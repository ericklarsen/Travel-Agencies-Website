<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mobil extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mobil_model');
    }

    public function index()
    {
        $data['mobil'] = $this->Mobil_model->ambil_semua_mobil();
		$this->load->view('admin/mobil',$data);
    }

   
    public function tambah()
    {
        $this->load->view('admin/mobil_tambah');

    }
    function tambah_aksi(){
        $nama = $this->input->post('namakendaraan'); //'' = sesuai nama di form
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('hargakendaraan');

        $config['upload_path']       = './assets_upload/mobil_gambar';
        $config['allowed_types']     = 'jpg|png';
        $config['overwrite']         = true;
        $config['max_size']          = 3072; // 3MB

            $this->load->library('upload',$config); //library 'upload' dari CI
            
            if(!$this->upload->do_upload('foto')){ //upload foto
                $this->session->set_flashdata('error', "Tambah Data Gagal, Format Gambar Tidak Mendukung");
                redirect('Mobil/tambah');
            }else{
                $gambar1 = $this->upload->file_name;
                $this->session->set_flashdata('success', "Data Berhasil Diinputkan");
            }

            $data = array(
                'kategori_mobil' => $kategori, //bagiam kiri adalah nama di db
                'nama_mobil' => $nama,
                'harga_mobil' => $harga,
                'gambar_mobil' => $gambar1
            );

            $this->Mobil_model->save_tambah($data,'mobil');
            redirect('Mobil');

        }

        function edit($id_mobil){
            $data['mobil'] = $this->Mobil_model->ambil_id_mobil($id_mobil);
            $this->load->view('admin/mobil_edit',$data);
        }

        function edit_aksi(){
        $id=$this->input->post('id_mobil');
        $nama = $this->input->post('namakendaraan'); //'' = sesuai nama di form
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('hargakendaraan');

        $config['upload_path']       = './assets_upload/mobil_gambar';
        $config['allowed_types']     = 'jpg|png';
        $config['overwrite']         = true;
        $config['max_size']          = 3072; // 3MB

        if (!empty($_FILES['foto']['name'])){ //kalau ada gambar yang diupload
            $this->load->library('upload',$config);
                if(!$this->upload->do_upload('foto')){ //upload foto
                    $this->session->set_flashdata('error', "Edit Gagal, Format Gambar Tidak Mendukung");
                    redirect('Mobil');
                }else{
                    $gambar1 = $this->upload->file_name;
                    $this->session->set_flashdata('success', "Data Berhasil Diedit");
                }

            }else{
                $gambar1= $this->input->post('foto_old'); //kalau ga ada gambar yang diupload
                $this->session->set_flashdata('success', "Data Berhasil Diedit");
            }

            $data = array(
                'kategori_mobil' => $kategori, //bagiam kiri adalah nama di db
                'nama_mobil' => $nama,
                'harga_mobil' => $harga,
                'gambar_mobil' => $gambar1
            );
            $where=array('id_mobil'=>$id);
            $this->Mobil_model->save_edit($data,$where);
            redirect('Mobil');

        }

        function hapus($id){
            $data = $this->Mobil_model->ambil_id_gambar($id);
            $path = './assets_upload/mobil_gambar/';
            @unlink($path.$data->gambar_mobil);

            $where=array('id_mobil'=>$id);
            $this->Mobil_model->hapus($where);
            $this->session->set_flashdata('success', "Data Berhasil Dihapus");
            redirect('Mobil');
        }

}

?>
