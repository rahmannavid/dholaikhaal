<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class products_model extends CI_Model{

	function __construct()
	{
        parent::__construct();
	}

    function add_products($pro_data){

        echo $pro_data['input_name'] ;
        $this->load->database();
        $data = array(
            'cata_id' =>  $pro_data['input_cata_id'],
            'name' => $pro_data['input_name'],
            'description' => $pro_data['input_description'],
            'price' => $pro_data['input_price'],
            'condition' => $pro_data['input_condition'],
            'quantity' => $pro_data['input_quantity'],
            'brand' => $pro_data['input_brand'],
            'country_manufacture' => $pro_data['input_country_manufacture'],
            'auction' => $pro_data['input_auction'],
            'user_id' => $pro_data['input_user_id'],
            'datetime' => $pro_data['input_datetime'],
        );
         
        $this->db->insert('product', $data);
       
    }
    
}
?>