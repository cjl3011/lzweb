<?php
class Reply_model extends CI_Model {

	public function __construct(){
		$this->load->database();
		$this->load->library('session');
		$this->load->model('mission_model');
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
	
	public function get_by_rid($rid = 0){
		if($rid){
			$query = $this->db->where('rid', $rid)->get('reply');
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	
	public function set_goodcount($rid) {
		$data = array(
			'goodcount' => $this->get_by_rid($rid)['goodcount']+1,
		);
		return $this->db->update('reply', $data, array('rid' => $rid));
	}
	
	public function set_reply(){
		$uid = $this->session->userdata('uid');
		if($uid){
			$data = array(
				'mid' => $this->input->post('mid'),
				'content' => $this->input->post('content'),
				'hidden' => $this->input->post('hidden') === 'false' ? 0 : 1,
				'uid' => $uid,
				'nickname' => $this->session->userdata('nickname')
			);
			$this->mission_model->set_last_reply_time($data['mid'], date("Y-m-d h:i:s"));
			return $this->db->insert('reply', $data);
		}
	}
}
/* End of file mission_model.php */
/* Location: ./application/controllers/mission_model.php */