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
	
	public function	get_user_info($username){
		$query = $this->db->get_where('user', array('username'=> $username));
		$result = $query->row_array();
		return $result;
	}
		
	public function set_cookie(){
			$user = $this->login_model->get_user_info($this->input->post('username'));
			$this->load->library('session');
			//我的config中的$config['encryption_key'] = '07760bd492ea3974d8cab8dc6e969186';
			
			$newdata = array(
                   'uid'  => $user['uid'],
				   'nickname' => $user['nickname'],
               );
			$this->session->set_userdata($newdata);
	}
	
}

/* End of file login_model.php */
/* Location: ./application/controllers/login_model.php */