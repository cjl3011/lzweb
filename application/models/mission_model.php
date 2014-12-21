<?php
class Mission_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	
	public function get($num=NULL, $offset=0){
		if($num && $offset){
			return $this->db->get('mission', $num, $offset);
		} else {
			$query = $this->db->get('mission');
			return $query->result_array();
		}
	}
	
	public function count_result(){
		$query = $this->db->count_all_results('mission');
		return $query;
	}

	public function get_by_mid($mid = 0){
		if($mid){
			$query = $this->db->get_where('mission', array('mid'=> $mid));
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	
	public function get_by_tid($tid = 0){
		if($tid){
			$query = $this->db->get_where('mission', array('tid'=> $tid));
			return $query->result_array();
		} else {
			return NULL;
		}
	}
	
	public function get_by_name($name = 0){
		if($name){
			$query = $this->db->get_where('mission', array('name'=> $name));
			return $query->row_array();
		} else {
			return NULL;
		}
	}
}
/* End of file mission_model.php */
/* Location: ./application/controllers/mission_model.php */