<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 /*
  * Simple_login Class
  * Class ini digunakan untuk fitur login, proteksi halaman dan logout
  * @author  Gun Gun Priatna
  * @url    https://recodeku.blogspot.com
  */
 
 class Simple_login {
 
     // SET SUPER GLOBAL
     var $CI = NULL;
 
     /**
      * Class constructor
      *
      * @return   void
      */
     public function __construct() {
         $this->CI =& get_instance();
     }
 
     /*
     * cek username dan password pada table users, jika ada set session berdasar data user dari
     * table users.
     * @param string username dari input form
     * @param string password dari input form
     */
     public function login($username, $password) {
         
         //cek username dan password
         $query = $this->CI->db->get_where('users',array('username'=>$username,'password' => md5($password)));
 
         if($query->num_rows() == 1) {
             //ambil data user berdasar username
             $row  = $this->CI->db->query('SELECT id_user,nama,email,phone,status,gender FROM users where username = "'.$username.'"');
             $admin     = $row->row();
             $id   = $admin->id_user;
 
             $nama   = $admin->nama;
             $email   = $admin->email;
             $phone = $admin->phone;
             $status = $admin->status;
             $gender = $admin->gender;

             //set session user
             $this->CI->session->set_userdata('username', $username);
             $this->CI->session->set_userdata('nama', $nama);
             $this->CI->session->set_userdata('email', $email);
             $this->CI->session->set_userdata('phone', $phone);
             $this->CI->session->set_userdata('gender', $gender);
             $this->CI->session->set_userdata('id_login', uniqid(rand()));
             $this->CI->session->set_userdata('id', $id);
             $this->CI->session->set_userdata('status',$status);

             //redirect ke halaman dashboard
             redirect(site_url('dashboard'));
         }else{
 
             //jika tidak ada, set notifikasi dalam flashdata.
             $this->CI->session->set_flashdata('sukses','Username atau password anda salah, silakan coba lagi.. ');
 
             //redirect ke halaman login
             redirect(site_url('login'));
         }
          return false;
      }
     
     /**
      * Cek session login, jika tidak ada, set notifikasi dalam flashdata, lalu dialihkan ke halaman
      * login
      */
     public function cek_login() {
 
         //cek session username
         $flag = ($this->CI->session->userdata('username') == '') ? true : false;
         if($flag == true) {
 
             //set notifikasi
             $this->CI->session->set_flashdata('sukses','Anda belum login');
 
             //alihkan ke halaman login
             redirect(site_url('login'));
         }
     }
 
     /**
      * Hapus session, lalu set notifikasi kemudian di alihkan
      * ke halaman login
      */
     public function logout() {
         $this->CI->session->unset_userdata('username');
         $this->CI->session->unset_userdata('id_login');
         $this->CI->session->unset_userdata('id');
         $this->CI->session->unset_userdata('nama');
         $this->CI->session->unset_userdata('email');
         $this->CI->session->unset_userdata('gender');
         $this->CI->session->unset_userdata('phone');
         $this->CI->session->unset_userdata('status');
         $this->CI->session->unset_userdata('valid_login');

         $this->CI->session->set_flashdata('sukses','Anda berhasil logout');
         redirect(site_url('login'));
     }

     public function reg_acc_succ() {
         $this->CI->session->set_flashdata('sukses','Resitrasi Akun Berhasil');
         redirect(('login'));
     }
 }