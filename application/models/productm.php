<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class productm extends CI_Model{

	function __construct()
	{
        parent::__construct();
	}

    function get_product_by_id($id){
        $this->load->database();
        $query = $this->db->query("SELECT * FROM product where id = '$id'");
        return $query->row();
    }
    
    function get_product_image_by_id($id){
        $this->load->database();
        $query = $this->db->query("SELECT * FROM product_image where prod_id = '$id'");
        return $query->result();
    }

    function get_product_first_image_by_id($id){
        $this->load->database();
        $query = $this->db->query("SELECT * FROM product_image where prod_id = '$id' limit 1");
        return $query->row();
    }
    
    function get_all_product($start,$end){
        $this->load->database();
        $query = $this->db->query("SELECT * FROM product left Join (SELECT min(id), img, prod_id from product_image group by prod_id) AS pi on product.id = pi.prod_id LIMIT $start, $end");
        return $query->result();
    }
    
    function get_all_product_by_cat($cat_id,$start,$end){
        $this->load->database();
        $query = $this->db->query("SELECT * FROM product left Join (SELECT min(id), img, prod_id from product_image group by prod_id) AS pi on product.id = pi.prod_id WHERE product.cata_id = $cat_id LIMIT $start, $end");
        return $query->result();
    }
    
    function get_all_product_by_auction($start,$end){
        $this->load->database();
        $query = $this->db->query("SELECT * FROM product left Join (SELECT min(id), img, prod_id from product_image group by prod_id) AS pi on product.id = pi.prod_id WHERE product.auction = 1 LIMIT $start, $end");
        return $query->result();
    }
    
    function get_all_product_by_shop($start,$end){
        $this->load->database();
        $query = $this->db->query("SELECT * FROM product left Join (SELECT min(id), img, prod_id from product_image group by prod_id) AS pi on product.id = pi.prod_id WHERE product.auction != 1 LIMIT $start, $end");
        return $query->result();
    }
}
?>