<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auction extends CI_Controller {

    public function index()
    {
        $this->load->model('category');
        $hdata['title']='Product-JDM Original';
        $hdata['cat'] = $this->category->get_category();
		//$this->load->view('welcome_message');
        $this->load->view('common/header', $hdata);
        
        $this->load->model('productm');
        $bdata['products'] = $this->productm->get_all_product_by_auction(0, 20);
        
        $this->load->view('product_list',$bdata);
                
        $this->load->view('common/footer');
    }
   
}

?>