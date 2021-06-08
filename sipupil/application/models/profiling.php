<?php
defined('BASEPATH') or exit('No direct script access allowed');

class profiling extends CI_Model
{
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
}
