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
            $this->load->view('admin/admin_category_view', $data);

            $this->load->view('admin/common/footer');
        }
        else
        {
          //If no session, redirect to login page
          redirect('/account/login', 'refresh');
        }
    }

     public function products()
    {
        if($this->session->userdata('logged_in'))
        {
            $hdata['title']='Admin-JDM Original';
            $this->load->view('admin/common/header', $hdata);

            $input_name = $this->input->post('input_name');
            $input_description = $this->input->post('input_description');
            $input_price = $this->input->post('input_price');
            $input_condition = $this->input->post('input_condition');
            $input_quantity = $this->input->post('input_quantity');
            $input_brand = $this->input->post('input_brand');
            $input_country_manufacture = $this->input->post('input_country_manufacture');
            
            $this->load->model('products_model');
            
            $data = array(
                    'input_name' => $input_name,
                    'input_description' => $input_description,
                    'input_price' => $input_price,
                    'input_condition' => $input_condition,
                    'input_quantity' => $input_quantity,
                    'input_brand' => $input_brand,
                    'input_country_manufacture' => $input_country_manufacture
                );

            $this->products_model->get_products($data);
            $this->load->view('admin/admin_product_view');
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