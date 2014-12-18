<?php
class Mission_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	
	public function get(){
		$query = $this->db->get('mission');
		return $query->result_array();
	}

	public function get_by_id($uid = 1){
		$query = $this->db->get_where('mission', array('uid'=> $uid));
		return $query->result_array();
	}
}
/* End of file mission_model.php */
/* Location: ./application/controllers/mission_model.php */