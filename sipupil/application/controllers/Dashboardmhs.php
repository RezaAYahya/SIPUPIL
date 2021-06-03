<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboardmhs extends CI_Controller {

	public function __construct()
  {
    parent::__construct();

    $this->load->model('mahasiswa_model');
    $this->load->library('session');

  }
	public function index()
	{
		if($this->session->userdata('username') != null){
			$user['email'] = $this->session->userdata('email');
			$user_d['data_m'] = $this->mahasiswa_model->getprofile($user);
			if ($user_d['data_m'] != null){

				$this->load->view('mahasiswa/Dashboard',$user_d);
				$this->load->View('templates/dashboard_footer');
			}

		}

	}
}
