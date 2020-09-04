<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class hotel extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Hotel_model');
    }

    public function index()
    {
        $data['hotel'] = $this->Hotel_model->ambil_semua_hotel();
		$this->load->view('admin/hotel',$data);
    }

    public function index_subdaerah($daerah)
    {
        if ($daerah == "semua") {
            $data['hotel'] = $this->Hotel_model->ambil_semua_hotel();
            $this->load->view('admin/hotel',$data);
        }else
        {
            $data['hotel'] = $this->Hotel_model->ambil_semua_hotel_daerah($daerah);
            $this->load->view('admin/hotel',$data);
        }
        
    }

    public function index_subdaerah_kamar($id)
    {   
        $data=$this->Hotel_model->ambil_semua_hotel_daerah_all($id);
        echo json_encode($data);
    }

    public function tambah()
    {
        $this->load->view('admin/hotel_tambah');

    }

    function tambah_aksi(){
        $nama = $this->input->post('namahotel'); //'' = sesuai nama di form
        $daerah = $this->input->post('daerahhotel');
        $tkamar = $this->input->post('tkamar');
        $harga = $this->input->post('hargakamar');
        $data2 = array();

        $config['upload_path']       = './assets_upload/hotel_gambar';
        $config['allowed_types']     = 'jpg|png';
        $config['overwrite']         = true;
        $config['max_size']          = 3072; // 3MB

             $this->load->library('upload',$config); //library 'upload' dari CI
            
            if(!$this->upload->do_upload('foto')){ //upload foto
                $this->session->set_flashdata('error', "Tambah Data Gagal, Format Gambar Tidak Mendukung");
                redirect('Hotel/tambah');
            }else{
                $gambar1 = $this->upload->file_name;
                $this->session->set_flashdata('success', "Data Berhasil Diinputkan");
            }


            $data = array(
                'nama_hotel' => $nama, //bagiam kiri adalah nama di db
                'daerah_hotel' => $daerah,
                'gambar_hotel' => $gambar1
            );
            $this->Hotel_model->save_tambah($data,'hotel');

            $temp = $this->Hotel_model->ambil_id_gambar($nama,$daerah);
            $index = 0;
            foreach($tkamar as $datanama){ // Kita buat perulangan berdasarkan nis sampai data terakhir
                array_push($data2, array(
                'id_hotel'=>$temp->id_hotel,
                'nama_tkamar'=>$datanama,
                'harga_tkamar'=>$harga[$index]
              ));
              
              $index++;
            }

            $this->Hotel_model->save_batch($data2);
            redirect('hotel');

        }

        function edit($id_hotel){
            $data['hotel'] = $this->Hotel_model->ambil_id_hotel($id_hotel);
            $this->load->view('admin/hotel_edit',$data);
        }

        function edit_aksi(){
        $nama = $this->input->post('namahotel'); //'' = sesuai nama di form
        $daerah = $this->input->post('daerahhotel');
        $tkamar = $this->input->post('tkamar');
        $harga = $this->input->post('hargakamar');
        $tkamar2 = $this->input->post('tkamar2');
        $harga2 = $this->input->post('hargakamar2');
        $id_tkamar = $this->input->post('id_tkamar');
        $data2 = array();
        $data3 = array();
        $id = $this->input->post('id_hotel');


        $config['upload_path']       = './assets_upload/hotel_gambar';
        $config['allowed_types']     = 'jpg|png';
        $config['overwrite']         = true;
        $config['max_size']          = 3072; // 3MB

        if (!empty($_FILES['foto']['name'])){ //kalau ada gambar yang diupload
            $this->load->library('upload',$config);
                if(!$this->upload->do_upload('foto')){ //upload foto
                    $this->session->set_flashdata('error', "Edit Gagal, Format Gambar Tidak Mendukung");
                    redirect('hotel');
                }else{
                    $gambar1 = $this->upload->file_name;
                    $this->session->set_flashdata('success', "Data Berhasil Diedit");
                }

            }else{
                $gambar1= $this->input->post('foto_old'); //kalau ga ada gambar yang diupload
                $this->session->set_flashdata('success', "Data Berhasil Diedit");
            }

            
            $data = array(
                'nama_hotel' => $nama, //bagiam kiri adalah nama di db
                'daerah_hotel' => $daerah,
                'gambar_hotel' => $gambar1
            );

            $where=array('id_hotel'=>$id);
            $this->Hotel_model->save_edit($data,$where);

            $index = 0;
            foreach($tkamar as $datanama){ // Kita buat perulangan berdasarkan nis sampai data terakhir
                if (empty($tkamar[$index])) {
                    $where=array('id_tkamar'=>$id_tkamar[$index]);
                    $this->Hotel_model->delete_tkamar($where);
                }
                array_push($data2, array(
                'nama_tkamar'=>$datanama,
                'harga_tkamar'=>$harga[$index],
                'id_tkamar'=>$id_tkamar[$index]
              ));
              
              $index++;
            }
            $this->Hotel_model->save_edit_tkamar($data2,'tkamar');

            if (!empty($tkamar2)) {
                $index = 0;
            foreach($tkamar2 as $datanama){ // Kita buat perulangan berdasarkan nis sampai data terakhir
                array_push($data3, array(
                'id_hotel'=>$id,
                'nama_tkamar'=>$datanama,
                'harga_tkamar'=>$harga2[$index]
              ));
              
              $index++;
            }

            $this->Hotel_model->save_batch($data3);
            }
            
            redirect('hotel');

        }

        function hapus($id){
            $data = $this->Hotel_model->ambil_id_gambar($id);
            $path = './assets_upload/hotel_gambar/';
            @unlink($path.$data->gambar_hotel);

            $where=array('id_hotel'=>$id);
            $this->Hotel_model->hapus($where);
            $this->Hotel_model->delete_tkamar($where);
            $this->session->set_flashdata('success', "Data Berhasil Dihapus");
            redirect('Hotel');
        }
}

?>
