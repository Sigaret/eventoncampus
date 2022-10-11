<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Add_Event extends CI_Controller {
     
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_event');
        if(empty($this->session->userdata('email'))){
            redirect('not_member/login');
        }
    }


    public function index()
    {
        $dataU['user'] = $this->db->get_where('penyelenggara',['email'=>$this->session->userdata('email')])->row_array();  

        $config['upload_path'] = 'member(css)/poster/';
        // .jpg",".jpge","PNG"
        $config['allowed_types'] = 'jpg|jpeg|png|JFIF';
        $this->load->library('upload',$config); 
        $this->upload->initialize($config);

        $this->form_validation->set_rules('nama_event','nama_event','required');
        $this->form_validation->set_rules('tanggal','tanggal','required');    
        $this->form_validation->set_rules('waktu','tanggal','required');    
        $this->form_validation->set_rules('lokasi','tanggal','required');    
        $this->form_validation->set_rules('harga','harga','required');    
        $this->form_validation->set_rules('qty','qty','required');    

        
        
        if( $this->form_validation->run() == FALSE || !($this->upload->do_upload('file'))){                     
                $errors = $this->upload->display_errors(); 
                $data = array('er' => $errors);
                $this->load->view("member/v_buat_event",$dataU+$data);   
        }else{       
                // $tgl_up =date("Y-m-d-H-i-s");                                  
                $data= $this->upload->data();
                // var_dump ($data);
                extract($data);

                // $id_ser=$this->session->userdata('nama_org');
                // echo 'Id=',$id_ser;
                $x=$this->input->post('tanggal');
                $date = str_replace('/', '-', $x);
                $tanggal = date("Y-m-d", strtotime($date));
                
               $data = array(
                 "nama_event" => $this->input->post('nama_event',true),
                 "poster" => $file_name,
                 "type_event" => $this->input->post('type',true),
                 "id_py"      => $this->input->post('id_py',true),
                 "tanggal" => $tanggal,
                 "waktu" => $this->input->post('waktu',true),
                 "lokasi" => $this->input->post('lokasi',true),
                 "harga" => $this->input->post('harga',true),
                 "qty" => $this->input->post('qty',true),
                 "deksp"=> $this->input->post("deksp",true)
               );
                $this->m_event->tambah($data);                           
                $this->session->set_flashdata('message','<div class="alert alert-success shadow-lg" role="alert">
                Event Berhasil Di buat</div>' );
                 redirect('member/add_event','refresh');                            
        }        
        
    }	
}
