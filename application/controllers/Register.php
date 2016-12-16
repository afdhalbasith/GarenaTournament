<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Register extends CI_Controller {
     
     function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('m_account'); //call model
     }
 
     public function index() {
        if($this->session->userdata('valid_login') == 1 && $this->session->userdata('status')==1)
        {
            $pesan['message'] = "Tournament Registration success";
            $this->load->view('account/v_success',$pesan);
        }
        else if($this->session->userdata('valid_login') == 1 && $this->session->userdata('status')==0)
            {redirect(site_url('dashboard'));}
        else
        {
             $this->form_validation->set_rules('name', 'NAME','required|trim|callback_alpha_space');
             $this->form_validation->set_rules('email','EMAIL','required|trim|valid_email|is_unique[users.email]');
             $this->form_validation->set_rules('phone', 'PHONE','required|numeric|min_length[7]|max_length[14]');
             $this->form_validation->set_rules('username', 'USERNAME','required|is_unique[users.username]|trim|min_length[6]|max_length[15]|alpha_numeric');
             $this->form_validation->set_rules('password','PASSWORD','required|min_length[8]|max_length[16]|callback_customAlpha|matches[password_conf]');
             $this->form_validation->set_rules('password_conf','PASSWORD CONF','required|trim');
             $this->form_validation->set_rules('gender','GENDER','required|trim');
             $this->form_validation->set_rules('alamat','ADDRESS','required|trim');

             $this->form_validation->set_message('alpha_numeric', 'The %s field length must between 6-15 character and only alphabet and numeric are allowed');
             $this->form_validation->set_message('is_unique', '%s has already been registered');
             
             if($this->form_validation->run() == FALSE) {
                 $this->load->view('account/v_register');
             }else{
     
                 $data['nama']   =    $this->input->post('name');
                 $data['username'] =    $this->input->post('username');
                 $data['email']  =    $this->input->post('email');
                 $data['phone'] =       $this->input->post('phone');
                 $data['gender'] =       $this->input->post('gender');
                 $data['alamat'] =       $this->input->post('alamat');
                 $data['password'] =    md5($this->input->post('password'));
                 $data['status']    = 0;
     
                 $this->m_account->daftar($data);
                 
                 //$pesan['message'] =    "Pendaftaran berhasil";
                 //$this->load->view('account/v_success',$pesan);
                 $this->simple_login->reg_acc_succ();
             }
        }
     }

    function alpha_space($fullname)
    {
        if (! preg_match('/^[a-zA-Z\s]+$/', $fullname)) {
        $this->form_validation->set_message('alpha_space', 'The %s field may only contain alpha characters & White spaces');
        return FALSE;
        } else {
        return TRUE;
        }
    }

    public function customAlpha($str) 
    {
        if ( preg_match('/^[ .,\-]+$/i',$str) )
        {$this->form_validation->set_message('customAlpha', 'The %s field length must between 8-16 character and no whitespace are allowed');
            return false;}
        else{return true;}
    }

    public function reg_succ(){
         $this->simple_login->reg_acc_succ();
     }  
 }