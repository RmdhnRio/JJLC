	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Admin_model','Madmin');

	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if($this->form_validation->run() == FALSE){
 
		$data['title'] = 'Login JJLC';
		$this->load->view('core/header',$data);
		$this->load->view('auth/login');
		$this->load->view('core/footer');
		} else {
			$this->_login();
		}

	}

	public function blocked()
	{
		$data['title'] = 'JJLC 403';
		$this->load->view('core/header',$data);
		$this->load->view('auth/403');
		$this->load->view('core/footer');
	}

	public function notFound()
	{
		$data['title'] = 'JJLC 404';
		$this->load->view('core/header',$data);
		$this->load->view('404');
		$this->load->view('core/footer');
	}

	public function register()
	{
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[re_password]');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|matches[password]');

		if($this->form_validation->run() == FALSE) {

			$data['title'] = 'Daftar JJLC';
			$this->load->view('core/header',$data);
			$this->load->view('auth/register');
			$this->load->view('core/footer');
		} else {
			//variable that you need
			$fakultas 	= $this->input->post('fakultas');
			$angkatan 	= $this->input->post('angkatan');
			$tgl_lahir	= $this->input->post('tgl_lahir');
			$date 	 	= strtotime($tgl_lahir);
			$gender		= $this->input->post('gender');
			$divisi  	= $this->input->post('divisi');
			/*generate Special ID*/

			/* Segment 1, Pilihan Fakultas */
			if     ($fakultas == 'Fakultas Teknik')				{ $seg1 = '1'; }
			else if($fakultas == 'Fakultas Bahasa dan Seni')	{ $seg1 = '2'; }
			else if($fakultas == 'Fakultas Ekonomi')			{ $seg1 = '3'; }
			else if($fakultas == 'Fakultas Ilmu Pendidikan')	{ $seg1 = '4'; }
			else if($fakultas == 'Fakultas Ilmu Sosial')		{ $seg1 = '5'; }
			else if($fakultas == 'Fakultas Matematika dan IPA')	{ $seg1 = '6'; }
			else if($fakultas == 'Fakultas Ilmu Olahraga')		{ $seg1 = '7'; }
			else if($fakultas == 'Pascasarjana')				{ $seg1 = '8'; }
				else 											{ $seg1 = '0'; }
			/* Segment 2, Tahun Angkatan */
			$seg2 = substr($angkatan, -2);

			/* Segment 3, Tanggal lahir */
			$seg3 = date("d",$date);

			/* Segment 4, Bulan lahir */
			$seg4 = date("m",$date);

			/* Segment 5, Jenis Kelamin */
			if     ($gender == 'laki-laki'){ $seg5 = '6'; }
			else if($gender == 'perempuan'){ $seg5 = '9'; }
			else 						   { $seg5 = '0'; }

			/* Segment 6, Pilihan Divisi */
			if 		($divisi == 'Animanga'){ $seg6 = '1'; }
			else if ($divisi == 'Budaya')  { $seg6 = '2'; }
			else if ($divisi == 'Cosplay') { $seg6 = '3'; }
			else if ($divisi == 'Games')   { $seg6 = '4'; }

			/* Segment 7, Increment Database */

			$count = $this->Madmin->countAnggota('');
			$seg7  = $count + 1; 

			/* Special ID,gabungan dari semua segment */
			$specialID = $seg1.$seg2.$seg3.$seg4.$seg5.$seg6.$seg7;

			$dataAnggota = [
				'id' 			=> $specialID,
				'nama_depan' 	=> $this->input->post('nama_depan'),
				'nama_belakang'	=> $this->input->post('nama_belakang'),
				'email'			=> $this->input->post('email'),
				'nickname'		=> $this->input->post('nickname'),
				'gender'		=> $this->input->post('gender'),
				'fakultas'		=> $this->input->post('fakultas'),
				'prodi'			=> $this->input->post('prodi'),
				'angkatan'		=> $this->input->post('angkatan'),
				'tgl_lahir'		=> $this->input->post('tgl_lahir'),
				'tempat_lahir'	=> $this->input->post('tempat_lahir'),
				'no_hp'			=> $this->input->post('no_hp'),
				'divisi'		=> $this->input->post('divisi'),
				'role'			=> $this->input->post('role'),
				'alamat'		=> $this->input->post('alamat'),
				'alasan'		=> $this->input->post('alasan'),
				'status'		=> 'Aktif',
				'avatar'		=> 'default.png'
			];

			//var_dump($dataAnggota); die;

			$dataLogin = [
				'id'			=> $specialID,
				'username'		=> $this->input->post('username'),
				'password'		=> md5($this->input->post('password')),
				'status'		=> 'Aktif',
				'role'			=> 'anggota'

			];

			$query  = $this->Madmin->insertRegis($dataAnggota);
			$query2 = $this->Madmin->insertAkun($dataLogin);
			if($query && $query2 == TRUE) {
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Daftar Sukses! Silahkan melakukan login</div>'); 
				redirect('Panel/Auth', 'refresh');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Aduh! Sepertinya ada yang tidak beres</div>'); 
				redirect('Panel/Auth', 'refresh');
			}
		}
 
	}

	private function _login()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
			);
		$result = $this->Madmin->authProcess($data);

	}

	public function logout()
	{
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('status');
		$this->session->unset_userdata('role');
		$this->session->set_userdata('isLogin' ==  0);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kamu berhasil logout! Sampai berjumpa lagi! (Matta-ne!)</div>'); 
		redirect('Panel/Auth','refresh');
	}


}