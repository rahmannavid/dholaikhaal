<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Model{

	function __construct()
	{
        parent::__construct();
	}

    function login($username, $password)
    {
       $this -> db -> select('id, name, email, password, type');
       $this -> db -> from('user');
       $this -> db -> where('email', $username);
       $this -> db -> where('password', $password);
       $this -> db -> limit(1);

       $query = $this -> db -> get();

       if($query -> num_rows() == 1)
       {
         return $query->result();
       }
       else
       {
         return false;
       }
    }

    function get_user_by_id($id){
       $this -> db -> select('id, name, email, mobile, address');
       $this -> db -> from('user');
       $this -> db -> where('id', $id);

       $query = $this -> db -> get();

       if($query -> num_rows() == 1)
       {
         return $query->row();
       }
       else
       {
         return false;
       }
    }

    function get_registration($reg_data)
    {
        $this->load->database();
        $data = array(
            'email' =>  $reg_data['inputEmail'],
            'name' => $reg_data['inputName'],
            'type' => $reg_data['inputType'],
            'mobile' => $reg_data['inputMobNo'],
            'password' => $reg_data['inputPassword'],
            'address' => $reg_data['inputAddress']
           
        );
         
        $this->db->insert('user', $data);
    }

    function get_user_type($id)
    {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM user where id = '$id'");
        return $query->row();
    }

    
    
}
?>