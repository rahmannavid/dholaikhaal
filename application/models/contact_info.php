<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contact_info extends CI_Model{

	function __construct()
	{
        parent::__construct();
	}

    function get_category($id){
        $this->load->database();
        $query = $this->db->query("SELECT * FROM contact_info where id = '$id'");
        return $query->row();
    }
    
}
?>