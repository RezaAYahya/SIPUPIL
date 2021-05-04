<?php
defined('BASEPATH') or exit('No direct script access allowed');

class editprofile extends CI_Model
{

    public function UpdateProfileMHS($data)
    {
        // CI memiliki query builder untuk mengupdate data seperti database yang menggunakan "alter table set_value"
        $this->db->set('Name', $data['name']);
        $this->db->set('email', $data['email']);
        $this->db->set('password', $data['password']);
        $this->db->set('alamat', $data['alamat']);
        $this->db->set('nomortelefon', $data['nomortelefon']);
        $this->db->set('ttl', $data['ttl']);
        $this->db->update('dosen');
    }

    public function UpdateProfileDosen($data)
    {
        // CI memiliki query builder untuk mengupdate data seperti database yang menggunakan "alter table set_value"
        $this->db->set('Name', $data['name']);
        $this->db->set('email', $data['email']);
        $this->db->set('password', $data['password']);
        $this->db->set('alamat', $data['alamat']);
        $this->db->set('nomortelefon', $data['nomortelefon']);
        $this->db->set('ttl', $data['ttl']);
        $this->db->update('dosen');
    }
}
