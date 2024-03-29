<?php
class Theme_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	
	public function get(){
		$query = $this->db->get('theme');
		return $query->result_array();
	}

	public function get_by_tid($tid = 0){
		if($tid){
			$query = $this->db->get_where('theme', array('tid'=> $tid));
			return $query->row_array();
		} else {
			return NULL;
		}
	}
	
	public function get_by_name($name = NULL){
		if($name){
			$query = $this->db->get_where('theme', array('name'=> $name));
			return $query->row_array();
		} else {
			return NULL;
		}
	}
}
/* End of file theme_model.php */
/* Location: ./application/models/theme_model.php */