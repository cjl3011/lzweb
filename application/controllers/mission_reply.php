<?php
header("Content-Type: text/html;charset=utf-8");
class Mission_reply extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mission_model');
		$this->load->model('reply_model');
		$this->load->model('login_model');
	}
	
	public function index($mid = 0){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('content', 'Content', 'required');
		
		$data = array(
			'title' => '任务详情',
			'mid'	=> $mid,
			'mission' => $this->mission_model->get_by_mid($mid),
			'reply'	=> $this->reply_model->get_by_mid($mid),
		);
		$data['pub_user'] = $this->login_model->get_by_uid($data['mission']['uid']);
		
		$this->load->view('templates/header', $data);
		$this->load->view('mission_reply', $data);
		$this->load->view('templates/footer');
	}
	
	public function reply(){
		$mid = $this->input->get('mid');
		echo $this->input->post('content');

	}
}
/* End of file mission_list.php */
/* Location: ./application/controllers/mission_list.php */