<?php
/**
* 
*/
class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('username')=="") 
		{
			redirect('login');
		}
		elseif($this->session->userdata('level') == 'user')
		{
			redirect('user/user');
		}
		$this->load->model('my_model');
	}

	public function index()
	{
		$data = array
		(
			'error' => '',
			'username' => $this->session->userdata('username')
		);
		$data['side']='admin/tampil/side';
		$data['content']='admin/v_welcome';
		$this->load->view('admin/tampil/main',$data);
	}

	public function ndeleng_user()
	{	
		$data['show']=$this->my_model->tampil_data('t_user');
		$data['side']='admin/tampil/side';
		$data['content']='admin/v_user';
		$this->load->view('admin/tampil/main',$data);
	}

	public function ndeleng_customer()
	{	
		$data['show']=$this->my_model->tampil_kieh('t_customer')->result();
		$data['side']='admin/tampil/side';
		$data['content']='admin/v_customer';
		$this->load->view('admin/tampil/main',$data);
	}

	public function ndeleng_profil()
	{
		$where = array('id' => $_SESSION['id'] );
		$data['t_user'] = $this->my_model->tampil_user('t_user', $where)->result();
		$data['side']='admin/tampil/side';
		$data['content']='admin/v_profilku';
		$this->load->view('admin/tampil/main',$data);
	}

	public function ndeleng_transport()
	{
		$data['show'] = $this->my_model->tampil_kieh('transportation')->result();
		$data['side']='admin/tampil/side';
		$data['content']='admin/v_transport';
		$this->load->view('admin/tampil/main',$data);
	}

	public function ndeleng_tipe_transport()
	{
		$data['show'] = $this->my_model->tampil_kieh('transportation_type')->result();
		$data['side']='admin/tampil/side';
		$data['content']='admin/v_type_transport';
		$this->load->view('admin/tampil/main',$data);
	}

	public function tambah_type_transport()
	{
		$id = $this->input->post('id');
		$desc = $this->input->post('description');

		$data = array
		(
			'id' => $id,
			'description' => $desc
		);

		$this->my_model->input_data($data, 'transportation_type');
		echo json_encode(array("status" => TRUE));
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	}

	public function update_transport_type()
	{
		$id = $this->input->post('id');
		$desc = $this->input->post('description');

		$data = array
		(
			'id' => $id,
			'description' => $desc
		);

		$where = array
		(
			'id' => $id
		);

		$this->my_model->update_bro($where, $data, 'transportation_type');
		echo json_encode(array("status" => TRUE));
		// $this->modelku->update_data($where, $data, 't_barang');
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	}

	public function ngapus_transport_type($id)
	{
		$where = array('id' => $id);
		$this->my_model->delete_by_id($where, 'transportation_type');
		echo json_encode(array("status" => TRUE));
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	}

	public function ndeleng_rute()
	{
		$data['show'] = $this->my_model->tampil_kieh('t_rute')->result();
		$data['side']='admin/tampil/side';
		$data['content']='admin/v_rute';
		$this->load->view('admin/tampil/main',$data);
	}

	public function tambah_rute()
	{
		$id = $this->input->post('id');
		$depart_at = $this->input->post('depart_at');
		$rute_from = $this->input->post('rute_from');
		$rute_to = $this->input->post('rute_to');
		$price = $this->input->post('price');
		$transportationid = $this->input->post('transportation_id');

		$data = array
		(
			'id' => $id,
			'depart_at' => $depart_at,
			'rute_from' => $rute_from,
			'rute_to' => $rute_to,
			'price' => $price,
			'transportationid' => $transportationid
		);

		$this->my_model->input_data($data, 't_rute');
		echo json_encode(array("status" => TRUE));
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	}

	public function edit_rute($id)
	{
		$where = array
		(
			'id' => $id,
		);

		$data = $this->my_model->get_by_id('t_rute', $where);
		echo json_encode($data);
	}

	public function update_rute()
	{
		$id = $this->input->post('id');
		$depart_at = $this->input->post('depart_at');
		$rute_from = $this->input->post('rute_from');
		$rute_to = $this->input->post('rute_to');
		$price = $this->input->post('price');
		$transportationid = $this->input->post('transportation_id');

		$data = array
		(
			'id' => $id,
			'depart_at' => $trans_code,
			'rute_from' => $desc,
			'rute_to' => $seat_qty,
			'price' => $price,
			'transportation_typeid' => $trans_typeid
		);

		$where = array
		(
			'id' => $id
		);

		$this->my_model->update_bro($where, $data, 't_rute');
		echo json_encode(array("status" => TRUE));
		// $this->modelku->update_data($where, $data, 't_barang');
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	}

	public function ngapus_rute($id)
	{
		$where = array('id' => $id);
		$this->my_model->delete_by_id($where, 't_rute');
		echo json_encode(array("status" => TRUE));
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	}

	public function edit_profile($id)
	{
		$where = array
		(
			'id' => $id,
		);

		$data = $this->my_model->get_by_id('t_user', $where);
		echo json_encode($data);
	}

	public function update_profil()
	{
		$id = $this->input->post('id');
		$uname = $this->input->post('username');
		$fullname = $this->input->post('fullname');
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));

		$data = array
		(
			'username' => $uname,
			'fullname' => $fullname,
			'email' => $email,
			'password' => $password
		);

		$where = array
		(
			'id' => $id
		);

		$this->my_model->barang_update($where, $data, 't_user');
		echo json_encode(array("status" => TRUE));
		// $this->modelku->update_data($where, $data, 't_barang');
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	}

	public function edit_user($id)
	{
		$where = array
		(
			'id' => $id,
		);

		$data = $this->my_model->get_by_id('t_user', $where);
		echo json_encode($data);
	}

	public function edit_trans($id)
	{
		$where = array
		(
			'id' => $id,
		);

		$data = $this->my_model->get_by_id('transportation', $where);
		echo json_encode($data);
	}

	public function update_user()
	{
		$id = $this->input->post('id');
		$uname = $this->input->post('username');
		$fullname = $this->input->post('fullname');
		$email = $this->input->post('email');

		$data = array
		(
			'username' => $uname,
			'fullname' => $fullname,
			'email' => $email
		);

		$where = array
		(
			'id' => $id
		);

		$this->modelku->barang_update($where, $data, 't_user');
		echo json_encode(array("status" => TRUE));
		// $this->modelku->update_data($where, $data, 't_barang');
		// $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	}

	public function ngapus_user($id)
	{
		$where = array('id' => $id);
		$this->my_model->delete_by_id($where, 't_user');
		echo json_encode(array("status" => TRUE));
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	}

	function hapus($id)
	{
		$where = array('id' => $id);
		$this->my_model->delete_by_id($where,'t_user');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('home');
	}

	public function tambah_transport()
	{
		$id = $this->input->post('id');
		$kd_trans = $this->input->post('transport_code');
		$desc = $this->input->post('description');
		$seat_qty = $this->input->post('seat_qty');
		$trans_typeid = $this->input->post('transportation_typeid');

		$data = array
		(
			'id' => $id,
			'code' => $kd_trans,
			'description' => $desc,
			'seat_qty' => $seat_qty,
			'transportation_typeid' => $trans_typeid
		);

		$this->my_model->input_data($data, 'transportation');
		echo json_encode(array("status" => TRUE));
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	}

	public function update_transport()
	{
		$id = $this->input->post('id');
		$trans_code = $this->input->post('transport_code');
		$desc = $this->input->post('description');
		$seat_qty = $this->input->post('seat_qty');
		$trans_typeid = $this->input->post('transportation_typeid');

		$data = array
		(
			'id' => $id,
			'code' => $trans_code,
			'description' => $desc,
			'seat_qty' => $seat_qty,
			'transportation_typeid' => $trans_typeid
		);

		$where = array
		(
			'id' => $id
		);

		$this->my_model->update_bro($where, $data, 'transportation');
		echo json_encode(array("status" => TRUE));
		// $this->modelku->update_data($where, $data, 't_barang');
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	}

	public function ngapus_transport($id)
	{
		$where = array('id' => $id);
		$this->my_model->delete_by_id($where, 'transportation');
		echo json_encode(array("status" => TRUE));
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	}

	public function edit_cust($id)
	{
		$where = array
		(
			'id' => $id,
		);

		$data = $this->my_model->get_by_id('t_customer', $where);
		echo json_encode($data);
	}

	public function tambah_cust()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$phone = $this->input->post('phone');
		$gender = $this->input->post('gender');

		$data = array
		(
			'id' => $id,
			'name' => $nama,
			'address' => $alamat,
			'phone' => $phone,
			'gender' => $gender
		);

		$this->my_model->input_data($data, 't_customer');
		echo json_encode(array("status" => TRUE));
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	}

	public function update_cust()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$phone = $this->input->post('phone');
		$gender = $this->input->post('gender');

		$data = array
		(
			'id' => $id,
			'name' => $nama,
			'address' => $alamat,
			'phone' => $phone,
			'gender' => $gender
		);

		$where = array
		(
			'id' => $id
		);

		$this->my_model->update_bro($where, $data, 't_customer');
		echo json_encode(array("status" => TRUE));
		// $this->modelku->update_data($where, $data, 't_barang');
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	}

	public function ngapus_cust($id)
	{
		$where = array('id' => $id);
		$this->my_model->delete_by_id($where, 't_customer');
		echo json_encode(array("status" => TRUE));
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	}

	public function ndeleng_reservasi()
	{	
		$data['show']=$this->my_model->tampil_kieh('reservation')->result();
		$data['side']='admin/tampil/side';
		$data['content']='admin/v_reservasi';
		$this->load->view('admin/tampil/main',$data);
	}

	public function edit_reser($id)
	{
		$where = array
		(
			'id' => $id,
		);

		$data = $this->my_model->get_by_id('reservation', $where);
		echo json_encode($data);
	}

	public function tambah_reser()
	{
		$id = $this->input->post('id');
		$reser_code = $this->input->post('reservation_code');
		$reser_at = $this->input->post('reservation_at');
		$reser_date = $this->input->post('reservation_date');
		$customerid = $this->input->post('customerid');
		$seat_code = $this->input->post('seat_code');
		$ruteid = $this->input->post('ruteid');
		$depart_at = $this->input->post('depart_at');
		$price = $this->input->post('price');
		$userid = $this->input->post('userid');

		$data = array
		(
			'id' => $id,
			'reservation_code' => $reser_code,
			'reservation_at' => $reser_at,
			'reservation_date' => $reser_date,
			'customerid' => $customerid,
			'seat_code' => $seat_code,
			'ruteid' => $ruteid,
			'depart_at' => $depart_at,
			'price' => $price,
			'userid' => $userid,
		);

		$this->my_model->input_data($data, 'reservation');
		echo json_encode(array("status" => TRUE));
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	}

	public function update_reser()
	{
		$id = $this->input->post('id');
		$reser_code = $this->input->post('reservation_code');
		$reser_at = $this->input->post('reservation_at');
		$reser_date = $this->input->post('reservation_date');
		$customerid = $this->input->post('customerid');
		$seat_code = $this->input->post('seat_code');
		$ruteid = $this->input->post('ruteid');
		$depart_at = $this->input->post('depart_at');
		$price = $this->input->post('price');
		$userid = $this->input->post('userid');

		$data = array
		(
			'id' => $id,
			'reservation_code' => $reser_code,
			'reservation_at' => $reser_at,
			'reservation_date' => $reser_date,
			'customerid' => $customerid,
			'seat_code' => $seat_code,
			'ruteid' => $ruteid,
			'depart_at' => $depart_at,
			'price' => $price,
			'userid' => $userid,
		);

		$where = array
		(
			'id' => $id
		);

		$this->my_model->update_bro($where, $data, 'reservation');
		echo json_encode(array("status" => TRUE));
		// $this->modelku->update_data($where, $data, 't_barang');
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	}

	public function ngapus_reser($id)
	{
		$where = array('id' => $id);
		$this->my_model->delete_by_id($where, 'reservation');
		echo json_encode(array("status" => TRUE));
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	}

	public function logout() 
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('home');
	}
}