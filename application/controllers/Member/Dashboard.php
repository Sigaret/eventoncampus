<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Dashboard extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('m_event');
        if(empty($this->session->userdata('email'))){
            redirect('login');
        }
    }
 
	 
	public function index()
	{
		$data['user'] = $this->db->get_where('penyelenggara',['email'=>$this->session->userdata('email')])->row_array();	
        // echo base_url();        
        $dataE['data']=$this->m_event->data($this->session->userdata('id_py'));
        $dataT['datat'] = $this->m_event->datapendapatan($this->session->userdata('id_py'));
        $dataTJ['datatj'] = $this->m_event->datatiketterjual($this->session->userdata('id_py'));
        $x=$this->session->userdata('id_py');
        $query =  $this->db->query("SELECT * FROM pemesanan JOIN event ON pemesanan.id_event = event.id_event JOIN penyelenggara ON event.id_py = penyelenggara.id_py WHERE event.id_py = '$x' AND pemesanan.status = 1 ");
        $totp = $query->num_rows();

        $dataPB = array("pembeli"=>$totp);        
        
        $this->load->view('member/v_index',$data+$dataE+$dataT+$dataTJ+$dataPB);

	}	
}
