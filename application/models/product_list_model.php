<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class product_list_model extends CI_Model{

	function __construct()
	{
        parent::__construct();
	}

    function get_product_list(){

        $this->load->database();
        $query = $this->db->query('SELECT * FROM product');
        return $query->result_array();
    }
    
}
?>