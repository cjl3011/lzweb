<?php
class Login_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	
	public function get_by_uid($uid = 0){
		$query = $this->db->get_where('user', array('uid'=> $uid));
		
		if($query){
			return $query->row_array();
		}
				
	}

	public function get_by_name(){
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
		);
		
		$query = $this->db->get_where('user', array('username'=> $data['username']));
		
		if($query){
			$result = $query->row_array();
			if($result){
				if($result['password'] === $data['password']){
					return TRUE;
				} else {
					return FALSE;
				}
			}
		} else {
			return '用户名不存在';
		}
	}
}
/* End of file mission_model.php */
/* Location: ./application/controllers/mission_model.php */