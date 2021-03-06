<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
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
      if ($this->form_validation->run() == false) {
          $data['title'] = 'Login Page';
          $this->load->view('templates/auth_header', $data);
          $this->load->view('auth/menu_login');
          $this->load->view('templates/auth_footer');
      // } else {
      //     $this->_login();
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

      if ($this->form_validation->run() == false){
        $this->load->view('templates/auth_header');
        $this->load->view('auth/logindos');
        $this->load->view('templates/auth_footer');
      } else {
          $verify['email'] = $this->input->post('email');
          $verify['password'] = $this->input->post('password');
          if ($this->dosen_model->verifyDos($verify)) {

            $user_d = $this->dosen_model->getprofile($this->input->post('username'));
            $this->session->set_userdata('username', $user_d['username']);

            // redirect('/NAMACONTROLLER DASHBOARD DOSEN');
          } else {
            $error['error_message'] = "Email or password invalid";
            $this->load->view('templates/auth_header');
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

      if ($this->form_validation->run()==false){
        $this->load->view('templates/auth_header');
        $this->load->view('auth/loginmhs');
        $this->load->view('templates/auth_footer');
      } else {
          $verify['email'] = $this->input->post('email');
          $verify['password'] = $this->input->post('password');
          if ($this->mahasiswa_model->verifyMhs($verify)) {

            $user_d = $this->mahasiswa_model->getprofile($this->input->post('email'));
            $this->session->set_userdata('username', $user_d['username']);

            // redirect('/NAMACONTROLLER DASHBOARD MAHASISWA');
          } else {
            $error['error_message'] = "Username or password invalid";
            $this->load->view('templates/auth_header');
            $this->load->view('auth/loginmhs', $error);
            $this->load->view('templates/auth_footer');
          }
      }
      // kalau usernya ada
      // if ($user) {
      //     // cek password
      //     if (password_verify($password, $user['password'])) {
      //         $data = [
      //             'email' => $user['email'],
      //             'role_id' => $user['role_id']
      //         ];
      //         $this->session->set_userdata($data);
      //         redirect('user');
      //     } else {
      //         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Wrong password</div>');
      //         redirect('auth');
      //     }
      // } else {
      //     $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email is not registered</div>');
      //     redirect('auth');
      // }
  }

  public function logout()
  {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> You have been logout</div>');
        redirect('auth');
  }
}
