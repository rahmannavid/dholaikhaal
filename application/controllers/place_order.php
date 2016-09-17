<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class place_order extends CI_Controller {

    public function form($id){
        if($this->session->userdata('logged_in'))
        {
            $this->load->model('category');
            $hdata['title']='Product-JDM Original';
            $hdata['cat'] = $this->category->get_category();
            //$this->load->view('welcome_message');
            $this->load->view('common/header', $hdata);
            
            $this->load->model('productm');
            $bdata['product'] = $this->productm->get_product_by_id($id);
            $bdata['productimg'] = $this->productm->get_product_first_image_by_id($id);
            
            $user_id = $this->session->userdata['logged_in']['id'];
            $this->load->model('user');
            $bdata['user'] = $this->user->get_user_by_id($user_id);

            $bdata['lastbid'] = '00';

            $this->load->view('place_order_view',$bdata);
            
            $this->load->view('common/footer');
        }
        else
        {
            redirect('/account/login', 'refresh');
        }
    }

    public function add_order(){

    }
    
}

?>