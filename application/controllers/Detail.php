<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Detail extends CI_Controller {
	
	function __construct()
    {
        parent::__construct(); 
        $this->load->model('m_event');        
    } 
    

	public function index()
	{
		$id=$this->uri->segment(3);
		$dataD['data']=$this->m_event->dataDed($id);
		$this->load->view('not_member/v_detail_event',$dataD);
		// echo base_url();
	}	
}
