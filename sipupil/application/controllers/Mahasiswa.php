<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct(){
      parent::__construct();
      $this->load->library('session');
    }

    public function index()
    {
        echo 'ini method index';
        echo $this->session->userdata('username');
    }

    public function Update()
    {
        echo 'ini method update';
    }
}
