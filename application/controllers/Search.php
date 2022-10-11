<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Search extends CI_Controller {
	 
	function __construct()
    {
        parent::__construct();
        $this->load->model('m_search');
    }

	public function index()
	{
		$this->load->view('not_member/v_search');
		// echo base_url();
	}	

	public function hasil()
    {
        $data2['result']= $this->m_search->cari();
        $this->load->view('not_member/v_search',$data2);
    }

}
