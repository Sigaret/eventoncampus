<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Order extends CI_Controller {
		

	function __construct()
    {
        parent::__construct(); 
        $this->load->model('m_event');        
    } 
    
	public function index()
	{ 	
		$stat = FALSE;
		$id=$this->uri->segment(3);		
		$id_py=$this->uri->segment(4);
		$temp_qty = $this->input->post('qty');
		$dataE['vent'] = $this->db->get_where('event',['id_event'=>$id])->row_array();  

		// echo $dataE['vent']['harga'];
		// die;
		$harga = $dataE['vent']['harga'];
		$jumlah = $temp_qty * $harga;		
		$dataD['data']=$this->m_event->dataDed($id);
		$dataB['datab']=$this->m_event->databb($id_py);	
		
		$dataO = array("qty"=>$temp_qty,"harga"=>$harga,"jumlah"=>$jumlah);				

		$this->form_validation->set_rules('nama_lkp','Nama Lenkap','required');
        $this->form_validation->set_rules('email','Email','required');    
		$this->form_validation->set_rules('nowa','No Whatsapp','required');    
		$this->form_validation->set_rules('options','Pembayaran','required');    
		
		if( $this->form_validation->run() == FALSE){
			$errors = $this->upload->display_errors(); 
			$data = array('er' => $errors);							
								
			$this->load->view('not_member/v_order',$dataD+$dataB+$dataO+$data);
			// echo base_url();		 			
		}else{

			$kode_pemes = random_string('basic', 16);
			$id_bank=$this->input->post('options');	
			$qty_b =$this->input->post('qty',true)	;
			$data = array(
				"kode_pemesanan" => $kode_pemes ,                 				
				"id_event"      => $id,                 
				"nama_pemesan" => $this->input->post('nama_lkp',true),
				"email" => $this->input->post('email',true),
				"no_wa" => $this->input->post('nowa',true),
				"qty_tiket" => $qty_b,
				"total" => $this->input->post('jumlah',true),
				"status" => '0'
			  );						
			$this->transaksi($id,$id_py,$kode_pemes,$id_bank,$data,$qty_b);
		}	
	}

	public function transaksi($id,$id_py,$kode_pemes,$id_bank,$data,$qty_b){
				
		$this->m_event->pemesanan($data);				  
		// $this->m_event->decqyt($id,$qty_b);
		// redirect('welcome/sendVerificatinEmail/'.$name.'/'.$email.'/'.$request_tracking_no);
		redirect('order/invoice/'.$id.'/'.$id_py.'/'.$kode_pemes.'/'.$id_bank);			
	}

	public function invoice($id,$id_py,$kode_pemes,$id_bank){
		
		$dataP['datap']=$this->m_event->datapp($id, $kode_pemes);
		$dataB['datab']=$this->m_event->datapbb($id_py,$id_bank);
		$dataM['mail'] = $this->db->get_where('pemesanan',['kode_pemesanan'=>$kode_pemes])->row_array();	

		$email_user = $dataM['mail']['email'];		
				
		$this->load->view('not_member/v_invoice',$dataP+$dataB);
		// $this->load->view('email/order_stat', $dataB+$dataP);
		$this->sendmail($dataP,$dataB,$email_user);
		
	}

	public function sendmail($dataP,$dataB,$email_user){
			  // Konfigurasi email			  
			  
			  $config = [
				'mailtype'  => 'html',
				'charset'   => 'utf-8',
				'protocol'  => 'smtp',
				'smtp_host' => 'smtp.gmail.com',
				'smtp_user' => 'eventoncampus@gmail.com',  // Email gmail
				'smtp_pass'   => 'assqwd123',  // Password gmail
				'smtp_crypto' => 'ssl',
				'smtp_port'   => 465,
				'crlf'    => "\r\n",
				'newline' => "\r\n"
			];
			// $thi->dataP['datap'] = $dataP;
			// $thi->dataB['datab'] = $dataB;
			$message = $this->load->view('email/order_stat',$dataB+$dataP,TRUE);
			// Load library email dan konfigurasinya
			$this->load->library('email', $config);
			$this->email->initialize($config);
	
			// Email dan nama pengirim
			$this->email->from('no-reply@eventoncampus.com', 'Event On Campus');
	
			// Email penerima
			$this->email->to($email_user); // Ganti dengan email tujuan
	 
			// Lampiran email, isi dengan url/path file
			$this->email->attach('not_member(css)/email/maill.png');
	
			// Subject email
			$this->email->subject('Menunggu Pembayaran Anda');
	
			// Isi email
			$this->email->message($message );
			$this->email->set_mailtype('html');
	
			// Tampilkan pesan sukses atau error
			if ($this->email->send()) {
				echo 'Sukses! email berhasil dikirim.';
			} else {
				// $errorMessage = error_get_last()['message'];
				// echo $errorMessage ;
				echo 'Gagal! email gagal dikirim.';
			}
	}
}
