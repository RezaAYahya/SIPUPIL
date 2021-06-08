<?php
defined('BASEPATH') or exit('No direct script access allowed');

class forum_model extends CI_Model
{
    //Fungsi yang mengembalikan data yang row array
    public function loadingforum()
    {
      #melihat semua forum
      $query = $this->db->get('tb_forum');
      if ($query->num_rows() > 0) {
          return $query->result_array(); #return as array
      } else {
          return false;
      }
    }

    public function loadingforumbyID($forum_id)
    {
        #untuk meload semua forum sesuai pencarian ID
        $query = $this->db->where('forum_id', $forum_id)->get('tb_forum');
        if ($query->num_rows() > 0) {
            return $query->row_array(); #return as array
        } else {
            return false;
        }
    }

    public function getForumDataByPostID($data) #menagmbil data forum berdasarkan post ID
    {
        #mengembalikan isi forum dan data data yang melakukan forum
        $id = $data;
        $query = $this->db->where('ID_Forum', $id)->join('Mahasiswa', 'username')->get('forum');
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return 1;
        }
    }

    public function loadDatakomentarbyNIM($forum_id)
    {
        #ini dapet dari controller yang ngambil dari view
        #di view kasih php untuk add userdata
        #mengembalikan data-data yang komen dan isi komentar
        // $id_post = $forum_id;
        // $query = $this->db->where('forum_id', $id_post)->join('tb_dokter', 'usernamedok')->get('tb_komentar');
        // if ($query->num_rows() > 0) {
        //     return $query->result_array();
        // } else {
        //     return false;
        // }
    }
}
