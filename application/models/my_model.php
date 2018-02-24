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

	public function cek_user($email, $pass)
	{
		$qry = $this->db->query("select * from t_user where email='$email' and password='$pass'");
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

	public function tampil_kieh($table)
	{
		return $this->db->get($table);
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

	public function update_bro($where, $data, $table)
	{
		$this->db->update($table, $data, $where);
		return $this->db->affected_rows();
	}

	public function show_bandara()
	{
		$qry = $this->db->get('t_airport');
		return $qry->result();
	}

	public function tampilPencarian($depart_at, $ruteFrom, $ruteTo)
	{
    	$query = $this->db->query("SELECT tr.depart_at, tr.arrive, tr.tanggal_terbang as tanggal, ta.kode as kode_asal, ta.bandara as asal, ta.kota as kota_asal, ke.kode as kode_tujuan, ke.bandara as tujuan, ke.kota as kota_tujuan, tr.price, t.logo as logo FROM t_rute tr INNER JOIN t_airport ta on (tr.rute_from = ta.id and ta.bandara LIKE '%$ruteFrom%') INNER JOIN (SELECT ta.* from t_airport ta) ke on (tr.rute_to = ke.id and ke.bandara LIKE '%$ruteTo%') INNER JOIN transportation t on (tr.transportationid = t.id) WHERE tr.tanggal_terbang = '$depart_at' order by tr.depart_at");
    	return $query;
	}
}