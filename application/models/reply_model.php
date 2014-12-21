<?php
class Reply_model extends CI_Model {

	public function __construct(){
		$this->load->database();
		$this->load->library('session');
	}
	
	public function get(){
		$query = $this->db->get('reply');
		return $query->result_array();
	}

	public function get_by_mid($mid = 0){
		if($mid){
			$query = $this->db->where('mid', $mid)->get('reply');
			return $query->result_array();
		} else {
			return NULL;
		}
	}
	
	public function set_reply(){
		$data = array(
			'mid' => $this->input->get('mid'),
			'content' => $this->input->post('content'),
			'hidden' => $this->input->post('hidden')? 1 : 0,
			'uid' => $this->session->userdata('uid'),
			'nickname' => $this->session->userdata('nickname')
		);
		
		return $this->db->insert('reply', $data);
	}
}
/* End of file mission_model.php */
/* Location: ./application/controllers/mission_model.php */