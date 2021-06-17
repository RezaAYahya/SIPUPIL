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

    public function allmahasiswa(){
        $query = $this->db->get('mahasiswa');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return 1;
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

    public function registration($data){
        foreach($data as $ddb){
        }
    }

    // public function ge
}
