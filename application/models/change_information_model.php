<?php
class Change_information_model extends CI_Model {

	public function __construct(){
		$this->load->database();
		$this->load->model('login_model');
	}
	
	public function change_user_information($uid=0) {
		
			$password = $this->input->post('password');
			$nickname = $this->input->post('nickname');
			
		$query = $this->login_model->get_by_uid($uid);
		
		if($query){
			$data=array(
			
			'password' => $password,
			'nickname' => $nickname);
			
			$this->db->update('user',$data);
		return $query;
		}
		else
			return 'NOEXIST';
		
	}
}
/* End of file register_model.php */
/* Location: ./application/models/register_model.php */