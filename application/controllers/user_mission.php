<?php
class User_mission extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_mission_model');
		$this->load->model('mission_model');
		$this->load->library('session');
	}
	public function index(){
		$this->load->library('session');
		if ( ! file_exists(APPPATH.'/views/' . 'pub_mission' . '.php')){
			show_404();
		}
		$data = array(
			'title' => '我的任务列表',
			'uid' => $this->session->userdata('uid')
			);
			
		$data['user_mission'] = $this->user_mission_model->get_user_mission($data['uid']);

			$this->load->view('templates/header', $data);
			$this->load->view('user_mission');
			$this->load->view('templates/footer');
		
	}
}
		