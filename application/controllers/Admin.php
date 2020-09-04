    <?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function index()
    {
		$this->load->view('admin/login');

    }

    public function aksi_login() 
    {
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $where=array (
            'username'=> $username,
            'password' => md5($password)
        );
        $cek=$this->Admin_model->cek_login($where,'login')->num_rows();
        
        if ($cek > 0){
            $data_session=array(
                'username'=>$username,
                'status'=>"login"
            );

            $this->session->set_userdata($data_session);
            $this->session->set_flashdata('success', "Selamat Datang di Halaman Admin Eksis Tour and Travel");
            redirect('Paket');
        }
        else{
            $this->session->set_flashdata('error', "Username/Password Salah!");
            redirect('Admin');
        }

    }

    public function logout()
    {
        $this->session->unset_userdata('status');
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('logout', "Terima Kasih Telah Menggunakan Halaman Admin");
        redirect('Admin');
    }  

    function edit($username){
            $data['admin'] = $this->Admin_model->ambil_id_admin($username);
            $this->load->view('admin/pengaturan_akun',$data);
        }

        function edit_aksi(){
        $username=$this->input->post('username');
        $password = $this->input->post('password');
        $data = array(
                'username' => $username, //bagiam kiri adalah nama di db
                'password' => md5($password),
            );
            $where=array('username'=>$username);
            $this->Admin_model->save_edit($data,$where);
            $this->session->set_flashdata('success', "Password berhasil diganti!");
            redirect('Paket');

        }

        function ganti_bg(){
            $data['background'] = $this->Admin_model->ambil_id_bg();
            $this->load->view('admin/ganti_background',$data);
        }


        function ganti_bg_aksi(){
        $id=$this->input->post('id_background');
        $foto_old = $this->input->post('foto_old');
        $config['upload_path']       = './assets_utama/img';
        $config['allowed_types']     = 'jpg';
        $config['overwrite']         = true;
        $config['max_size']          = 10000; // 3MB

        if (!empty($_FILES['foto']['name'])){ //kalau ada gambar yang diupload
            $this->load->library('upload',$config);
                if(!$this->upload->do_upload('foto')){ //upload foto
                    $this->session->set_flashdata('error', "Edit Gagal, Format Gambar Tidak Mendukung, Harap Gunakan File Berekstensi .JPEG");
                    redirect('Admin/ganti_bg');
                }else{
                    $gambar1 = $this->upload->file_name;
                    $this->session->set_flashdata('success', "Data Berhasil Diedit");
                }

            }else{
                $gambar1= $this->input->post('foto_old'); //kalau ga ada gambar yang diupload
                $this->session->set_flashdata('success', "Data Berhasil Diedit");
            }

            $data = array(
                'nama_background' => $gambar1
            );

            $where=array('id_background'=>$id);
            $this->Admin_model->save_edit_bg($data,$where);
            redirect('Admin/ganti_bg');

        }
}

?>
