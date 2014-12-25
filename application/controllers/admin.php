<?php
header("Content-Type: text/html;charset=utf-8");
class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('mission_model', 'login_model', 'theme_model'));
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
	}
	
	public function index(){
		if($this->session->userdata['type'] === '0'){
			
			$data['title'] = '管理员';
			$data['theme'] = $this->theme_model->get();
			$data['users'] = $this->login_model->get();
			$this->load->view('templates/header', $data);
			$this->load->view('admin', $data);
			$this->load->view('templates/footer');
		}
	}
	
	public function delete($uid=NULL) {
		if($this->session->userdata['type'] === '0' && $uid) {
			$this->login_model->delete_by_uid($uid);
			$data['title'] = '管理员';
			$data['theme'] = $this->theme_model->get();
			$data['users'] = $this->login_model->get();
			$this->load->view('templates/header', $data);
			$this->load->view('admin', $data);
			$this->load->view('templates/footer');
		}
	}
	
	public function mission($tid=0){
		if($tid){
			$missions = $this->mission_model->get_by_tid($tid);
			$data['missions'] = $missions;
			$data['theme'] = $this->theme_model->get();
			$data['title'] = '管理员';
			$this->load->view('templates/header', $data);
			$this->load->view('admin', $data);
			$this->load->view('templates/footer');
		}
		
	}
}
/* End of file admin.php */
/* Location: ./application/controllers/admin.php */