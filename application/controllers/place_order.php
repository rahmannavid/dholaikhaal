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

        $user_id = $this->input->post('input_id');
        $input_prod_id = $this->input->post('input_prod_id');
        $input_name = $this->input->post('input_name');
        $input_mobile = $this->input->post('input_mobile');
        $input_address = $this->input->post('input_address');
        $input_email = $this->input->post('input_email');
        $input_price = $this->input->post('input_price');
        
        
        $this->load->model('order');

        $user_type = $this->order->get_user_type($user_id);
        $data = array(
                'user_id' => $user_id,
                'input_prod_id' => $input_prod_id,
                'input_name' => $input_name,
                'input_mobile' => $input_mobile,
                'input_address' => $input_address,
                'input_email' => $input_email,
                'input_price' => $input_price,
                'input_type' => $user_type->type,
                'input_datetime' => date("Y-m-d H:i:s")               
            );

        $this->order->add_order($data);
       // redirect('/admin/products', 'refresh');

    }
    
}

?>