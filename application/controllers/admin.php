<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
    function __construct() {
        parent::__construct();
        $session_data = $this->session->userdata('logged_in');
        $type = $session_data['user_type'];
        
        if($type == 0){
            redirect('/', 'refresh');
        }
    }

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
            
            $this->load->model('category');
            $data['cat'] = $this->category->get_category();

            $this->load->view('admin/admin_product_view', $data);
            $this->load->view('admin/common/footer');
           
        }
        else
        {
          //If no session, redirect to login page
          redirect('/account/login', 'refresh');
        }
    }

    public function add_product()
    {
        $input_cat_id = $this->input->post('input_product_cat');
        $input_name = $this->input->post('input_name');
        $input_description = $this->input->post('input_description');
        $input_price = $this->input->post('input_price');
        $input_condition = $this->input->post('input_condition');
        $input_quantity = $this->input->post('input_quantity');
        $input_brand = $this->input->post('input_brand');
        $input_country_manufacture = $this->input->post('input_country_manufacture');
        $input_type = $this->input->post('input_type');
        $user_id = $this->session->userdata['logged_in']['id'];
        $this->load->model('products_model');
        
        $data = array(
                'input_cata_id' => $input_cat_id,
                'input_name' => $input_name,
                'input_description' => $input_description,
                'input_price' => $input_price,
                'input_condition' => $input_condition,
                'input_quantity' => $input_quantity,
                'input_brand' => $input_brand,
                'input_country_manufacture' => $input_country_manufacture,
                'input_auction' => $input_type,
                'input_user_id' => $user_id,
                'input_datetime' => date("Y-m-d H:i:s")
            );

        $this->products_model->add_products($data);
        redirect('/admin/products', 'refresh');
    }

    public function product_list()
    {
        if($this->session->userdata('logged_in'))
        {
            $hdata['title']='Admin-JDM Original';
            $this->load->view('admin/common/header', $hdata);
            
            $this->load->model('products_model');
            $this->load->model('category');
            
            $data['product_list'] = $this->products_model->get_product_list();
            $data['product_category'] = $this->category->get_category();
            
            $this->load->view('admin/admin_product_list_view',$data);

            $this->load->view('admin/common/footer');
           
        }
        else
        {
          //If no session, redirect to login page
          redirect('/account/login', 'refresh');
        }
    }

    public function delete_product($id)
    {
        $this->load->model('products_model');
        $this->products_model->delete_product_by_id($id);
        redirect('/admin/product_list');
    }

    
    public function delete_prod_image_by_id(){
        $prod_img_id = $this->input->get('pim_id');
        $prod_id = $this->input->get('pid');

        $this->load->model('products_model');
        $this->products_model->delete_product_image_by_id($prod_img_id);
        redirect('/admin/update_product/'.$prod_id);
    }

     public function update_product_child($id)
    {
        $input_cat_id = $this->input->post('input_product_cat');
        $input_name = $this->input->post('input_name');
        $input_description = $this->input->post('input_description');
        $input_price = $this->input->post('input_price');
        $input_condition = $this->input->post('input_condition');
        $input_quantity = $this->input->post('input_quantity');
        $input_brand = $this->input->post('input_brand');
        $input_country_manufacture = $this->input->post('input_country_manufacture');
        $input_type = $this->input->post('input_type');
        $user_id = $this->session->userdata['logged_in']['id'];
        
        $this->load->model('products_model');
      
        
        $data = array(
                'input_cata_id' => $input_cat_id,
                'input_name' => $input_name,
                'input_description' => $input_description,
                'input_price' => $input_price,
                'input_condition' => $input_condition,
                'input_quantity' => $input_quantity,
                'input_brand' => $input_brand,
                'input_country_manufacture' => $input_country_manufacture,
                'input_auction' => $input_type,
                'input_user_id' => $user_id,
                'input_datetime' => date("Y-m-d H:i:s")
            );  
        $this->products_model->update_product_by_id($data,$id);

        redirect('/admin/product_list', 'refresh');
    } 

    public function update_product($id)
    {

        if($this->session->userdata('logged_in'))
        {
            $hdata['title']='Admin-JDM Original';
            $this->load->view('admin/common/header', $hdata);
            
            $this->load->model('category');
            $this->load->model('productm');
           
            $data['cat'] = $this->category->get_category();
            $data['product'] = $this->productm->get_product_by_id($id);
            $data['productimg'] = $this->productm->get_product_image_by_id($id);
            $data['id'] = $id ;

            $this->load->view('admin/admin_product_update_view', $data);
            $this->load->view('admin/common/footer');

           
        }
        else
        {
          //If no session, redirect to login page
          redirect('/account/login', 'refresh');
        }

       
    }

    public function upload_image_by_id($id){
      
		$uploadDir = './public/img/products/';
		$fileName = $_FILES["fileToUpload"]['name'];
		$tmpName = $_FILES["fileToUpload"]["tmp_name"]; 
		$filePath = $uploadDir.$id."_".$fileName;

        $result = move_uploaded_file($tmpName,$filePath); 

        $this->load->model('products_model');
        $this->products_model->add_product_image($id."_".$fileName,$id);

        redirect('/admin/update_product/'.$id);
    } 
   
}

?>