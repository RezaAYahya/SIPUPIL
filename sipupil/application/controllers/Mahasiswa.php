<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct(){
      parent::__construct();
      $this->load->library('session');
      $this->load->model('mahasiswa_model');
    }

    public function index()
    {

        $user['email'] = $this->session->userdata('email');
        $user_d['data_m'] = $this->mahasiswa_model->getprofile($user);
        // echo $user;

        if ($user_d != null){
          // echo $user_d['username'];
          $this->load->view('templates/dashboard_header',$user_d);
          $this->load->view('mahasiswa/Dashboard',$user_d);
          $this->load->View('templates/dashboard_footer');
        } else{
          echo "salah";
        }
    }
    public function Update()
    {
        echo 'ini method update';
    }

    public function registrasi(){

      $user['email'] = $this->session->userdata('email');
      $user_d['data_m'] = $this->mahasiswa_model->getprofile($user);

      if ($user_d!=null){
        $this->load->view('templates/dashboard_header',$user_d);
        $this->load->view('mahasiswa/registrasi',$user_d);
        $this->load->View('templates/dashboard_footer');
      }
    }
    public function editmahasiswa(){

      $user['email'] = $this->session->userdata('email');
      $user_d['data_m'] = $this->mahasiswa_model->getprofile($user);
      $user_d['status'] = '1';

      if ($user_d != null){
        // echo 'menu registrasi';
        // echo $user['email'];

        $this->load->view('templates/dashboard_header');
        $this->load->view('mahasiswa/edit_mahasiswa',$user_d);
      }
      else {
        echo 'Error';
      }
  }
}
