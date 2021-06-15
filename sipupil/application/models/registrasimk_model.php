<?php
defined('BASEPATH') or exit('No direct script access allowed');

class registrasimk_model extends CI_Model
{
    //Fungsi yang mengembalikan data yang row array
    public function getpilihan($data)
    {
        //dari tb_member karena sudah ada pemilihan menu dari awal
        $NIM = $this->db->where("NIM", $data['NIM'])->get("pilihan");
        if ($query->num_rows() > 0) {
            // mengembalikan data pilihan matkul yang tersedia
            return $query->row_array();
        } else {
            return false;
        }
    }
    
//meampilkan matkul dan id idnya
    public function piihanmatkul(){
      $query = $this->db->query("SELECT * FROM jadwalmatakuliah JOIN matakuliah ON jadwalmatakuliah.ID_Matkul = matakuliah.ID_Matkul");
      if ($query != null) {
        return $query->result_array();
      }else {
        return 1;
      }
    }

    public function ambilmatkul($data){ #data berupa nim dan ID_inputkelas prodi
      $this->db->insert('dipilih',$data);
    }

    //menghapus pilihan sesuai dengan nama mata kuliah yang dipilih.
    public function drop($data){ #data berupa ID_InputKelasProdi dan NIM
      $sql = "DELETE FROM dipilih where NIM = ? AND ID_InputKelasProdi =?";
      $this->db->query($sql,array($data['NIM'], $data['ID_InputKelasProdi']));
    }
}
