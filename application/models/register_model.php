<?php
class Register_model extends CI_Model {

	public function __construct(){
		$this->load->database();
		$this->load->model('login_model');
	}
	
	public function set_user() {
		
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
		);
		
		$query = $this->db->get_where('user', array('username'=> $data['username']));
		
		if($query->row_array()){
			return 'EXIST';
		}
		
		return $this->db->insert('user', $data);
	}
}
/* End of file register_model.php */
/* Location: ./application/models/register_model.php */