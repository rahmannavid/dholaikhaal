<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {

	public function index($id)
	{
        $this->load->model('category');
        $hdata['title']='Product-JDM Original';
        $hdata['cat'] = $this->category->get_category();
		//$this->load->view('welcome_message');
        $this->load->view('common/header', $hdata);
        
        $this->load->model('productm');
        $bdata['product'] = $this->productm->get_product_by_id($id);
        $bdata['productimg'] = $this->productm->get_product_image_by_id($id);
        
        $this->load->view('product',$bdata);
        
        
        
        $this->load->view('common/footer');
	}
    
    public function category($cat_id)
    {
        $this->load->model('category');
        $hdata['title']='Product-JDM Original';
        $hdata['cat'] = $this->category->get_category();
		//$this->load->view('welcome_message');
        $this->load->view('common/header', $hdata);
        
        $this->load->model('productm');
        $bdata['products'] = $this->productm->get_all_product_by_cat($cat_id, 0, 20);
        
        $this->load->view('product_list',$bdata);
                
        $this->load->view('common/footer');
    }
  
    
}
