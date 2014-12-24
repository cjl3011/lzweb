<?php
class Find_password_model extends CI_Model {

	public function __construct(){
		$this->load->database();
		$this->load->model('login_model');
	}
	
	public function get_user_password() {
		
			$username = $this->input->post('username');
		
		$query = $this->login_model->get_user_info($username);
		
		if($query){
			return $query['password'];
		}
		else
			return 'NOEXIST';
		
	}
}
/* End of file register_model.php */
/* Location: ./application/models/register_model.php */