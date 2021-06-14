<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistrasiMK extends CI_Controller {

	public function __construct()
  {
    parrent::__construct();
    $this->load->model('registrasimk_model');
    $this->load->model('mahasiswa_model');
  }
	public function index()
	{
    $data = $this->session->user_d('username');
    if($user != NULL){
      $data['dataMahasiswa'] = $this->mahasiswa_model->getprofile($this->session->user_d['email']);
      // $data['jadwal'] = $this->registrasimk_model->getpilihan($this->session->user_d['NIM']);
      ###CARI CARA UNTUK MENAMPILKAN SEMUA MATKUL SESUAI DENGAN NIM
      $this->load->view('templates/dashboard_header',$data);
      $this->load->view('mahasiswa/registrasi',$data);
      $this->load->view('templates/dashboard_footer');
    }
	}

	public function ambilPilihan($data)
	{
		echo 'fungsi memindahkan pilihan ke terpilih';
		redirect('registrasimk');
	}
	public function dropPilihan($data)
	{
		echo 'fungsi memindahkan pilihan ke terpilih';
		redirect('registrasimk');
	}
  

  //Test test satu dua tiga anjir mantap
}
