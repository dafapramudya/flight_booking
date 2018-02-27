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

		$data['airport'] = $this->my_model->show_bandara();

		$this->load->view('user/header');
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

	public function cari_rute()
	{
		$rute_from = $this->input->get('rute_from');
		$rute_to = $this->input->get('rute_to');
		$depart_at = $this->input->get('depart_at');
		$depart_end = $this->input->get('depart_end');
		// $class = $this->input->get('class');
		$adult = $this->input->get('adult');
		$child = $this->input->get('child');
		$infant = $this->input->get('infant');

		$this->session->set_userdata('rute_from', $rute_from);
		$this->session->set_userdata('rute_to', $rute_to);
		$this->session->set_userdata('depart_at', $depart_at);
		$this->session->set_userdata('depart_end', $depart_end);
		// $this->session->set_userdata('class', $class);
		$this->session->set_userdata('adult', $adult);
		$this->session->set_userdata('child', $child);
		$this->session->set_userdata('infant', $infant);

		if ($depart_end == "" || $depart_end == null) 
		{
			$data = array
			(
				'depart_at' => $depart_at,
				'rute_from' => $rute_from,
				'rute_to' => $rute_to
			);

			$data['rute'] = $this->my_model->tampilPencarian($depart_at, $rute_from, $rute_to);
			$data['rute2'] = $this->my_model->tampilPencarian2($rute_from, $rute_to);
			$this->load->view('user/hasilSearch', $data);
		}
		else
		{
			//KIE MENGKO TAK GARAP 
			$data['rute'] = $this->my_model->tampilPencarian($depart_at, $rute_from, $rute_to);
			$this->load->view('user/header');
			$this->load->view('user/hasilSearch', $data);
		}
		
	}

	public function prepare_pesan($id)
	{
		$where = $id;
		$price = $this->my_model->getPrice($id)->price;
		$depart_at = $this->my_model->getWaktu($id)->depart_at;

		$rute_from = $this->session->userdata('rute_from');
		$rute_to = $this->session->userdata('rute_to');
		$date = $this->session->userdata('depart_at');
		$adult = $this->session->userdata('adult');
		$child = $this->session->userdata('child');
		$infant = $this->session->userdata('infant');

		$this->session->set_userdata('harga', $price);
		$this->session->set_userdata('waktu', $depart_at);

		$data = array
		(
			'adult' => $adult,
			'child' => $child, 
			'infant' => $infant,
			'price' => $price,
			'depart_at' => $depart_at,
		);

		$data['pesawat'] = $pesawat = $this->my_model->getMaskapai($id);

		$query = $this->my_model->join_clientreserve($where);
 		$data['seat'] = $this->my_model->seat($where)->result();
 		$data['filter'] = $this->my_model->filterseat($where)->result();
  		$data['reserve'] = null;
  		if($query){
   			$data['reserve'] =  $query;
  		}

  		$data['tseat'] = $this->my_model->seatTot($where)->result_array();
		$data['rute'] = $this->my_model->tampilPencarian($date, $rute_from, $rute_to);
		$data['rute2'] = $this->my_model->tampilPencarian2($rute_from, $rute_to);
		$this->load->view('user/v_pesan', $data);
	}

	function pesan()
	{
 		$rute_id = $this->input->post('rute_id');
 		$depart_at = $this->input->post('depart_at');
 		$price = $this->input->post('price');
 		$namapemesan = $this->input->post('fullname');
 		$notelpemesan = $this->input->post('nohp');
    	$emailpemesan = $this->input->post('email');
 		$alamatpemesan = $this->input->post('alamat');
 		$jenkelpenumpang = $this->input->post('titel');
 		$namapenumpang = $this->input->post('namalengkap');
 		$bagasi = $this->input->post('bagasi');
 		$seat = $this->input->post('seat');

 		$this->session->set_userdata('fullname', $namapemesan);

 		$date = $this->session->userdata('depart_at');
 		$rute_from = $this->session->userdata('rute_from');
		$rute_to = $this->session->userdata('rute_to');
		$harga = $this->session->userdata('harga'); 
		$waktu = $this->session->userdata('waktu');

		$adult = $this->session->userdata('adult');
		$child = $this->session->userdata('child');
		$infant = $this->session->userdata('infant');

		$qty = $this->input->post('qty');
		$penumpang = ($adult + $child + $infant);


		if ($namapemesan == "" || $namapemesan == null && $notelpemesan == "" || $notelpemesan == null && $emailpemesan == "" || $emailpemesan == null && $alamatpemesan == "" || $alamatpemesan == null && $jenkelpenumpang == "" || $jenkelpenumpang == null && $namapenumpang == "" || $namapenumpang == null && $seat == "" || $seat == null) 
		{
			    echo ("<SCRIPT LANGUAGE='JavaScript'>
			    window.alert('Tidak bisa melanjutkan! Terjadi Kesalahan. Pastikan semua form terisi dengan benar.')
			    window.location.href='prepare_pesan/" . $rute_id . "/';
				</SCRIPT>");
		}
		else
		{
			$length = 9;
	 		$char = '0123456789';
	 		$charLength = strlen($char);
	 		$res_code = '';
	 		for ($i=0; $i < $length; $i++) 
	 		{ 
	 			$res_code .= $char[rand(0, $charLength - 1)];
	 		}

	 		$this->session->set_userdata('reserCode', $res_code);
	 		$no = 0;

	 		foreach($seat as $kursi)
			{
				$namaseat[$no] = $kursi;
				$no++;
			}

			$dataCust = array
			(
	        	'name' => $namapemesan,
	        	'address' => $alamatpemesan,
	        	'phone' => $notelpemesan,
	        	'gender' => $jenkelpenumpang,
	        	'res_code' => $res_code
	 		);

			$inputCust = $this->my_model->input_cust($dataCust);
			if ($inputCust == 1)
			{
				$custID = $this->my_model->getcustid($res_code)->row()->id;

		 		$idne = $this->session->userdata('id');

				if ($idne == "" || $idne == null) 
	 			{
	 				foreach($seat as $kursi)
					{
						$data = array
			 			(
				        	'reservation_code' => $res_code,
				        	'reservation_at' => $rute_from,
				        	'reservation_date' => $date,
				        	'customerid' => $custID,
				        	'seat_code'=> $kursi,
				        	'ruteid' => $rute_id,
				        	'depart_at' => $depart_at,
				        	'price' => $price,
				        	'userid' => $custID,
				  			'status' => 'Menunggu Konfirmasi'
				 		);

				 		$this->my_model->input_data($data,'reservation');
					}
			 			

			 		redirect('user/user/pembayaran');
	 			}
	 			else
	 			{
	 				foreach($seat as $kursi)
					{
			 			$data = array
			 			(
				        	'reservation_code' => $res_code,
				        	'reservation_at' => $rute_from,
				        	'reservation_date' => $date,
				        	'customerid' => $custID,
				        	'seat_code'=> $kursi,
				        	'ruteid' => $rute_id,
				        	'depart_at' => $depart_at,
				        	'price' => $price,
				        	'userid' => $idne,
				  			'status' => 'Menunggu Konfirmasi'
				 		);

				 		$this->my_model->input_data($data,'reservation');
			 		}

			 		redirect('user/user/pembayaran');	
	 			}
			}
			else
			{
				echo "Gagal";
			}

			$custID = $this->my_model->getcustid($res_code)->row()->id;

			$this->session->set_userdata('customerid', $custID);
		}
	}

	public function pembayaran()
	{
		$resCode = $this->session->userdata('reserCode');
		$date = $this->session->userdata('depart_at');
		$rute_from = $this->session->userdata('rute_from');
		$rute_to = $this->session->userdata('rute_to');
		$custID = $this->session->userdata('customerid');
		$nama = $this->session->userdata('fullname');

		$data = array
		(
			'resCode' => $resCode,
			'tgl_terbang' => $date,
			'fullname' => $nama
		);

		$data['bayar'] = $this->my_model->tampilPencarian2($rute_from, $rute_to);
		$this->load->view('user/v_pembayaran', $data);
	}

	public function wait_confirmation()
	{
		$foto = $this->input->post('fotoBarangBukti');
		$resCode = $this->session->userdata('reserCode');
		$custID = $this->my_model->getcustid($resCode)->row()->id;

		if ($foto == "" || $foto == null) 
		{
			echo ("<script language='javascript'>
			    window.alert('Tidak bisa mengupload foto kosong!')
			    window.location.href='pembayaran';
				</SCRIPT>");
		}
		else
		{
			$data = array
			(
		    	'reser_code' => $resCode,
		    	'customer_id' => $custID,
		    	'gambar_bukti' => $foto,
		    	'status' => 'Belum Dikonfirmasi',
			);

			
			$this->my_model->input_data($data,'confirm_reser');

			echo ("<script language='javascript'>
			    window.alert('Berhasil mengupload gambar, silahkan tunggu konfirmasi.')
			    window.location.href='pembayaran';
				</SCRIPT>");
		}
	}

	public function logout() 
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('home');
	}
}