<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Paket extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Paket_model');
        $this->load->model('Promo_model');
    }

    public function index()
    {
        $data['paket'] = $this->Paket_model->ambil_semua_paket();
		$this->load->view('admin/paket',$data);
    }

    public function tambah()
    {
        $this->load->view('admin/paket_tambah');

    }

    public function tambah_aksi2()
    {
        $nama = $this->input->post('namapaket'); //'' = sesuai nama di form
        $kategori = $this->input->post('kategori');
        $destinasi = $this->input->post('destinasi');
        $durasi = $this->input->post('durasi');
        $harga = $this->input->post('harga');

        $config['upload_path']       = './assets_upload/paket_gambar';
        $config['allowed_types']     = 'jpg|png|jpeg';
        $config['overwrite']         = true;
        $config['max_size']          = 10000; // 3MB

            $this->load->library('upload',$config); //library 'upload' dari CI
            
            if(!$this->upload->do_upload('foto')){ //upload foto
                $this->session->set_flashdata('error', "Tambah Data Gagal, Format Gambar Tidak Mendukung");
                redirect('Paket/tambah');
            }else{
                $gambar1 = $this->upload->file_name;
                $this->session->set_flashdata('success', "Data Berhasil Diinputkan");
            }

        $config2['upload_path']       = './assets_upload/paket_pdf';
        $config2['allowed_types']     = '*';
        $config2['overwrite']         = true;
        $config2['max_size']          = 10000; // 3MB

            $this->load->library('upload',$config2); //library 'upload' dari CI
            
            if(!$this->upload->do_upload('pdf')){ //upload foto
                $this->session->set_flashdata('error', "Tambah Data Gagal, Format Data Tidak Mendukung");
                redirect('Paket/tambah');
            }else{
                $pdf = $this->upload->file_name;
                $this->session->set_flashdata('success', "Data Berhasil Diinputkan");
            }

            $data = array(
                'kategori_paket' => $kategori, //bagiam kiri adalah nama di db
                'nama_paket' => $nama,
                'destinasi_paket' => $destinasi,
                'durasi_paket' => $durasi,
                'harga_paket' => $harga,
                'file_pdf' => $pdf,
                'gambar_paket' => $gambar1
            );

            $this->Paket_model->save_tambah($data,'paket');
            redirect('Paket');
    }

    function tambah_aksi(){
        $nama = $this->input->post('namapaket'); //'' = sesuai nama di form
        $kategori = $this->input->post('kategori');
        $destinasi = $this->input->post('destinasi');
        $durasi = $this->input->post('durasi');
        $harga = $this->input->post('harga');
        //$gambar = $_FILES['gambar']['name'];

        $config2['upload_path']       = './assets_upload/paket_pdf';
        $config2['allowed_types']     = '*';
        $config2['overwrite']         = true;
        $config2['max_size']          = 10000; // 3MB

            $this->load->library('upload',$config2); //library 'upload' dari CI
            
            if(!$this->upload->do_upload('pdf')){ //upload foto
                $this->session->set_flashdata('error', "Tambah Data Gagal, Format Data Tidak Mendukung");
                redirect('Paket/tambah');
            }else{
                $pdf = $this->upload->file_name;
                $this->session->set_flashdata('success', "Data Berhasil Diinputkan");
            }

        $config['upload_path']       = './assets_upload/paket_gambar';
        $config['allowed_types']     = 'jpg|png|jpeg';
        $config['overwrite']         = true;
        $config['max_size']          = 10000; // 3MB

            $this->load->library('upload',$config); //library 'upload' dari CI
            
            if(!$this->upload->do_upload('foto')){ //upload foto
                $this->session->set_flashdata('error', "Tambah Data Gagal, Format Gambar Tidak Mendukung");
                redirect('Paket/tambah');
            }else{
                $gambar1 = $this->upload->file_name;
                $this->session->set_flashdata('success', "Data Berhasil Diinputkan");
            }
            
            $data = array(
                'kategori_paket' => $kategori, //bagiam kiri adalah nama di db
                'nama_paket' => $nama,
                'destinasi_paket' => $destinasi,
                'durasi_paket' => $durasi,
                'harga_paket' => $harga,
                'file_pdf' => $pdf,
                'gambar_paket' => $gambar1
            );

            $this->Paket_model->save_tambah($data,'paket');
            redirect('Paket');

        }

        function hapus($id){
            $data = $this->Paket_model->ambil_id_gambar($id);
            $path = './assets_upload/paket_gambar/';
            $path2 = './assets_upload/paket_pdf/';
            @unlink($path.$data->gambar_paket);
            @unlink($path2.$data->file_pdf);

            $where=array('id_paket'=>$id);
            $this->Paket_model->hapus($where);
            $this->Promo_model->hapus($where);
            $this->Promo_model->hapus_populer($where);
            $this->session->set_flashdata('success', "Data Berhasil Dihapus");
            redirect('Paket');
        }

        function edit($id_paket){
            $data['paket'] = $this->Paket_model->ambil_id_paket2($id_paket);
            $this->load->view('admin/paket_edit',$data);
        }

        function edit_aksi(){
        $id=$this->input->post('id_paket');
        $nama = $this->input->post('namapaket'); //'' = sesuai nama di form
        $kategori = $this->input->post('kategori');
        $destinasi = $this->input->post('destinasi');
        $durasi = $this->input->post('durasi');
        $harga = $this->input->post('harga');

        $config['upload_path']       = './assets_upload/paket_gambar';
        $config['allowed_types']     = 'jpg|png|jpeg';
        $config['overwrite']         = true;
        $config['max_size']          = 10000; // 3MB

        if (!empty($_FILES['foto']['name'])){ //kalau ada gambar yang diupload
            $this->load->library('upload',$config);
                if(!$this->upload->do_upload('foto')){ //upload foto
                    $this->session->set_flashdata('error', "Edit Gagal, Format Gambar Tidak Mendukung");
                    redirect('Paket');
                }else{
                    $gambar1 = $this->upload->file_name;
                    $this->session->set_flashdata('success', "Data Berhasil Diedit");
                }

            }else{
                $gambar1= $this->input->post('foto_old'); //kalau ga ada gambar yang diupload
                $this->session->set_flashdata('success', "Data Berhasil Diedit");
            }

        $config2['upload_path']       = './assets_upload/paket_pdf';
        $config2['allowed_types']     = '*';
        $config2['overwrite']         = true;
        $config2['max_size']          = 10000; // 3MB

            if (!empty($_FILES['pdf']['name'])){
                $this->load->library('upload',$config2);
                if(!$this->upload->do_upload('pdf')){ //upload foto
                    $this->session->set_flashdata('error', "Edit Gagal, Format Data Tidak Mendukung");
                    redirect('Admin/paket');
                }else{
                    $pdf = $this->upload->file_name;
                    $this->session->set_flashdata('success', "Data Berhasil Diedit");
                }

            }else{
                $pdf= $this->input->post('pdf_old');
                $this->session->set_flashdata('success', "Data Berhasil Diedit");
            }

            $data = array(
                'kategori_paket' => $kategori, //bagiam kiri adalah nama di db
                'nama_paket' => $nama,
                'destinasi_paket' => $destinasi,
                'durasi_paket' => $durasi,
                'harga_paket' => $harga,
                'file_pdf' => $pdf,
                'gambar_paket' => $gambar1
            );
            $where=array('id_paket'=>$id);
            $this->Paket_model->save_edit($data,$where);
            redirect('Paket');

        }

}

?>
