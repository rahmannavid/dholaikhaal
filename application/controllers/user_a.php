<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_a extends CI_Controller {
   
    public function user_list()
    {
        if($this->session->userdata('logged_in'))
        {        
                 $hdata['title']='Admin-JDM Original';
                 $this->load->view('admin/common/header', $hdata);
                 
                 $this->load->model('user');
                 $data['user'] = $this->user->get_all_user();
                
                 $this->load->view('admin/admin_user_list_view',$data);
                 $this->load->view('admin/common/footer');
            
                   
        }
        else
        {
          //If no session, redirect to login page
          redirect('/account/login', 'refresh');
        }
    }
  
}
