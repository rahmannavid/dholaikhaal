<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class account extends CI_Controller {

    public function login()
    {
        
        $hdata['title']='Login-JDM Original';
        
        $this->load->model('category');
        $hdata['cat'] = $this->category->get_category();
        
        $this->load->view('common/header', $hdata);
        
        $this->load->helper(array('form'));
        $this->load->view('admin/login');
                
        $this->load->view('common/footer');
    }

    public function logout() {

        // Removing session data
        $sess_array = array(
        'username' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        
        $hdata['title']='Login-JDM Original';

        $this->load->model('category');
        $hdata['cat'] = $this->category->get_category();
        
        $this->load->view('common/header', $hdata);
        
        $data['message_display'] = 'Successfully Logout';
        $this->load->helper(array('form'));
        $this->load->view('admin/login', $data);
                
        $this->load->view('common/footer');
    }
    
    public function registration()
    {
        
        $hdata['title']='Registration-JDM Original';
        
        $this->load->model('category');
        $hdata['cat'] = $this->category->get_category();
        
        $this->load->view('common/header', $hdata);

        $this->load->view('admin/registration');
                
        $this->load->view('common/footer');
    }

    public function do_registration()
    {
        
        $hdata['title']='Registration-JDM Original';
        
        $this->load->model('category');
        $hdata['cat'] = $this->category->get_category();
        
        $this->load->view('common/header', $hdata);

        $this->load->view('admin/registration');
                
        $this->load->view('common/footer');
    }
   
}

?>