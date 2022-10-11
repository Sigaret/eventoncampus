<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
    
    public function register($data)
    {
        $this->db->insert('penyelenggara',$data);
    }

    

}