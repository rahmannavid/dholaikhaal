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
            redirect('/account/login?message=Please login first to make an order.', 'refresh');
        }
    }

    public function add_order(){

        $user_id = $this->input->post('input_id');
        $input_prod_id = $this->input->post('input_prod_id');
        $input_name = $this->input->post('input_name_user');
        $input_mobile = $this->input->post('input_mobile');
        $input_address = $this->input->post('input_address');
        $input_email = $this->input->post('input_email');
        $input_price = $this->input->post('input_price');
        
        
        $this->load->model('order');

        $user_type = $this->order->get_user_type($user_id);
        $data = array(
                'user_id' => $user_id,
                'input_prod_id' => $input_prod_id,
                'input_name_user' => $input_name,
                'input_mobile' => $input_mobile,
                'input_address' => $input_address,
                'input_email' => $input_email,
                'input_price' => $input_price,
                'input_type' => $user_type->type,
                'input_datetime' => date("Y-m-d H:i:s")               
            );

        $this->order->add_order($data);
        redirect('/place_order/order_list', 'refresh');

    }

    public function select_status (){

        if($this->session->userdata('logged_in'))
        {    
            $this->load->model('order');
            $user_id = $this->session->userdata['logged_in']['id'];
            $user_type = $this->order->get_user_type($user_id);

            if ($user_type->type ==1){

                 $hdata['title']='Admin-JDM Original';
                 $this->load->view('admin/common/header', $hdata);
            
                 $status = $this->input->post('input_condition_status');
                 $data['order_list'] =  $this->order->status_list($status);
                
                 $this->load->view('admin/admin_order_list_view',$data);
                 $this->load->view('admin/common/footer');
            } 
            else {
                 $hdata['title']='Admin-JDM Original';
                 $this->load->view('common/header', $hdata);
                 
                 $data['order_list'] = $this->order->get_order_list_by_id($user_id);

                 $this->load->view('user_order_list_view',$data);
                 $this->load->view('common/footer');
            }
                   
        }
        else
        {
          //If no session, redirect to login page
          redirect('/account/login', 'refresh');
        } 

      
    }
     public function update_order(){

        $order_id = $this->input->post('order_id');
        $status = $this->input->post('input_condition');
        $description = $this->input->post('input_description');
        
        $data = array(
                'input_condition' => $status,
                'input_description' => $description              
            );
        $this->load->model('order');
        $this->order->update_order($data,$order_id);
        redirect('/place_order/order_list', 'refresh');

    }

     public function order_list(){

       if($this->session->userdata('logged_in'))
        {        
            $this->load->model('order');
            $user_id = $this->session->userdata['logged_in']['id'];
            $user_type = $this->order->get_user_type($user_id);

            if ($user_type->type ==1){

                $hdata['title']='Admin-JDM Original';
                $this->load->view('admin/common/header', $hdata);
            
                $data['order_list'] = $this->order->get_order_list();
                         
                $this->load->view('admin/admin_order_list_view',$data);
                $this->load->view('admin/common/footer');
            } 
            else {
                 $hdata['title']='Admin-JDM Original';
                 $this->load->view('admin/common/header', $hdata);
                 
                 $data['order_list'] = $this->order->get_order_list_by_id($user_id);

                 $this->load->view('user_order_list_view',$data);
                 $this->load->view('admin/common/footer');
            }

           
        }
        else
        {
          //If no session, redirect to login page
          redirect('/account/login', 'refresh');
        } 

    }
    
}

?>