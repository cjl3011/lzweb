<?php
class Mission_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	
	public function get($offset=0, $num=0){
		if($num){
			$this->db->order_by("pubtime", "desc");
			$query = $this->db->get('mission', $num, $offset);
			return $query->result_array();
		} else {
			$query = $this->db->get('mission');
			return $query->result_array();
		}
	}

	public function get_all(){
		$query = $this->db->get('mission');
		return $query->result_array();
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
	
	public function set_goodcount($mid) {
		$goodcount = $this->get_by_mid($mid)['goodcount'];
		$data = array(
			'goodcount' => $goodcount+1,
		);
		return $this->db->update('mission', $data, array('mid' => $mid));
	}
	
	public function set_grade($mid) {
		$grade = $this->get_by_mid($mid)['grade'];
		$data = array(
			'grade' => $grade,
		);
		return $this->db->update('mission', $data, array('mid' => $mid));
	}
	
	public function set_last_reply_time($mid=NULL, $last_time=NULL) {
		if($mid && $last_time){
			$this->db->where('mid', $mid);
			return $this->db->update('mission', array('last_reply_time'=>$last_time));
		}
	}
}
/* End of file mission_model.php */
/* Location: ./application/controllers/mission_model.php */