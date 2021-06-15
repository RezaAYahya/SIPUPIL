<?php
defined('BASEPATH') or exit('No direct script access allowed');

class forum_model extends CI_Model
{
    //Fungsi yang mengembalikan data yang row array

    //parameter dari model ini yaitu id matkul terpilih
    public function loadavailableforums(){  #DONE
        $query = $this->db->get('forum');

        if ($query->num_rows() > 0) {
            return $query->result_array(); #return as array
        } else {
            return 1;
        }
                    
    }

    // public function buatforum($data){ #data berisi data NIM, ID_Matkul)
    //     $this->db->set('ID_Matkul',$data['ID_Matkul']);
    //     $this->db->set('Isi_Forum',$data['isi_forum']);
    //     $this->db->set('NIM',$data['NIM']);
    //     $this->db->insert('forum');
    // }

    public function buatforum2($data){ #data berisi data NIM, ID_Matkul)
        $this->db->insert('forum',$data);
    }


    public function editforum($data){ //$data berisi Isi Forum, jangan lupa buat instansiasi di controller
        $this->db->set('Isi_Forum',$data['Isi_Forum']);
        $this->db->update('Isi_Forum');
    }

    public function loadforumdosen($data){
        $this->db->select('forum');
        $this->db->join('matakuliah','ID_Matkul');
        $this->db->join('jadwalmatakuliah','ID_Matkul');
        $this->db->where('NIDN',$data['NIDN'])->get();
    }

    // public function load

    // public function loadingforumbyID($forum_id)
    // {
    //     #untuk meload semua forum sesuai pencarian ID
    //     $query = $this->db->where('forum_id', $forum_id)->get('tb_forum');
    //     if ($query->num_rows() > 0) {
    //         return $query->row_array(); #return as array
    //     } else {
    //         return false;
    //     }
    // }

    // public function getForumDataByPostID($data) #menagmbil data forum berdasarkan post ID
    // {
    //     #mengembalikan isi forum dan data data yang melakukan forum
    //     $id = $data;
    //     $query = $this->db->where('ID_Forum', $id)->join('Mahasiswa', 'username')->get('forum');
    //     if ($query->num_rows() > 0) {
    //         return $query->row_array();
    //     } else {
    //         return 1;
    //     }
    // }

    // public function loadDatakomentarbyNIM($forum_id)
    // {
    //     #ini dapet dari controller yang ngambil dari view
    //     #di view kasih php untuk add userdata
    //     #mengembalikan data-data yang komen dan isi komentar
    //     // $id_post = $forum_id;
    //     // $query = $this->db->where('forum_id', $id_post)->join('tb_dokter', 'usernamedok')->get('tb_komentar');
    //     // if ($query->num_rows() > 0) {
    //     //     return $query->result_array();
    //     // } else {
    //     //     return false;
    //     // }
    // }
}
