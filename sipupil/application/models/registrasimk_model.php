<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mahasiswa_model extends CI_Model
{
    public function getpilihan($data)
    {
        //dari tb_member karena sudah ada pemilihan menu dari awal
        $NIM = $this->db->where("NIM", $data['NIM'])->get("pilihan");
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }
}
