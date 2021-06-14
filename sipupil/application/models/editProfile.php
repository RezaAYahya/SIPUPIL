<?php
defined('BASEPATH') or exit('No direct script access allowed');

class editprofile extends CI_Model
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
      // CI memiliki query builder untuk mengupdate data seperti database yang menggunakan "alter table set_value"
      $this->db->set('email', $data['email']);
      $this->db->set('alamat', $data['alamat']);
      $this->db->set('nomortelfon', $data['nomortelfon']);
      $this->db->set('TTL', $data['TTL']);
      $this->db->set('ortu', $data['ortu']);
      $this->db->set('noortu', $data['noortu']);
      
      $status = $this->session->userdata['status']; #consolidate at conditional exrpession
      
      if ($status == 'mahasiswa'){ #apabila yang diupdate
        $this->db->update('mahasiswa');
      } elseif(($status == 'dosen') || ($status == 'dosenwali')){
        $this->db->update('dosen');
      }
  }
}
