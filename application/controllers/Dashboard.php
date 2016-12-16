<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Dashboard extends CI_Controller {
     function __construct(){
         parent::__construct();
         $this->simple_login->cek_login();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('m_account');
     }
 
     //Load Halaman dashboard
     public function index() {
     	 $ambil_status = ($this->session->userdata('status'));
         $this->session->set_userdata ( 'valid_login', 1 );

     	 if($ambil_status == 0)
     	 {
	     	 $this->form_validation->set_rules('teamname', 'TEAM NAME','required|trim|is_unique[participant.teamname]|callback_alpha_number_under');
	         $this->form_validation->set_rules('name1','NAME','required|trim|callback_alpha_space');
	         $this->form_validation->set_rules('phone1', 'PHONE','required|numeric|min_length[7]|max_length[14]');
	         $this->form_validation->set_rules('name2','NAME','required|trim|callback_alpha_space');
	         $this->form_validation->set_rules('phone2', 'PHONE','required|numeric');
             $this->form_validation->set_rules('gender1', 'GENDER','required');
             $this->form_validation->set_rules('gender2', 'GENDER','required');
 
	         $this->form_validation->set_message('is_unique', '%s has already been registered');
	         
	         if($this->form_validation->run() == FALSE) {
	             $this->load->view('account/v_dashboard');
	         }else{
	 			 $data['teamname']	= $this->input->post('teamname');
	             $data['name1']   =    $this->input->post('name1');
	             $data['phone1'] =    $this->input->post('phone1');
	             $data['gender1']	= $this->input->post('gender1');
	             $data['name2']   =    $this->input->post('name2');
	             $data['phone2'] =    $this->input->post('phone2');
	             $data['gender2']	= $this->input->post('gender2');
	             $data['username']  = $this->input->post('username');
	             $this->m_account->registration($data);

	             $this->m_account->alter($this->session->userdata('username'));
	             
	             $pesan['message'] = "Tournament Registration success";
                 //$this->session->set_userdata ( 'status', 1 );
	             $this->load->view('account/v_success',$pesan);
	         }
	     }
	     else if($ambil_status == 1 && $this->session->userdata('valid_login') == 1) //status = udah daftar lomba && valid_login = udah login
	     {
	     	$pesan['message'] = "Tournament Registration success";
	        $this->load->view('account/v_success',$pesan);
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

     function alpha_number_under($fullname){
    if (! preg_match('/^[a-zA-Z0-9_]+$/', $fullname))
     {
        $this->form_validation->set_message('alpha_number_under', 'The %s field may only alphabet, numeric and _');
        return FALSE;
        } else {
        return TRUE;
        }
    }
 }