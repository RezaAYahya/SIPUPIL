<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('dosen_model');
    $this->load->model('mahasiswa_model');
    $this->load->library('form_validation');
    $this->load->library('session');
  }
  public function index()
  {
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');
    $data['title'] = 'login page';
    if ($this->form_validation->run() == false) {
      $data['title'] = 'Login Page';
      $this->load->view('templates/auth_header', $data);
      $this->load->view('auth/menu_login');
      $this->load->view('templates/auth_footer');
      // echo 'masuk login';
    } else {
      $this->_login();
      // } else{
      echo 'gagal';
    }
    // echo "test";
  }

  public function dosenlog()
  {
    // $email = $this->input->post('email');
    // $password = $this->input->post('password');
    // $user = $this->db->get_where('user', ['email' => $email])->row_array();

    $this->form_validation->set_rules('email', 'Email', 'required|trim');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');
    // $email = $this->input->post('email');
    // $password = $this->input->post('password');
    $data['title'] = 'Page Login Dosen';
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/auth_header', $data);
      $this->load->view('auth/logindos');
      $this->load->view('templates/auth_footer');
    } else {
      $verify['email'] = $this->input->post('email');
      $verify['password'] = $this->input->post('password');
      if ($this->dosen_model->verifyDos($verify)) {
        $user_d = $this->dosen_model->getprofile($verify);
        $this->session->set_userdata('username', $user_d['username']);
        $this->session->set_userdata('NIDN', $user_d['NIDN']);
        $this->session->set_userdata('Name', $user_d['Name']);
        $this->session->set_userdata('email', $user_d['email']);
        $this->session->set_userdata('status', $_user_d['status']);
        redirect('dosen');
      } else {
        $error['error_message'] = "Email or password invalid";
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/logindos', $error);
        $this->load->view('templates/auth_footer');
        // echo "test";
      }
    }
  }

  public function mahasiswalog()
  {
    $this->form_validation->set_rules('email', 'Email', 'required|trim');
    $this->form_validation->set_rules('password', 'Password', 'required|trim');
    // $email = $this->input->post('email');
    // $password = $this->input->post('password');
    $data['title'] = 'Page Login Mahasiswa';
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/auth_header', $data);
      $this->load->view('auth/loginmhs');
      $this->load->view('templates/auth_footer');
    } else {
      $data['email'] = $this->input->post('email');
      $data['password'] = $this->input->post('password');

      if ($this->mahasiswa_model->verifyMhs($data)) {
        $user_d = $this->mahasiswa_model->getprofile($data);

        // memasukkan variable penting untuk digunakan pada setiap sesi
        $this->session->set_userdata('username', $user_d['username']);
        $this->session->set_userdata('NIM', $user_d['NIM']);
        $this->session->set_userdata('Name', $user_d['Name']);
        $this->session->set_userdata('email', $user_d['email']);
        $this->session->set_userdata('status', 'mahasiswa');
        redirect('mahasiswa');
      } else {
        $error['error_message'] = "Username or password invalid";

        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/loginmhs', $error);
        $this->load->view('templates/auth_footer');
      }
    }
  }

  public function logout()
  {
    // $this->session->unset_userdata('email');
    // $this->session->unset_userdata('role_id');
    // $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> You have been logout</div>');
    $this->session->sess_destroy();
    redirect('login');
  }
}
