<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class products_model extends CI_Model{

	function __construct()
	{
        parent::__construct();
	}

    function get_products($pro_data){

        echo $pro_data['input_name'] ;
        $this->load->database();
        $data = array(
            'name' => $pro_data['input_name'],
            'description' => $pro_data['input_description'],
            'price' => $pro_data['input_price'],
            'condition' => $pro_data['input_condition'],
            'quantity' => $pro_data['input_quantity'],
            'brand' => $pro_data['input_brand'],
            'country_manufacture' => $pro_data['input_country_manufacture'],
        );
         
        $this->db->insert('product', $data);
       
    }
    
}
?>