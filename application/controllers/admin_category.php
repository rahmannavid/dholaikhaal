<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_category extends CI_Controller {

    public function add_category()
    {
        $category = $this->input->post('category');
        $this->load->model('category');
        $this->category->add_category($category);
        redirect('/admin/category');
    } 

    public function edit_category()
    {
        $category = $this->input->post('category');
        $id = $this->input->post('id');
        
        $this->load->model('category');
        $data = array(
                    'id' => $id,
                    'name' => $category
                );

        $this->category->edit_category($data);

        redirect('/admin/category');
    } 

    public function delete_category($id)
    {
        $this->load->model('category');
        $this->category->delete_category($id);
        redirect('/admin/category');
    } 
}

?>