<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');
    $this->load->model('mahasiswa_model');
    $this->load->library('form_validation');
    $this->load->model('editProfile');
  }

  public function index()
  {

    $user['email'] = $this->session->userdata('email');
    $user_d['data_m'] = $this->mahasiswa_model->getprofile($user);
    $user_d['css'] = 'dashboardMhs';
    // echo $user;

    if ($user_d != null) {
      // echo implode($user_d['data_m']);
      $this->load->view('templates/dashboard_header', $user_d);
      $this->load->view('mahasiswa/Dashboard', $user_d);
      $this->load->View('templates/dashboard_footer');
    } else {
      echo "salah";
    }
  }
  public function Update()
  {
    echo 'ini method update';
  }

  public function registrasi()
  {

    $data['email'] = $this->session->userdata('email');
    $user_d['data_m'] = $this->mahasiswa_model->getprofile($data);

    if ($user_d != null) {
      $this->load->view('templates/dashboard_header', $user_d);
      $this->load->view('mahasiswa/registrasi', $user_d);
      $this->load->View('templates/dashboard_footer');
    }
  }

  public function viewJadwal()
  {

    $data['email'] = $this->session->userdata('email');
    $user_d['data_m'] = $this->mahasiswa_model->getprofile($data);
    $user_d['css'] = 'jadwalMhs';

    if ($user_d != null) {
      $this->load->view('templates/dashboard_header', $user_d);
      $this->load->view('mahasiswa/kelas', $user_d);
      $this->load->View('templates/dashboard_footer');
    }
  }

  public function editmahasiswa()
  {

    $data['email'] = $this->session->userdata('email');
    //data_m harus selalu ada untuk menampilkan css
    $user_d['data_m'] = $this->mahasiswa_model->getprofile($data);
    //css harus selalu diupdate apabila berganti halaman fungsionalitas
    $user_d['css'] = 'editMhs';

    if ($user_d != null) {
      //mengatur rules
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
      $this->form_validation->set_rules('ttl', 'TTL', 'required|trim');
      $this->form_validation->set_rules('notelp', 'NoTelp', 'required');
      $this->form_validation->set_rules('alamat', 'Alamat', 'required');

      // $this->form_validation->run() == false berarti rules belum dijalankan
      if ($this->form_validation->run() == false) {
        $this->load->view('templates/dashboard_header', $user_d);
        $this->load->view('mahasiswa/edit_mahasiswa', $user_d);
      } else {
        //dictionary
        $data = [
          'email' => $this->input->post('email'),
          'TTL' => $this->input->post('ttl'),
          'alamat' => $this->input->post('alamat'),
          'nomortelfon' => $this->input->post('notelp'),
          'ortu' => $this->input->post('ortu'),
          'noortu' => $this->input->post('noortu')
        ];
        // kirim data ke mdoel
        $this->editProfile->UpdateProfile($data);
        //redirect
        redirect('mahasiswa/editmahasiswa');
      }
    }
  }
}
