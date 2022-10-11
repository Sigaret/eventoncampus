<?php

class M_search extends CI_Model{

 
public function cari()
    {
        $search = $this->input->GET('search', TRUE);
        // $data = $this->db->query("SELECT * from tberkas where judul_b like '%$search%'");
        // return $data->result();

        $data=$this->db->select('*')
        ->from('event')
        ->join('penyelenggara','event.id_py=penyelenggara.id_py')        
        ->like('event.nama_event',$search)
        ->or_like('event.type_event',$search)
        ->or_like('penyelenggara.nama_org',$search)
        ->where('qty >',0)
        ->get()
        ->result();
        return $data;  

    }    
}
