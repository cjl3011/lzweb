<?php
header("Content-Type: text/html;charset=utf-8");
class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('mission_model', 'login_model', 'theme_model'));
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
	}
	
	public function index($tid = NULL){
		if($this->session->userdata['type'] === '0'){
			if($tid){
				$missions = $this->mission_model->get_by_tid($tid);
				$data['missions'] = $missions;
			}
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
}
/* End of file admin.php */
/* Location: ./application/controllers/admin.php */