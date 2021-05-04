<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mahasiswa_model extends CI_Model
{
    public function verifyMhs($data)
    {
        // memverifikasi email dan password, apabila data ada di database, maka akan mengembalikan seluruh tabel data mahasiswa yang sesuai
        $query = $this->db->where("email", $data['email'])->where("password", $data['password'])->get("mahasiswa");
        // conditional, apabila data ditemukan maka num_rows() > 0. apabila tidak ada maka num_rows == 0
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getprofile($user)
    {
        // pada class diagram, kami menentukan NIM sebagai parameter pencarian profile,namu pada menu login kami memasukkan email sebagai ketentuan untuk LogicException
        //maka dari email kita mencari NIM, setelah itu dari NIM kita dapat mencari data.
        $email = $this->db->where('email', $user['email'])->get('mahasiswa')->row_array();
        // mencari data dari nim yang didapatkan pada query di atas
        $query = $this->db->where('NIM', $email['NIM'])->get('mahasiswa')->row_array();
        if($query){
          return $query;
        }
        else
        {
          return false;
        };
    }
    public function updateData($data)
    {
        // $this->db->set('username', $data['username']);
        $this->db->set('Name', $data['name']);
        $this->db->set('email', $data['email']);
        $this->db->set('password', $data['password']);
        $this->db->set('alamat', $data['alamat']);
        $this->db->set('nomortelefon', $data['nomortelefon']);
        $this->db->set('asalsma', $data['asalsma']);
        $this->db->set('ttl', $data['ttl']);
        $this->db->update('mahasiswa');
    }
}
