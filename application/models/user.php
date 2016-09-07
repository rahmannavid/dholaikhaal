<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Model{

	function __construct()
	{
        parent::__construct();
	}

    function login($username, $password)
    {
       $this -> db -> select('id, email, password');
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
    
}
?>