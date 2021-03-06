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
       $this -> db -> select('id, name, email, mobile, address, password');
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

    function get_user_type($user_id)
    {
        $this->load->database();  
        $this -> db -> select('type');
        $this -> db -> from('user');
        $this -> db -> where('id', $user_id);

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

     function get_all_user() {
        $this->load->database();
        $query = $this->db->query('SELECT * FROM user');
        return $query->result_array();
     }

     function update_user($user) {
        $this->load->database();
        $data = array(
            'name' =>  $user['input_name'],
            'mobile' => $user['input_mobile'],
            'email' => $user['input_email'],
            'password' => $user['input_password'],
            'address' => $user['input_address'],
           
        );
        $this->db->where('id',$user['input_id']);
        $this->db->update('user', $data);
     }
    
}
?>