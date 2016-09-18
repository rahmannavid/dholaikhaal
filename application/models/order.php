<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class order extends CI_Model{

	function __construct()
	{
        parent::__construct();
	}

    function get_lastbid($prod_id){
       $this->load->database();
       $query = $this->db->query("SELECT MAX(biding_price) as lastbid FROM order where product_id = '$prod_id'");
       
       if($query -> num_rows() == 1)
       {
         return $query->row()->lastbid;
       }
       else{
         return '00';
       }
    }

    function get_user_type($id){

        $this->load->database();
        $query = $this->db->query("SELECT * FROM user where id = '$id'");
        return $query->row();
    }


      function add_order($order){
        $this->load->database();
        $data = array(
            'user_id' =>  $order['user_id'],
            'product_id' => $order['input_prod_id'],
            'name' => $order['input_name'],
            'mobile' => $order['input_mobile'],
            'address' => $order['input_address'],
            'email' => $order['input_email'],
            'biding_price' => $order['input_price'],
            'type' => $order['input_type'],
            'datetime'=> $order['input_datetime'],
            
        );
         
        $this->db->insert('orders', $data);
    }

    function get_order_list(){

        $this->load->database();
        $query = $this->db->query('SELECT orders.*, product.name FROM orders, product where orders.product_id = product.id');
        return $query->result_array();
    }

    function get_order_list_by_id($id){

        $this->load->database();
        $query = $this->db->query("SELECT orders.*, product.name FROM orders, product where orders.product_id = product.id and orders.user_id='$id'");
        return $query->result_array();
    }

    
}
?>