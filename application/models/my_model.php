<?php
/**
* 
*/
class My_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function cek_user($uname, $pass)
	{
		$qry = $this->db->query("select * from t_user where username='$uname' and password='$pass' limit 1");
		return $qry;
	}

	public function input_data($data, $table)
	{
		$this->db->insert($table,$data);
	}
}