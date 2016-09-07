<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class category extends CI_Model{

	function __construct()
	{
        parent::__construct();
	}

    function get_category(){
        $this->load->database();
        $query = $this->db->query('SELECT * FROM category');
        return $query->result_array();
    }
    
}
?>