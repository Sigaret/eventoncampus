<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_event extends CI_Model  {
    
   

    public function data($id)
    {
        $us=$this->db->select('*')
                 ->from('event')
                 ->join('penyelenggara','event.id_py=penyelenggara.id_py')
                //  ->join('tuser','tberkas.id_user=tuser.id_user')
                 ->where('event.id_py',$id)
                 ->order_by('id_event','DESC')
                //  ->limit(12)
                 ->get()
                 ->result();
        return $us;
    }
    
    public function databb($id)
    {
        $us=$this->db->select('*')
                 ->from('bank')
                 ->join('penyelenggara','bank.id_py=penyelenggara.id_py')
                //  ->join('tuser','tberkas.id_user=tuser.id_user')
                 ->where('bank.id_py',$id)                 
                //  ->limit(12)
                 ->get()
                 ->result();
        return $us;
    }

    public function dataAll()
    {
        $us=$this->db->select('*')
                 ->from('event')
                 ->join('penyelenggara','event.id_py=penyelenggara.id_py')
                //  ->join('tuser','tberkas.id_user=tuser.id_user')
                 ->where('qty >',0)
                 ->order_by('id_event','DESC')
                //  ->limit(12)
                 ->get()
                 ->result();
        return $us;
    }
    
    public function dataCorusel()
    {
        $us=$this->db->select('*')
                 ->from('event')
                //  ->join('penyelenggara','event.id_py=penyelenggara.id_py')
                //  ->join('tuser','tberkas.id_user=tuser.id_user')
                 ->order_by('id_event','DESC')
                 ->limit(3)
                 ->get()
                 ->result();
        return $us;
    }

    public function dataDed($id){
        $u = $this->db->select('*')
                    ->from('event')
                    ->join('penyelenggara','event.id_py=penyelenggara.id_py')                    
                    ->where('event.id_event',$id)
                    ->get()
                    ->result();
        return $u;          
    }

    public function datapp($id,$kode_pemes){
        $u = $this->db->select('*')
                    ->from('pemesanan')
                    ->join('event','pemesanan.id_event = event.id_event') 
                    ->join('penyelenggara','event.id_py = penyelenggara.id_py')
                    ->where('pemesanan.kode_pemesanan',$kode_pemes)
                    ->get()
                    ->result();
        return $u;          
    }

    public function datapbb($id,$id_bank)
    {
        $us=$this->db->select('*')
                 ->from('bank')
                 ->join('penyelenggara','bank.id_py=penyelenggara.id_py')
                 ->where('bank.id_bank',$id_bank)                 
                 ->where('bank.id_py',$id)                 
                //  ->limit(12)
                 ->get()
                 ->result();
        return $us;
    }


    public function tambah($data){
   
        // var_dump ($data)  ;
        // $data = array(
        //     "judul_b" => $this->input->post('judul',true),
        //     "abstrak" => $this->input->post('abstrak',true),
        //     "file" => $file,
        //     "id_kategori" => $this->input->post('kategori',true)
        // );
    //    echo "oke" ; 
        $this->db->insert('event',$data);
        
    }

    public function decqyt($id,$totqty){

        $this->db->where('id_event', $id);
        $this->db->select('qty');
        $count = $this->db->get('event')->row();
        $this->db->where('id_event',$id);
        // $tot=$count->qty - $totqty;
        // echo $tot;
        $this->db->set('qty', ($count->qty - $totqty));
    
        $this->db->update('event');
    }

    public function pemesanan($data){
        $this->db->insert('pemesanan',$data);
    }

    public function datapemesan($id_py){
        $us=$this->db->select('*')
                ->from('pemesanan')
                ->join('event','pemesanan.id_event = event.id_event') 
                ->join('penyelenggara','event.id_py = penyelenggara.id_py')
                ->where('event.id_py',$id_py)                
                ->order_by('pemesanan.status','ASC')
                ->get()
                ->result();
            return $us;
        }

    public function datapendapatan($id){
        $x = $this->db->select_sum('total')
                       ->from('pemesanan')
                       ->join('event','pemesanan.id_event = event.id_event') 
                       ->join('penyelenggara','event.id_py = penyelenggara.id_py')
                       ->where('event.id_py',$id)   
                       ->get()
                       ->result();
        
        return $x;        
    }

    public function datatiketterjual($id){
        $x = $this->db->select_sum('qty_tiket')
                       ->from('pemesanan')
                       ->join('event','pemesanan.id_event = event.id_event') 
                       ->join('penyelenggara','event.id_py = penyelenggara.id_py')
                       ->where('event.id_py',$id)   
                       ->get()
                       ->result();
        
        return $x;
    }

    // public function datapemebeli($id){
    //     $x = $this->db->select('*')
    //                    ->from('pemesanan')
    //                    ->join('event','pemesanan.id_event = event.id_event') 
    //                    ->join('penyelenggara','event.id_py = penyelenggara.id_py')
    //                    ->where('event.id_py',$id)   
    //                    ->get()
    //                    ->result();        
    //     return $x;
    // }    



}