<?php
class User_mission_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	
	
	public function get_user_mission($uid = 0){
			$query = $this->db->get_where('reply', array('uid'=> $uid));
			return $query->result_array();
		
		}
}
/* End of file mission_model.php */
/* Location: ./application/controllers/mission_model.php */