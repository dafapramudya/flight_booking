<?php
/**
* 
*/
class Traveler extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('my_model');
		$this->load->library('session');
	}

	public function cari_rute()
	{
		$rute_from = $this->input->get('rute_from');
		$rute_to = $this->input->get('rute_to');
		$depart_at = $this->input->get('depart_at');
		$penumpang = $this->input->get('penumpang');

		$date = date("Y-n-d", strtotime($depart_at));

		$this->session->set_userdata('rute_from', $rute_from);
		$this->session->set_userdata('rute_to', $rute_to);
		$this->session->set_userdata('depart_at', $date);

		$data['rute'] = $this->my_model->tampilPencarian($date, $rute_from, $rute_to);
		$this->load->view('hasilSearch', $data);
	}

	public function prepare_pesan()
	{
		$rute_from = $this->session->userdata('rute_from');
		$rute_to = $this->session->userdata('rute_to');
		$date = $this->session->userdata('depart_at');

		$data['rute'] = $this->my_model->tampilPencarian($date, $rute_from, $rute_to);
		$this->load->view('v_pesan', $data);
	}
}