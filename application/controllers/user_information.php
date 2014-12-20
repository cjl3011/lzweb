<?php
class User_information extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
		$this->load->model('mission_model');
		$this->load->library('session');
	}
	public function index(){
		$this->load->library('session');
		if ( ! file_exists(APPPATH.'/views/' . 'pub_mission' . '.php')){
			show_404();
		}
		$data = array(
			'title' => '个人信息',
			'uid' => $this->session->userdata('uid')
			);
		$data['login_user'] = $this->login_model->get_by_uid($data['uid']);
	
		
			$this->load->view('templates/header', $data);
			$this->load->view('user_information');
			$this->load->view('templates/footer');
		
		
			$uid = $this->session->userdata('uid');
			
			
	}
		

	
	
}
/* End of file pub_mission.php */
/* Location: ./application/controllers/pub_mission.php */