<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function index()
    {
        echo 'ini method index';
    }

    public function Update()
    {

      $user = $this->session->userdata('username');
        if ($user != NULL) {
            $d_mhs['editMhs'] = $this->mahasiswa_model->getprofile('cicilalang@gmail.com');

            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|trim');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('number', 'Number', 'required');
            $this->form_validation->set_rules('alamat', 'alamat', 'required');
            $this->form_validation->set_rules('asalsma', 'asalsma', 'required');
            $this->form_validation->set_rules('ttl', 'ttl', 'required');

            if ($this->form_validation->run() == false) {
                $this->load->view('templates/auth_header');
                $this->load->view('mahasiswa/edit_mahasiswa',$d_mhs);
                $this->load->view('templates/auth_footer');
            } else {
                $data = [
                    'username' => $user,
                    'password' => $this->input->post('password'),
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'nomortelefon' => $this->input->post('nomortelefon')
                    'asalsma' => $this->input->post('asalsma')
                    'ttl' => $this->input->post('ttl')
                    'alamat' => $this->input->post('alamat')
                ];

                $this->mahasiswa_model->setprofile($data);


                redirect('/mahasiswa/edit_mahasiswa/');
            }
        } else {
            redirect('/Welcome');
        }
    }

}
