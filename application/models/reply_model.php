<?php
class Reply_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	
	public function get(){
		$query = $this->db->get('reply');
		return $query->result_array();
	}

	public function get_by_mid($mid = 0){
		if($mid){
			$query = $this->db->get_where('reply', array('mid'=> $mid));
			return $query->result_array();
		} else {
			return NULL;
		}
	}
}
/* End of file mission_model.php */
/* Location: ./application/controllers/mission_model.php */