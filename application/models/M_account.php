<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class M_account extends CI_Model{

       function daftar($data)
       {
            $this->db->insert('users',$data);
       }

       function registration($data)
       {
       		$this->db->insert('participant',$data);
       }

       function alter($username)
       {
          $this->db->set('status', 1); 
          $this->db->where('username', $username); 
          $this->db->update('users');  
       }


  }