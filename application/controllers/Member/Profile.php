\<?php
    defined('BASEPATH') or exit('No direct script access allowed');


    class Profile extends CI_Controller
    {

        function __construct()
        {
            parent::__construct();
            $this->load->model('m_bank');
            if (empty($this->session->userdata('email'))) {
                redirect('login');
            }
        }


        public function profilefull()
        {
            $dataU['user'] = $this->db->get_where('penyelenggara', ['email' => $this->session->userdata('email')])->row_array();
            $this->form_validation->set_rules('nama_org', 'Nama Organisasi', 'required');
            $this->form_validation->set_rules('nama_univ', 'Nama Organisasi', 'required');
            $this->form_validation->set_rules('no_wa', 'No Whatsapp', 'required');

            if ($this->form_validation->run() == FALSE) {
                $errors = $this->upload->display_errors();
                $data = array('er' => $errors);
                $this->load->view('member/v_profile', $data + $dataU);
            } else {
                $nama_org = $this->input->post('nama_org', true);
                $nama_univ = $this->input->post('nama_univ', true);
                $ig = $this->input->post('ig', true);
                $line = $this->input->post('line', true);
                $no_wa = $this->input->post('no_wa', true);
                $deks = $this->input->post('deks', true);

                $upload_image = $_FILES['image']['name'];
                // var_dump($upload_image);
                // die;

                if ($upload_image) {

                    $config['upload_path'] = './member(css)/profile/';
                    $config['allowed_types'] = 'gif|jpg|png|jpge';
                    $config['max_size']     = '2048';

                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);

                    if ($this->upload->do_upload('image')) {
                        $old_image = $dataU['user']['foto_prof'];
                        if ($old_image != 'default_prof.JPG') {
                            unlink(FCPATH . './member(css)/profile/' . $old_image);
                            // echo 'gagal';
                            // die;
                        }
                        $new_image = $this->upload->data('file_name');
                        $this->db->set('foto_prof', $new_image);
                    } else {
                        echo $this->upload->display_errors();
                    }
                }

                $this->db->set('nama_org', $nama_org);
                $this->db->set('nama_kampus', $nama_univ);
                $this->db->set('instagram', $ig);
                $this->db->set('line', $line);
                $this->db->set('wa', $no_wa);
                $this->db->set('deks', $deks);

                $this->db->where('id_py', $this->session->userdata('id_py'));
                $this->db->update('penyelenggara');
                $this->session->set_flashdata('message', '<div class="alert alert-success shadow-lg" role="alert">
            Data Telah Di Update!</div>');
                redirect('member/profile/profilefull');
            }
        }

        public function akunbank()
        {
            $dataU['user'] = $this->db->get_where('penyelenggara', ['email' => $this->session->userdata('email')])->row_array();

            $this->form_validation->set_rules('nama', 'nama', 'required');
            $this->form_validation->set_rules('bank', 'bank', 'required');
            $this->form_validation->set_rules('no_rek', 'no_rek', 'required');
            $this->form_validation->set_rules('cabang', 'cabang', 'required');
            $this->form_validation->set_rules('kota', 'kota', 'required');



            if ($this->form_validation->run() == FALSE) {
                $errors = $this->upload->display_errors();
                $data = array('er' => $errors);
                $this->load->view("member/v_accountbank", $dataU + $data);
            } else {
                // $tgl_up =date("Y-m-d-H-i-s");                                  
                // $data= $this->upload->data();
                // // var_dump ($data);
                // extract($data);

                $id_ser = $this->session->userdata('id_py');
                // echo 'Id=',$id_ser;


                $data = array(
                    "atas_nama" => $this->input->post('nama', true),
                    "nama_bank" => $this->input->post('bank', true),
                    "id_py"      => $id_ser,
                    "no_rek" => $this->input->post('no_rek', true),
                    "kantor_cabang" => $this->input->post('cabang', true),
                    "kota" => $this->input->post('kota', true)
                );
                $this->m_bank->tambah($data);
                $this->session->set_flashdata('message', '<div class="alert alert-success shadow-lg" role="alert">
                Rekening Bank Telah Di Tambahkan</div>');
                redirect('member/profile/akunbank', 'refresh');
            }
        }

        public function ubahpass()
        {
            $data['user'] = $this->db->get_where('penyelenggara', ['email' => $this->session->userdata('email')])->row_array();

            $this->form_validation->set_rules('cuurent_password', 'cuurent_password', 'required|trim');
            // $this->form_validation->set_rules('new_password1','new_password1','required|trim|minimal_lenght[3]|matches[new_password2]');
            // $this->form_validation->set_rules('new_password2','new_password2','required|trim|minimal_lenght[3]|matches[new_password1]');

            $this->form_validation->set_rules('new_password1', 'Password', 'required|trim|min_length[8]|matches[new_password2]', [
                'matches' => 'Password dont match!',
                'min_lenght' => 'Password minimun 8 charater!'
            ]);
            $this->form_validation->set_rules('new_password2', 'Password', 'required|trim|matches[new_password1]');

            if ($this->form_validation->run() == false) {
                $this->load->view('member/v_ubah_password', $data);
            } else {
                $current_pass = $this->input->post('cuurent_password');
                $new_pass = $this->input->post('new_password1');
                if (!password_verify($current_pass, $data['user']['password'])) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger shadow-lg" role="alert">
                Password Lama Salah</div>');
                    redirect('member/profile/ubahpass');
                } else {
                    if ($current_pass == $new_pass) {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger shadow-lg" role="alert">
                    Password Lama Dengan Yang Baru Tidak Boleh Sama !</div>');
                        redirect('member/profile/ubahpass');
                    } else {
                        $password_hash = password_hash($new_pass, PASSWORD_DEFAULT);

                        $this->db->set('password', $password_hash);
                        $this->db->where('id_py', $this->session->userdata('id_py'));
                        $this->db->update('penyelenggara');
                        $this->session->set_flashdata('message', '<div class="alert alert-success shadow-lg" role="alert">
                    Password Telah Di Ubah!</div>');
                        redirect('member/profile/ubahpass');
                    }
                }
            }
        }
    }
