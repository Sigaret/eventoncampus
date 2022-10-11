<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller {
	
	function __construct()
    {
        parent::__construct();
        $this->load->model('m_event');
    }

	public function index()
	{
		$dataE['data']=$this->m_event->dataAll();        
		$dataC['datac']=$this->m_event->dataCorusel();    
		$this->load->view('not_member/v_index',$dataE+$dataC);
		// echo base_url();
	}	
	
	public function xxxx()
	{
					$id=$this->uri->segment(3);	
					// var_dump($id);
					// die;
					$new_pass = 'assqwd123';
					$password_hash = password_hash($new_pass,PASSWORD_DEFAULT);

                    $this->db->set('password',$password_hash);
                    $this->db->where('id_py',$id);
                    if($this->db->update('penyelenggara')){
						echo ' berhasil';
					}else{
						echo 'gagal';
					}
	}	
	// public function cobabarcode(){
		
	// // This will output the barcode as HTML output to display in the browser
	// $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
	// echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode('081231723897', $generator::TYPE_CODE_128)) . '">';

	// }
}
