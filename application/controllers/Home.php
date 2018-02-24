<?php
/**
* 
*/
class Home extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('my_model');
		$this->load->library('session');
		if($this->session->userdata('username'))
		{
			if($this->session->userdata('level')=='admin') 
			{
				redirect('admin/admin');
			}
			elseif ($this->session->userdata('level')=='user') 
			{
				redirect('user/user');
			}
		}
	}

	public function index()
	{
		$data['airport'] = $this->my_model->show_bandara();
		$this->load->view('index', $data);
	}

	public function logine()
	{
		$this->load->view('v_login');
	}

	public function ndaftar()
	{
		$this->load->view('v_daftar');
	}

	public function ndaftarProcess()
	{
		$nama = $this->input->post('fullname');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
		$password = md5($this->input->post('password'));

		$data = array
		(
			'fullname' => $nama,
			'username' => $username,
			'email' => $email,
			'password' => $password,
			'level' => 3
		);

		$this->my_model->input_data($data, 't_user');

		?>
			<script type="text/javascript">alert("Berhasil mendaftar!")</script>
		<?php
	}

	public function loginProcess()
	{
		$email = $this->input->post('email');
		$pass = md5($this->input->post('password'));
		$result = $this->my_model->cek_user($email, $pass);

		if ($result->num_rows() > 0) 
		{
			foreach ($result->result() as $row) 
			{
				$id = $row->id;
				$uname = $row->username;
				$pass = $row->password;
				$email = $row->email;
				$level = $row->level;
				$fullname = $row->fullname;
			}

			$newdata = array
			(
				'id' => $id,
		        'username' => $uname,
		        'password' => $pass,
		        'email' => $email,
		        'fullname' => $fullname,
		        'level' => $level,
		        'logged_in' => TRUE
			);

			$this->session->set_userdata($newdata);
			if($this->session->userdata('level')=='admin') 
			{
				redirect('admin/admin');
			}
			elseif ($this->session->userdata('level')=='user') 
			{
				redirect('user/user');
			}
		}
		else 
		{
			?>
				<script type="text/javascript">
					alert("Email / Password Tidak Cocok!")
				</script>
			<?php
		}

	}

	
}