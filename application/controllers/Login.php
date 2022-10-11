<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');

	}
	 
	public function index()
	{
        if($this->session->userdata('email')){
            redirect('member/dashboard');
        }
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('password','Password','trim|required');

        if($this->form_validation->run() == false){
            $this->load->view('not_member/v_login');
        }else{
            $this->_cek();
        }
		
		// echo base_url();
    }
     
    private function _cek()
    {
        $email= $this->input->post('email');
        $password= $this->input->post('password');

        $user = $this->db->get_where('penyelenggara', ['email'=> $email])->row_array();
        
        if(!empty($user)){
            if(password_verify($password,$user['password'])){
                $data = array(
                    'id_py' => $user['id_py'],
                    'nama_org' => $user['nama_org'],
                    'email' => $user['email'],
                    'foto_prof' => $user['foto_prof'],
                );
                $this->session->set_userdata($data);
                redirect('member/dashboard');
            }else{
                $this->session->set_flashdata('great','<div class="alert alert-danger text-light" role="alert"> <i class="fas fa-exclamation-triangle"></i>
                 Wrong password !</div>');
                redirect('login');
            }            
        }else{
            $this->session->set_flashdata('great','<div class="alert alert-warning text-dark" role="alert"><i class="fas fa-exclamation-triangle"></i>
            Your email not registered</div>');
            redirect('login');
        }

    }

	public function registrasi()
	{
		if($this->session->userdata('email')){
			redirect('member/dashboard');
		}
		$this->load->view('not_member/v_registrasi');
		// echo base_url();
	}	

	public function auth()
    {
        $this->form_validation->set_rules('fullname','Full Name','required|trim');
        $this->form_validation->set_rules('emailreg','E-mail','required|trim|valid_email|is_unique[penyelenggara.email]',[
            'is_unique' => 'This E-mail has already used!'
        ]);
        $this->form_validation->set_rules('password1','Password','required|trim|min_length[8]|matches[password2]',[
            'matches' => 'Password dont match!',
            'min_lenght' => 'Password minimun 8 charater!'
        ]);
        $this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');

        if($this->form_validation->run() == FALSE){
            $this->load->view('not_member/v_registrasi');
        }else{
            $data = array(
                "nama_org" => $this->input->post('fullname',true),
                "email" => $this->input->post('emailreg',true),
                "password" => password_hash($this->input->post('password1',true),PASSWORD_DEFAULT),
                "foto_prof" => "default_prof.JPG"
            );
             $this->m_login->register($data);
             $this->session->set_flashdata('great','<div class="alert alert-success shadow-lg" role="alert">
             Hooray!! Your account has been registered!</div>');
             redirect('member/dashboard');
            
        }        
    }

    public function logout()
    {

        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('email');
        $this->session->sess_destroy();

        // $this->session->set_flashdata('great','<div class="alert alert-success shadow-lg" role="alert">
        // Logout !</div>');
        redirect('home','refresh');
    }
    

}
