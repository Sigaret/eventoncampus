<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Transaksi extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        // $this->load->model('m_home');
        if(empty($this->session->userdata('email'))){
            redirect('login');
        }
    }

    
	public function index()
	{
		$this->load->view('member/v_transaksi');
		// echo base_url();
	}	
}
