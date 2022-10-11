<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Pemesanan extends CI_Controller {
    
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
        $dataE['data']=$this->m_event->datapemesan($this->session->userdata('id_py'));
		$this->load->view('member/v_data_pemesan',$data+$dataE);
		// echo base_url();
    }
    
    public function stat_aktif()
    {
        $kode_pp=$this->uri->segment(4);
        
        $dataM['pemes'] = $this->db->get_where('pemesanan',['kode_pemesanan'=>$kode_pp])->row_array();

        // var_dump($dataP);
        // die;
        $id_event = $dataM['pemes']['id_event'];		
        $qty = $dataM['pemes']['qty_tiket'];	
        $email = $dataM['pemes']['email'];	

        $this->db->set('status','1');
        $this->db->where('kode_pemesanan',$kode_pp);
        $this->db->update('pemesanan');

        $this->m_event->decqyt($id_event,$qty);

        $dataP['datap']=$this->m_event->datapp($id_event, $kode_pp);              
        // $this->load->view('email/invoice',$dataP);
        $this->sendmail($dataP,$email);
        
    }

    public function sendmail($dataP,$email_user){
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
      $message = $this->load->view('email/invoice',$dataP,TRUE);
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
      $this->email->subject('Bukti Transaksi/e-Ticket');

      // Isi email
      $this->email->message($message );
      $this->email->set_mailtype('html');

      // Tampilkan pesan sukses atau error
      if ($this->email->send()) {        
        $this->session->set_flashdata('message','<div class="alert alert-success shadow-lg" role="alert">
        Pemesenan Berhasil Di komfirmasi dan Bukti Pembayran / e-tiket sudah di kirim melalui e-mail</div>' );
      } else {
        $this->session->set_flashdata('message','<div class="alert alert-warning shadow-lg" role="alert">
        Pemesenan Gagal Di komfirmasi </div>' );
      }
      redirect('member/pemesanan');

}
    
}
