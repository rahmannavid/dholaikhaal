<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

    public function index()
    {
        if($this->session->userdata('logged_in'))
        {
          $hdata['title']='Admin-JDM Original';
          $this->load->view('admin/common/header', $hdata);
          $this->load->view('admin/orders');
          $this->load->view('admin/common/footer');
        }
        else
        {
          //If no session, redirect to login page
          redirect('/account/login', 'refresh');
        }
    }

    public function category()
    {
        if($this->session->userdata('logged_in'))
        {
            $hdata['title']='Admin-JDM Original';
            $this->load->view('admin/common/header', $hdata);

            $this->load->model('category');
            $data['cat'] = $this->category->get_category();
            $this->load->view('admin/category', $data);

            $this->load->view('admin/common/footer');
        }
        else
        {
          //If no session, redirect to login page
          redirect('/account/login', 'refresh');
        }
    }
   
}

?>