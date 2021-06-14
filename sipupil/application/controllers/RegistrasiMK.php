<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistrasiMK extends CI_Controller {

	public function __construct()
  {
    parent::__construct();
    $this->load->model('registrasimk_model');
    $this->load->model('mahasiswa_model');
  }
	public function index()
	{
    $data['email'] = $this->session->userdata('email');
    //mengambil data dengan parameter array
    //data_m harus selalu ada untuk menampilkan css
    $user_d['data_m'] = $this->mahasiswa_model->getprofile($data);
    $user_d['css'] = 'registrasiMhs';
    if($data != NULL){
      // $data['data_m'] = $this->mahasiswa_model->getprofile($this->session->user_d['email']);
      // $data['jadwal'] = $this->registrasimk_model->getpilihan($this->session->user_d['NIM']);
      ###CARI CARA UNTUK MENAMPILKAN SEMUA MATKUL SESUAI DENGAN NIM
      
      $this->load->view('templates/dashboard_header',$user_d);
      $this->load->view('mahasiswa/registrasi',$user_d);
      $this->load->view('templates/dashboard_footer');
    }
	}

	public function ambilPilihan($data)
	{
		echo 'fungsi memindahkan pilihan ke terpilih';
		// redirect('registrasimk');
	}
	public function dropPilihan($data)
	{
		echo 'fungsi memindahkan pilihan ke terpilih';
		// redirect('registrasimk');
	}
  
  public function cek(){
    echo 'masuk Registrasi';
  }

  //Test test satu dua tiga anjir mantap
}
