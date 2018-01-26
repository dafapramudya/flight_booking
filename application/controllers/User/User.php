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
	}

	public function index()
	{
		$data = array
		(
			'error' => '',
			'username' => $this->session->userdata('username')
		);
		$data['side']='user/tampil/side';
		$data['content']='user/v_welcome';
		$this->load->view('user/tampil/main',$data);
	}

	public function profileku()
	{
		$where = array('id' => $_SESSION['id'] );
		$data['t_user'] = $this->my_model->tampil_user('t_user', $where)->result();
		$data['side']='user/tampil/side';
		$data['content']='user/v_profilku';
		$this->load->view('user/tampil/main',$data);
	}

	public function logout() 
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('home');
	}
}