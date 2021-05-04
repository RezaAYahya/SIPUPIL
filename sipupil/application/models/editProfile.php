<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dosen_model extends CI_Model
{
    public function verifyDos($data)
    {
        //dari tb_member karena sudah ada pemilihan menu dari awal
        $query = $this->db->where("email", $data['email'])->where("password", $data['password'])->get("dosen");
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getprofile($user)
    {
        $query = $this->db->where('email', $data)->get('dosen')->row_array();
        if($query){
          return $query;
        }
        else
        {
          return false;
        };
    }

    public function UpdateProfile($data)
    {
        // $this->db->set('username', $data['username']);
        $this->db->set('Name', $data['name']);
        $this->db->set('email', $data['email']);
        $this->db->set('password', $data['password']);
        $this->db->set('alamat', $data['alamat']);
        $this->db->set('nomortelefon', $data['nomortelefon']);
        $this->db->set('ttl', $data['ttl']);
        $this->db->update('dosen');
    }

}
