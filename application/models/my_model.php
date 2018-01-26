<?php
/**
* 
*/
class My_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function cek_user($uname, $pass)
	{
		$qry = $this->db->query("select * from t_user where username='$uname' and password='$pass'");
		return $qry;
	}

	public function input_data($data, $table)
	{
		$this->db->insert($table,$data);
	}

	public function tampil_data($table)
	{
		$where = array('level' => 3);
		return $this->db->get_where($table, $where);
	}

	public function tampil_user($table, $where)
	{
		return $this->db->get_where($table, $where);
	}

	public function tampil_adm_user()
	{
		$qry = $this->db->query("select * from t_user where id=".$_SESSION['id']);
		return $qry;
	}

	public function get_by_id($table, $where)
	{
		$this->db->from($table);
		$this->db->where($where);
		$query = $this->db->get();
 
		return $query->row();
	}

	public function barang_update($where, $data, $table)
	{
		$this->db->update($table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}