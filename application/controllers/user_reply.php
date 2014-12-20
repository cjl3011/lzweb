<?php
class User_reply extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_reply_model');
		$this->load->model('mission_model');
		$this->load->library('session');
	}
	public function index(){
		$this->load->library('session');
		if ( ! file_exists(APPPATH.'/views/' . 'pub_mission' . '.php')){
			show_404();
		}
		$data = array(
			'title' => '我的回复列表',
			'uid' => $this->session->userdata('uid')
			);
			echo $data['uid'];
		$data['user_reply'] = $this->user_mission_model->get_user_mission($data['uid']);
		
		
			$this->load->view('templates/header', $data);
			$this->load->view('user_mission');
			$this->load->view('templates/footer');
		
			
			
	}
}