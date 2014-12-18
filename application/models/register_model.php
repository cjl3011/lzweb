<?php
class Register_model extends CI_Model {

	public function __construct(){
		$this->load->database();
		$this->load->model('login_model');
	}
	
	public function set_user($result = '') {
		
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'nickname' => $this->input->post('nickname')
		);
		
		$query = $this->login_model->get_by_name();
		
		if($query){
			return 'EXIST';
		}
		
		return $this->db->insert('user', $data);
	}
}
/* End of file register_model.php */
/* Location: ./application/models/register_model.php */