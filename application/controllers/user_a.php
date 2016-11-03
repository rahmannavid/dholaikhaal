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

    public function user_info_update()
    {
        if($this->session->userdata('logged_in'))
        {
                $user_id = $this->session->userdata['logged_in']['id'];
                $this->load->model('category');
                $hdata['cat'] = $this->category->get_category();
                $hdata['title']='JDM Original';
                $this->load->view('common/header', $hdata);
                
                $this->load->model('user');
                $data['user'] = $this->user->get_user_by_id($user_id);
            
                $this->load->view('update_info',$data);
                $this->load->view('common/footer');
            
                   
        }
        else
        {
          //If no session, redirect to login page
          redirect('/account/login', 'refresh');
        }
    }

    public function user_info_update_proc()
    {
        $input_id = $this->input->post('user_id');
        $input_name = $this->input->post('inputName');
        $input_mobile = $this->input->post('inputMobNo');
        $input_email = $this->input->post('inputEmail');
        $input_password = $this->input->post('inputConfPassword');
        $input_address = $this->input->post('inputAddress');

        $this->load->model('user');
        
        $data = array(
                'input_id' => $input_id,
                'input_name' => $input_name,
                'input_mobile' => $input_mobile,
                'input_email' => $input_email,
                'input_password' => $input_password,
                'input_address' => $input_address
                
            );
        
        $this->user->update_user($data);
        redirect('/user_a/user_info_update', 'refresh');
        
    }
  
}
