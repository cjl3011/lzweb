<?php
class User_information_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	
	public function get_user_mission($uid = 0){
			$query = $this->db->get_where('mission', array('uid'=> $uid));
			return $query->result_array();
		
		}
	public function get_user_reply($uid = 0){
			$query = $this->db->get_where('reply', array('uid'=> $uid));
			return $query->result_array();
		
		}
	public function delete_mission($mid=NULL) {
			return $this->db->where('mid', $mid)->delete('mission');
		}
	public function delete_reply($mid=NULL) {
			return $this->db->where('mid', $mid)->delete('reply');
		} 
	}
/* End of file mission_model.php */
/* Location: ./application/controllers/mission_model.php */