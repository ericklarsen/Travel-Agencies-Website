<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Paket_model');
        $this->load->model('Hotel_model');
        $this->load->model('Promo_model');
        $this->load->model('Dokumentasi_model');
        $this->load->model('Mobil_model');
        $this->load->model('Artikel_model');
        $this->load->model('Admin_model');
    }

    public function index()
    {
        $data['dokumentasi'] = $this->Dokumentasi_model->ambil_semua_dokumentasi();
        $data['populer'] = $this->Promo_model->ambil_semua_populer();
        $data['hotel_daerah'] = $this->Hotel_model->ambil_hotel_daerah();
        $data['hotel'] = $this->Hotel_model->ambil_semua_hotel();
        $data['artikel'] = $this->Artikel_model->ambil_semua_artikel();
        $data['background'] = $this->Admin_model->ambil_id_bg();
        $this->load->view('guest/index',$data);

    }

    public function about()
    {
        $this->load->view('guest/about');

    }

    public function paket()
    {
        $kategori = $this->input->post('kategori2');
        if ($kategori == "domestik") {
            $data['paket'] = $this->Paket_model->ambil_semua_paket();
            $data['promo'] = $this->Promo_model->ambil_semua_promo();
            $this->load->view('guest/paket_domestik',$data);
        }else
        {
            $data['paket'] = $this->Paket_model->ambil_semua_paket();
            $data['promo'] = $this->Promo_model->ambil_semua_promo();
            $this->load->view('guest/paket_internasional',$data);
        }

    }

    public function paket_domestik()
    {
        $data['paket'] = $this->Paket_model->ambil_semua_paket();
        $data['promo'] = $this->Promo_model->ambil_semua_promo();
        $this->load->view('guest/paket_domestik',$data);

    }

    public function paket_internasional()
    {
        $data['paket'] = $this->Paket_model->ambil_semua_paket();
        $data['promo'] = $this->Promo_model->ambil_semua_promo();
        $this->load->view('guest/paket_internasional',$data);

    }

    public function rental()
    {
        $kategori = $this->input->post('kategori2');
        if ($kategori == "mobil") {
            $data['mobil'] = $this->Mobil_model->ambil_semua_mobil();
            $this->load->view('guest/rental_mobil',$data);
        }else
        {
            $data['mobil'] = $this->Mobil_model->ambil_semua_mobil_bus();
        $this->load->view('guest/rental_bus',$data);
        }

    }

    public function rental_mobil()
    {
        $data['mobil'] = $this->Mobil_model->ambil_semua_mobil();
        $this->load->view('guest/rental_mobil',$data);

    }

    public function rental_bus()
    {
        $data['mobil'] = $this->Mobil_model->ambil_semua_mobil_bus();
        $this->load->view('guest/rental_bus',$data);
    }


    public function voucher_hotel()
    {
         $data['hotel_daerah'] = $this->Hotel_model->ambil_hotel_daerah();
         $data['hotel'] = $this->Hotel_model->ambil_semua_hotel();
        $this->load->view('guest/voucher_hotel',$data);

    }

    public function voucher_hotel_daerah()
    {   
        $daerah = $this->input->post('kategori');
        if ($daerah == "semua") {
            $data['hotel_daerah'] = $this->Hotel_model->ambil_hotel_daerah();
            $data['hotel'] = $this->Hotel_model->ambil_semua_hotel();
            $data['daerah'] = $daerah;
            $this->load->view('guest/voucher_hotel',$data);
        }else
        {
            $data['hotel_daerah'] = $this->Hotel_model->ambil_hotel_daerah();
            $data['hotel'] = $this->Hotel_model->ambil_semua_hotel_daerah($daerah);
            $data['daerah'] = $daerah;
            $this->load->view('guest/voucher_hotel_daerah',$data);
        }
        
    }

    public function artikel()
    {
        $data['artikel'] = $this->Artikel_model->ambil_semua_artikel();
        $this->load->view('guest/artikel',$data);

    }

    public function kontak()
    {
        $this->load->view('guest/kontak');

    }

}

?>
