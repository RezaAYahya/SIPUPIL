<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forum extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('mahasiswa_model');
        $this->load->model('forum_model');
        $this->load->library('form_validation');
        $this->load->model('editProfile');
    }

    public function index(){
        echo "index forum";
    }
    
    public function forumMahasiswa(){
        $data['email'] = $this->session->userdata('email');
        //data_m harus selalu ada untuk menampilkan css
        $user_d['data_m'] = $this->mahasiswa_model->getprofile($data); //MODELNYA BERHASIL
        //css harus selalu diupdate apabila berganti halaman fungsionalitas
        $user_d['css'] = 'forumMhs';
        $nim = $user_d['data_m']['NIM'];
        
        if ($user_d != null){
          $this->load->view('templates/dashboard_header',$user_d);
          $this->load->view('mahasiswa/forum_Mahasiswa',$user_d);
          $this->load->View('templates/dashboard_footer',$user_d);
        }
        else{
          echo "error";
        }  
        }

    public function editForum(){
        $data['email'] = $this->session->userdata('email');
        //data_m harus selalu ada untuk menampilkan css
        $user_d['data_m'] = $this->mahasiswa_model->getprofile($data);
        //css harus selalu diupdate apabila berganti halaman fungsionalitas
        $user_d['css'] = 'buatForum';
        $this->load->view('templates/dashboard_header',$user_d);
        $this->load->view('mahasiswa/buat_forum',$user_d);
        $this->load->View('templates/dashboard_footer',$user_d);

    }

    public function tes(){

        $data = [
            'Isi_Forum' => 'Hewan Hewan apa yang Hewan?',
            'ID_Matkul' => '1',
            'NIM' => '1301180063'
        ];

        $this->forum_model->buatforum2($data);
        echo "berhasil";
        // $this->forum_model->loadavailableforums();
        // echo $data['isi_forum'][0];
    }

}

