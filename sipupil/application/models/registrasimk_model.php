<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mahasiswa_model extends CI_Model
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
    // memasukkan data matkul yang menjadi pilihan mahasiswa
    public function ambil($data){
      $a = $this->db->where('Mata_Kuliah', $data['matakuliah'])->get('matakuliah')->row_array();
      $b = $this->db->where('ID_registrasi', $a['ID_Matkul'])->get('pilihan')->row_array();
      $c = $this->db->query('select max(ID_terpilih) from terpilih')

      $this->db->query("INSERT INTO `terpilih` (`ID_terpilih`, `ID_Registrasi`, `NIM`) VALUES ($VarA,$VarB, '1301180063');");
    }

    //menghapus pilihan sesuai dengan nama mata kuliah yang dipilih.
    public function drop(){
      $this->db->query("DELETE terpilih from terpilih INNER JOIN pilihan ON terpilih.ID_Registrasi=pilihan.ID_Registrasi INNER JOIN matakuliah ON pilihan.ID_Matkul=matakuliah.Mata_Kuliah WHERE matakuliah.Mata_Kuliah like 'kalkulus");
    }
}
