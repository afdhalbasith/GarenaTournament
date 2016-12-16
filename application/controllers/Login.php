<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Login extends CI_Controller {
    
     public function index() {
        $valid_login = $this->session->userdata ( 'valid_login' );
        if($valid_login ==1)
         { redirect(site_url('dashboard'));     //$this->load->view('account/v_dashboard');
         }
        else{
             // Fungsi Login
             $valid = $this->form_validation;
             $username = $this->input->post('username');
             $password = $this->input->post('password');
             $valid->set_rules('username','Username','required');
             $valid->set_rules('password','Password','required');
     
             if($valid->run()) {
                 $this->simple_login->login($username,$password, base_url('dashboard'), base_url('login'));
             }
             // End fungsi login
             $this->load->view('account/v_login');
         }

     }
 
     public function logout(){
        $this->session->unset_userdata('valid_login');
         $this->simple_login->logout();
     }        
 }