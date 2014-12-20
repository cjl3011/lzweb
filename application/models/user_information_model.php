<?php
class user_information_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	
	public function get_by_name($name = 0){
		if($name){
			$query = $this->db->get_where('mission', array('name'=> $name));
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	public function get(){
		$query = $this->db->get('mission');
		return $query->result_array();
	}

	public function get_by_mid($mid = 0){
		if($mid){
			$query = $this->db->get_where('mission', array('mid'=> $mid));
			return $query->row_array();
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