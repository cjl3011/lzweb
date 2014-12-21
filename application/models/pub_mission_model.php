<?php
class Pub_mission_model extends CI_Model {

	public function __construct(){
		$this->load->database();
		$this->load->model('theme_model');
	}
	public function set_mission($uid) {
		$theme_name = $this->input->post('theme');
		
		$data = array(
			'uid' => $uid,
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'payment' => $this->input->post('payment'),
		);
		
		$result = $this->theme_model->get_by_name($theme_name);
		if($result){
			$data['tid'] =$result['tid'];
		} else {
			$this->db->insert('theme', array('name'=>$theme_name));
			$result = $this->theme_model->get_by_name($theme_name);
			$data['tid'] =$result['tid'];
		}
		
		return $this->db->insert('mission', $data);
	}
}

/* End of file mission_model.php */
/* Location: ./application/controllers/mission_model.php */