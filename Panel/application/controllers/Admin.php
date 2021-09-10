<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('Admin_model','Madmin');
		$this->Madmin->checkSess();
		$this->tLogin	= "login";
		$this->tAnggota = "anggota";
	}

	public function index() 
	{
		$data['user'] = $this->db->get_where($this->tAnggota, ['id' => $this->session->userdata('id')])->row_array();
		$data['title'] = 'Panel Admin JJLC';
		$data['jml_anggota'] = $this->Madmin->countAnggota();
		$data['jml_post'] = $this->Madmin->countPosts();
		// echo 'Selamat Datang '. $data['user']['nickname'];
		$this->load->view('core/header',$data);
		$this->load->view('core/sidebar');
		$this->load->view('core/navbar');
		$this->load->view('panel/index');
		$this->load->view('core/footer');
	}

	public function listanggota()
	{
		$data['role'] = $this->db->get_where($this->tLogin, ['id' => $this->session->userdata('id')])->row_array();
		$data['user'] = $this->db->get_where($this->tAnggota, ['id' => $this->session->userdata('id')])->row_array();
		$data['anggota'] = $this->Madmin->getAllAnggota();
		$data['title'] = 'Daftar Anggota JJLC';
		$this->load->view('core/header',$data);
		$this->load->view('core/sidebar');
		$this->load->view('core/navbar');
		$this->load->view('panel/list_anggota');
		$this->load->view('core/footer');
	}

	public function detailanggota($id)
	{
		$data['role'] = $this->db->get_where($this->tLogin, ['id' => $this->session->userdata('id')])->row_array();
		$data['user'] = $this->db->get_where($this->tAnggota, ['id' => $this->session->userdata('id')])->row_array();
		$data['anggota'] = $this->Madmin->getAnggotaBy($id);
		$data['title'] = 'Detail Anggota JJLC';
		$this->load->view('core/header',$data);
		$this->load->view('core/sidebar');
		$this->load->view('core/navbar');
		$this->load->view('panel/detail_anggota',$data);
		$this->load->view('core/footer');
	}

	public function profile($id)
	{
		$data['role'] = $this->db->get_where($this->tLogin, ['id' => $this->session->userdata('id')])->row_array();
		$data['user'] = $this->db->get_where($this->tAnggota, ['id' => $this->session->userdata('id')])->row_array();
		$data['anggota'] = $this->Madmin->getAnggotaBy($id);
		$data['title'] = 'Profile '.$data['user']['nickname'];
		$this->load->view('core/header',$data);
		$this->load->view('core/sidebar');
		$this->load->view('core/navbar');
		$this->load->view('panel/profile',$data);
		$this->load->view('core/footer');
	}

	public function editProfile($id)
	{
		$data['role'] = $this->db->get_where($this->tLogin, ['id' => $this->session->userdata('id')])->row_array();
		$data['user'] = $this->db->get_where($this->tAnggota, ['id' => $this->session->userdata('id')])->row_array();
		$data['anggota'] = $this->Madmin->getAnggotaBy($id);
		$data['title'] = 'Edit Profile '.$data['user']['nickname'];
		$this->load->view('core/header',$data);
		$this->load->view('core/sidebar');
		$this->load->view('core/navbar');
		$this->load->view('panel/edit_profil',$data);
		$this->load->view('core/footer');
	}

	public function updateProfile()
	{
		
		$data = [
					'id'			=> $this->input->post('id'),
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
					'alasan'		=> $this->input->post('alasan')
			];

		// Cek jika ada gambar yang akan di upload
		$avatar	=	$_FILES['avatar']['name'];

		if ($avatar) {
			//config nya
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1024;
            $config['upload_path']			= './assets/img/avatar/';
            $config['file_name']			= $data['nickname'].'_avatar';

            $this->load->library('upload', $config);

            if($this->upload->do_upload('avatar')) {

            	//menghapus avatar lama
            	$old_avatar = $this->input->post('old_avatar');
            	if($old_avatar != 'default.png') {
            		unlink(FCPATH . 'assets/img/avatar/' . $old_avatar);

            	//Resizing Image to desired size
           		$config['image_library'] = 'gd2';
				$config['source_image'] = 'assets/img/avatar/'.$this->upload->data('file_name');
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['width']         = 288;
				$config['height']       = 341;
            	}

            	$this->load->library('image_lib',$config);
			    $this->image_lib->resize();

            	$new_avatar = [
            		'id'		=> $this->input->post('id'),
            		'avatar'	=> $this->upload->data('file_name')
            	];

            	$this->Madmin->updateAnggota($new_avatar);

            } else if ($this->upload->do_upload('avatar') == FALSE) {
            	$error = $this->upload->display_errors();
            	$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">'.$error.'</div>'); 
				    redirect('Panel/Admin/editProfile/'.$data['id'],'refresh');

            }
		}

		$query  = $this->Madmin->updateAnggota($data);
		if ($query == TRUE) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profil kamu sudah berhasil di update!</div>'); 
				    redirect('Panel/Admin/profile/'.$data['id'],'refresh');
		}
	}

	public function editAnggota($id)
	{
		if($this->session->userdata('role') != 'admin') { 
				redirect('Panel/Auth/blocked');
		} else {
			//by userdata
			$data['role'] = $this->db->get_where($this->tLogin, ['id' => $this->session->userdata('id')])->row_array();
			$data['user'] = $this->db->get_where($this->tAnggota, ['id' => $this->session->userdata('id')])->row_array();
			//by get id
			$data['anggota'] = $this->Madmin->getAnggotaBy($id);
			$data['title'] = 'Kalender Kegiatan JJLC';
			$this->load->view('core/header',$data);
			$this->load->view('core/sidebar');
			$this->load->view('core/navbar');
			$this->load->view('panel/edit_anggota',$data);
			$this->load->view('core/footer');
		}
	}

	public function deleteAnggota($id)
	{
		$query = $this->Madmin->deleteAnggota($id);
		if($query == TRUE){
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anggota Berhasil Di kick dari Database!</div>'); 
				    redirect('Panel/Admin/listanggota','refresh');
		}
	}

	public function calendar()
	{
			//by userdata
			$data['role'] = $this->db->get_where($this->tLogin, ['id' => $this->session->userdata('id')])->row_array();
			$data['user'] = $this->db->get_where($this->tAnggota, ['id' => $this->session->userdata('id')])->row_array();
			//by get id
			$data['title'] = 'Kalender Kegiatan JJLC';
			$this->load->view('core/header',$data);
			$this->load->view('core/sidebar');
			$this->load->view('core/navbar');
			$this->load->view('panel/calendar',$data);
			$this->load->view('core/footer');
	}

	

}