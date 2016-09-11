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

    function add_category($cat){
        $this->load->database();
        $data = array(
            'name' => $cat
        );
        $this->db->insert('category', $data);
    }

    function edit_category($cat_data){
        $this->load->database();
        $data = array(
            'name' => $cat_data['name']
        );
        $this->db->where('id',$cat_data['id']);
        $this->db->update('category', $data);
    }

    function delete_category($id){
        $this->load->database();
        $this->db->where('id',$id);
        $this->db->delete('category');
    }
    
}
?>