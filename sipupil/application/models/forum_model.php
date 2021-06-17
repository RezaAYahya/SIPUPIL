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

    public function loadforumbyID($data){ #datanya ID dan ini untuk menampilkan forum tiap mata kuliah
        // echo $data;
        $query = $this->db->where('ID_forum',$data)->get('forum');
        if ($query->num_rows() > 0) {
            return $query->row_array(); #return as array
        }else {
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

    public function loadmatkul(){
        return $this->db->get('matakuliah')->result_array();
    }
    public function editforum($data){ //$data berisi Isi Forum, jangan lupa buat instansiasi di controller
        echo $data['ID_Forum'];
        // $this->db->where('ID_Forum',$data['ID_Forum']);
        // $this->db->set('Isi_Forum',$data['Isi_Forum']);
        // $this->db->update('Forum');
    }

    public function loadforumdosen($data){
        $this->db->select('forum');
        $this->db->join('matakuliah','ID_Matkul');
        $this->db->join('jadwalmatakuliah','ID_Matkul');
        $this->db->where('NIDN',$data['NIDN'])->get();
    }

    public function hapusforum($idforum){
        // $this->db->select('forum');
        // $this->db->where('ID_Forum',$idforum);
        $this->db->delete('Forum',array('ID_Forum' => $idforum));
    }
}
