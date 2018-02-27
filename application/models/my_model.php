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
    	$query = $this->db->query("SELECT tr.id, tr.depart_at, tr.arrive, tr.tanggal_terbang as tanggal, ta.kode as kode_asal, ta.bandara as asal, ta.kota as kota_asal, ke.kode as kode_tujuan, ke.bandara as tujuan, ke.kota as kota_tujuan, tr.price, t.logo as logo, t.description as pesawat FROM t_rute tr INNER JOIN t_airport ta on (tr.rute_from = ta.id and ta.bandara LIKE '%$ruteFrom%') INNER JOIN (SELECT ta.* from t_airport ta) ke on (tr.rute_to = ke.id and ke.bandara LIKE '%$ruteTo%') INNER JOIN transportation t on (tr.transportationid = t.id) WHERE tr.tanggal_terbang = '$depart_at' order by tr.depart_at");
    	return $query;
	}

	public function tampilPencarian2($ruteFrom, $ruteTo)
	{
    	$query = $this->db->query("SELECT tr.id, tr.depart_at, tr.arrive, tr.tanggal_terbang as tanggal, ta.kode as kode_asal, ta.bandara as asal, ta.kota as kota_asal, ke.kode as kode_tujuan, ke.bandara as tujuan, ke.kota as kota_tujuan, tr.price, t.logo as logo FROM t_rute tr INNER JOIN t_airport ta on (tr.rute_from = ta.id and ta.bandara LIKE '%$ruteFrom%') INNER JOIN (SELECT ta.* from t_airport ta) ke on (tr.rute_to = ke.id and ke.bandara LIKE '%$ruteTo%') INNER JOIN transportation t on (tr.transportationid = t.id)");
    	return $query;

	}

	public function getMaskapai($id)
	{
    	$query = $this->db->query("SELECT t.description as pesawat FROM t_rute tr INNER JOIN transportation t on (tr.transportationid = t.id) WHERE tr.id = '$id'");
    	return $query;

	}

	public function classe()
	{
		$qry = $this->db->get('transportation_type');
		return $qry->result();
	}

	function join_clientreserve($where){
		$this->db->select("t_rute.id,t_rute.tanggal_terbang,t_rute.depart_at,t_rute.rute_from,t_rute.rute_to,t_rute.price,transportation.description,transportation.code");
			$this->db->from('t_rute');
			$this->db->join('transportation', 'transportation.id = t_rute.transportationid');
			$this->db->where('t_rute.id', $where);
			$query = $this->db->get();
			return $query->result();
	}

	function seat($id){
		$this->db->select('transportation.seat_qty');
		$this->db->from('t_rute,transportation');
		$this->db->where('t_rute.transportationid = transportation.id');
		$this->db->where('t_rute.id', $id);
		return $this->db->get();
	}

	function filterseat($id){
		$this->db->select('seat_code');
		$this->db->where('reservation.ruteid',$id);
		return $this->db->get('reservation');
	}

	function getcustid($resCode)
	{
		$this->db->select('*');
		$this->db->from('t_customer');
		$this->db->where('res_code', $resCode);
		return $this->db->get();
	}

	function getPrice($id)
	{
		$qry = $this->db->query("select price from t_rute where id='$id'");
		return $qry->row();
	}

	function getWaktu($id)
	{
		$qry = $this->db->query("select depart_at from t_rute where id='$id'");
		return $qry->row();
	}

	function getPrice2($id)
	{
		$qry = $this->db->query("select * from t_rute where id='$id'");
		return $qry->row();
	}

	function getWaktu2($id)
	{
		$qry = $this->db->query("select * from t_rute where id='$id'");
		return $qry->row();
	}

	function input_cust($data)
	{
		$query= $this->db->insert('t_customer',$data);
		return $query;
	}

	public function seatTot($id){
		return $this->db->query("select count(*) as tot_kursi from reservation where ruteid = '$id' ");
	}
}