<?php
class Apply_topic_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	public function set_apply() {
		$data['applyTopic'] = $this->input->post('theme');
		
		return $this->db->insert('apply', $data);
	}
}

/* End of file mission_model.php */
/* Location: ./application/controllers/mission_model.php */