<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vote extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('Admin_model','Madmin');
		$this->Madmin->checkSess();
		$this->tLogin	= "login";
		$this->tAnggota = "anggota";
		$this->tVotes	= "votes";
	}

	public function index()
	{
		//by userdata
		$data['role'] = $this->db->get_where($this->tLogin, ['id' => $this->session->userdata('id')])->row_array();
		$data['user'] = $this->db->get_where($this->tAnggota, ['id' => $this->session->userdata('id')])->row_array();
		$data['vote'] = $this->Madmin->getAllVote();
		$data['title'] = 'List Vote';
		$this->load->view('core/header',$data);
		$this->load->view('core/sidebar');
		$this->load->view('core/navbar');
		$this->load->view('panel/list_vote',$data);
		$this->load->view('core/footer');
	}

	public function voting()
	{
		//by userdata
		$data['role'] = $this->db->get_where($this->tLogin, ['id' => $this->session->userdata('id')])->row_array();
		$data['user'] = $this->db->get_where($this->tAnggota, ['id' => $this->session->userdata('id')])->row_array();
		$voteID = $this->uri->segment(3); 
		$userID = $this->session->userdata('id');
		$data['vote'] = $this->Madmin->getChoicesById($voteID);
		//debug($data['vote']);

		$checkVoted = $this->Madmin->getLogVote($voteID);
		//debug($checkVoted);
		if($checkVoted['user_id'] == $userID) {

			$data['title'] = 'Anda Sudah Vote!';
			$this->load->view('core/header',$data);
			$this->load->view('panel/voted',$data);
			$this->load->view('core/footer');

		} else {
			$data['title'] = 'Voting '.$data['vote'][0]['judul_vote'];
			$this->load->view('core/header',$data);
			$this->load->view('panel/vote',$data);
			$this->load->view('core/footer');
			//sleep(5);
			//redirect('Panel/Vote','refresh');
		}
	}

	public function dovote()
	{

	}


	public function buatvote()
	{
		//by userdata
		$data['role'] = $this->db->get_where($this->tLogin, ['id' => $this->session->userdata('id')])->row_array();
		$data['user'] = $this->db->get_where($this->tAnggota, ['id' => $this->session->userdata('id')])->row_array();
		$data['title'] = 'Create Vote';
		$this->load->view('core/header',$data);
		$this->load->view('core/sidebar');
		$this->load->view('core/navbar');
		$this->load->view('panel/create_vote',$data);
		$this->load->view('core/footer');

	}

	public function editvote()
	{
		//by userdata
		$data['role'] = $this->db->get_where($this->tLogin, ['id' => $this->session->userdata('id')])->row_array();
		$data['user'] = $this->db->get_where($this->tAnggota, ['id' => $this->session->userdata('id')])->row_array();
		$data['title'] = 'Edit Vote';
		$this->load->view('core/header',$data);
		$this->load->view('core/sidebar');
		$this->load->view('core/navbar');
		$this->load->view('panel/edit_vote',$data);
		$this->load->view('core/footer');
	}

	public function createvote()
	{
			$vcount    	= $this->Madmin->countVote() + 1;
			$ccount		= $this->Madmin->countChoice() + 1;
			$year	   	= date('Y');
			$kategori  	= $this->input->post('kategori');
			if     ($kategori == 'Kaichou'){ $cat = 'KCO';} // for kaichou category
			else if($kategori == 'Kazoku' ){ $cat = 'KZK';} // for kazoku category
			else if($kategori == 'Makrab' ){ $cat = 'MKB';} // for makrab category 
			else if($kategori == 'Bukber' ){ $cat = 'BKB';} // for bukber category
			else 						   { $cat = 'UNC';} // for uncategories
			$voteID = 'V'.$cat.$vcount.$year; // V for Vendetta
			//debug($voteID);

			//$choiceID = 'CHC'.$cat.$ccount.$year;

			$data_vote = [
				'id'			   => $voteID,
				'judul_vote'	   => $this->input->post('judul_vote'),
				'deskripsi'		   => $this->input->post('deskripsi'),
				'kategori'		   => $this->input->post('kategori'),
				'jml_pilihan'      => $this->input->post('jml_pilihan'),
			    'tgl_mulai_vote'   => $this->input->post('tgl_mulai_vote'),
				'tgl_selesai_vote' => $this->input->post('tgl_selesai_vote')
			];

			//debug($data_vote);
			$query1 = $this->Madmin->insertVotes($data_vote);

			if ($query1 == TRUE) {

				$nama_pilihan = $this->input->post('pilihan');
				$jml_pilihan = $this->input->post('jml_pilihan');

				for ($i=1; $i <= $jml_pilihan ; $i++) { 
					$ccount		 = $this->Madmin->countChoice();
					$choiceID    = 'C'.$cat.$ccount.$year; // Ex: CKCO12019


					$data_choice = [
						'id'			=> $choiceID,
						'vote_id'		=> $voteID,
						'nama_pilihan'	=> $this->input->post('pilihan'. + $i),
						'deskripsi'		=> $this->input->post('deskripsi'. + $i)
						
					];

					$query2 = $this->Madmin->insertChoices($data_choice);

            	}
            		
				if ($query2 == TRUE) { 
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Yeyy..! Vote dan pilihannya berhasil dibuat!</div>'); 
				    redirect('Panel/Vote/buatvote');
					 } else { 
					 	$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Aduh.. Vote dan pilihannya gagal dibuat</div>'); 
			    		redirect('Panel/Vote/buatvote'); 
			    	 }

			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Aduh.. Vote gagal dibuat</div>'); 
				    	redirect('Panel/Vote/buatvote'); 
			}

	}


}