<?php
class Login_model extends CI_Model{
	
	function login($username, $password){
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where('username',$username);
		$this->db->where('password',md5($password));
		$this->db->limit(1);
		$query = $this->db->get();
			if($query->num_rows() == 1)
	   {
	     return $query->result();
	   }
	   else
	   {
	     return FALSE;
	   }
	}
}	
?>