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
    
}
?>