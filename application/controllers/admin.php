<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

    public function index()
    {
        /*
        $hdata['title']='Admin-JDM Original';
		//$this->load->view('welcome_message');
        $this->load->view('admin/common/header', $hdata);

        $this->load->view('admin/login');
                
        $this->load->view('admin/common/footer');
        */
        //redirect('/account/login', 'refresh');
        
        if($this->session->userdata('logged_in'))
        {
          //$session_data = $this->session->userdata('logged_in');
          //$data['username'] = $session_data['username'];
          //$this->load->view('index', $data);
          redirect('/');
        }
        else
        {
          //If no session, redirect to login page
          redirect('/account/login', 'refresh');
        }
    }
   
}

?>