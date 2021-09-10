<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->tAnggota = "anggota";
        $this->tLogin	= "login";
        $this->tWpposts = "wp_posts";
        $this->tVote	= "votes";
        $this->tChoice  = "choices";
        $this->logVote  = "log_vote";
    }

    public function checkSess()
    {
    	if($this->session->userdata('username') == '') { 
		$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Login terlebih dahulu sebelum masuk!</div>'); 
				redirect('Panel/Auth');
		}
    }


	public function getAllAnggota()
	{
		return $query = $this->db->get($this->tAnggota)->result_array();
	}

	public function getAllVote()
	{
		return $query = $this->db->get($this->tVote)->result_array();
	}

	public function getAnggotaBy($id)
	{ 
		$query = $this->db->select('*')->from($this->tAnggota)->where('id',$id)->get();
		return $query->result_array();
	}

	public function getChoicesById($id)
	{
		$this->db->select('*'); // <-- There is never any reason to write this line!
		$this->db->from('choices');
		$this->db->join('votes', 'choices.vote_id = votes.id');
		$this->db->where('choices.vote_id',$id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getLogVote($voteID)
	{
		$query = $this->db->select('*')->from($this->logVote)->where('vote_id',$voteID)->get();
		return $query->result_array();
	}

	public function insertRegis($dataAnggota)
	{
		$set 	= $this->db->set($dataAnggota);

		$query  = $this->db->insert($this->tAnggota, $dataAnggota);
		if ($query == TRUE) {
			return TRUE;
		}
		
	}

	public function insertAkun($dataLogin)
	{
		$set 	= $this->db->set($dataLogin);

		$query 	= $this->db->insert($this->tLogin, $dataLogin); 
		if ($query == TRUE) {
			return TRUE;
		}
		
	}

	public function updateAnggota($data)
	{
		$set 	= $this->db->set($data);

		$query 	= $this->db->where('id',$data['id']);
				  $this->db->update($this->tAnggota);
		if ($query == TRUE) {
			return TRUE;
		}
	}

	public function deleteAnggota($id)
	{

		$tables = array($this->tAnggota, $this->tLogin);
		$query = $this->db->where('id', $id);
				 $this->db->delete($tables);
		if ($query == TRUE) {
			return TRUE;
		}
	}


	public function authProcess($data)
	{
		$query = $this->db->get_where($this->tLogin, ['username' => $data['username']])->row_array();
		// Jika usernya ada
		if($query != null) {
			//Jika Usernya aktif
			if($query['status'] == 'Aktif') {

				//Cek Password
				if((md5($data['password'])) == $query['password']) {
					$data = [
						'isLogin' 	=> 1,
						'id' 		=> $query['id'],
						'username' 	=> $query['username'],
						'status' 	=> $query['status'],
						'role' 		=> $query['role']
					];
					
					$this->session->set_userdata($data);
					redirect('Panel/Admin');

				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah! Periksa ulang password anda!</div>'); 
				    redirect('Panel/Auth');
				}

			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Aduh! Username kamu belum aktif! Aktifin gih!</div>'); 
				redirect('Panel/Auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Aduh! Username kamu enggak terdaftar euy! </div>'); 
			redirect('Panel/Auth');

		} 
			
	}

	public function insertChoices($data)
	{
		$set 	= $this->db->set($data);

		$query 	= $this->db->insert($this->tChoice, $data); 
		if ($query == TRUE) {
			return TRUE;
		}
	}

	public function insertVotes($data)
	{
		$set 	= $this->db->set($data);

		$query 	= $this->db->insert($this->tVote, $data); 
		if ($query == TRUE) {
			return TRUE;
		}
	}

	public function countAnggota()
	{
		return $this->db->count_all($table = $this->tAnggota);
	}

	public function countPosts()
	{
		return $this->db->count_all($table = $this->tWpposts);
	}

	public function countVote()
	{
		return $this->db->count_all($table = $this->tVote);
	}

	public function countChoice()
	{
		return $this->db->count_all($table = $this->tChoice);
	}

// 	public function checkSession(){

//         $sesison = $this->session->userdata();

//         if($sesison['isLogin']!=1){
//             redirect('Auth','refresh');
//         }

//         return $sesison;

//     }


}