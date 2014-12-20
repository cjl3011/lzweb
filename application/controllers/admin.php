<?php
header("Content-Type: text/html;charset=utf-8");
class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('mission_model');
		$this->load->model('login_model');
		$this->load->model('theme_model');
		$this->load->library('session');
	}
	
	public function index(){
		if($this->session->userdata['type'] === '0'){
			$data = array(
				'title' => '管理员',
				'theme' => $this->theme_model->get(),
				'users' => $this->login_model->get(),
			);
			
			$this->load->view('templates/header', $data);
			$this->load->view('admin', $data);
			$this->load->view('templates/footer');
		}
	}
	
	public function delete($uid=NULL) {
		if($this->session->userdata['type'] === '0' && $uid) {
			echo $this->login_model->delete_by_uid($uid);
		}
	}
	
	public function mission($tid=NULL) {
		if($tid) {
			$data = array(
			'title' => '管理员',
			'mission' => $this->mission_model->get_by_tid($tid),
		);
		
			$this->load->view('templates/header', $data);
			$this->load->view('admin', $data);
			$this->load->view('templates/footer');
		}
	}
}
/* End of file admin.php */
/* Location: ./application/controllers/admin.php */