<?php
/**
* 
*/
class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("my_model");
		if ($this->session->userdata('username')=="") 
		{
			redirect('home');
		}
		elseif($this->session->userdata('level') == 'admin')
		{
			redirect('admin/admin');
		}
	}

	public function index()
	{
		$data = array
		(
			'error' => '',
			'username' => $this->session->userdata('username')
		);

		$this->load->view('user/index',$data);
	}

	public function profileku()
	{
		$where = array('id' => $_SESSION['id'] );
		$data['t_user'] = $this->my_model->tampil_user('t_user', $where)->result();
		$data['side']='user/tampil/side';
		$data['content']='user/v_profilku';
		$this->load->view('user/tampil/main',$data);
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

	function hapus($id)
	{
		$where = array('id' => $id);
		$this->my_model->delete_by_id($where,'t_user');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('home');
	}

	public function logout() 
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('home');
	}
}