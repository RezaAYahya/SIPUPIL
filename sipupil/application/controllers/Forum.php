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
        $user_d['forum'] = $this->forum_model->loadavailableforums();
        $user_d['matkul'] = $this->forum_model->loadmatkul();
        $user_d['siswa'] = $this->mahasiswa_model->allmahasiswa();
        
        if ($user_d != null){
          $this->load->view('templates/dashboard_header',$user_d);
          $this->load->view('mahasiswa/forum_Mahasiswa',$user_d);
          $this->load->View('templates/dashboard_footer',$user_d);
        }
        else{
          echo "error";
        }  
    }

    public function editForum($idforum){
        $data['email'] = $this->session->userdata('email');
        //data_m harus selalu ada untuk menampilkan css
        $user_d['data_m'] = $this->mahasiswa_model->getprofile($data);
        //css harus selalu diupdate apabila berganti halaman fungsionalitas
        $user_d['css'] = 'buatForum';
        $user_d['ID_Forum'] = $idforum;
        $user_d['forum_d'] = $this->forum_model->loadforumbyID($idforum);
        
        $this->form_validation->set_rules('Isi_forum', 'Isi_forum', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/dashboard_header',$user_d);
            $this->load->view('mahasiswa/forum_edit',$user_d);
            $this->load->View('templates/dashboard_footer',$user_d);
        }else{
            echo $idforum;
            $data = [
                'Isi_Forum' => $this->input->post('Isi_forum'),
                'ID_Forum' => $idforum
                // 'NIM' => $this->session->userdata('NIM')
            ];

            // $this->forum_model->editForum($data);
            // redirect('forum/forummahasiswa');
        }
    }

    public function buatForum($input){ #datanya nim
        $data['email'] = $this->session->userdata('email');
        //data_m harus selalu ada untuk menampilkan css
        $user_d['data_m'] = $this->mahasiswa_model->getprofile($data);
        //css harus selalu diupdate apabila berganti halaman fungsionalitas
        $user_d['css'] = 'buatForum';
        
        $this->form_validation->set_rules('subject', 'subject', 'required');
        $this->form_validation->set_rules('message', 'message', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/dashboard_header',$user_d);
            $this->load->view('mahasiswa/buat_forum',$user_d);
            $this->load->View('templates/dashboard_footer',$user_d);
        }else{
            $data = [
                'Isi_Forum' => $this->input->post('Isi_forum'),
                'ID_Matkul' => $this->input->post('ID_Matkul'),
                'NIM' => $this->session->userdata('NIM')
            ];

            $this->forum_model->buatforum2($data);
        }
        redirect('forum/mahasiswa');
    }

    public function deleteForum($idforum){
        $this->forum_model->hapusforum($idForum);
        redirect('forum/mahasiswa');
    }

    public function tes($data){
        // echo $data;
        $this->forum_model->loadforumbyID($data);
        // $this->forum_model->buatforum2($data);
        // echo "berhasil";
        // $this->forum_model->loadavailableforums();
        // echo $data['isi_forum'][0];
    }

}

