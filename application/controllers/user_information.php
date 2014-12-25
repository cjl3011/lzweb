<?php
class User_information extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('login_model');
		$this->load->model('user_information_model');
		$this->load->library('session');
	}
	public function index(){
		
		$this->load->helper('html');
		
		if ( ! file_exists(APPPATH.'/views/' . 'pub_mission' . '.php')){
			show_404();
		}
		$uid = $this->session->userdata('uid');
		$data = array(
			'title' => '个人中心',
			'login_user' => $this->login_model->get_by_uid($uid),
			'user_mission' =>  $this->user_information_model->get_user_mission($uid),
			'user_reply' => $this->user_information_model->get_user_reply($uid)
			
			);
		//$data['login_user'] = $this->login_model->get_by_uid($data['uid']);
	
		
			$this->load->view('templates/header', $data);
			$this->load->view('user_information',$data);
			$this->load->view('templates/footer');
		
		
			//$uid = $this->session->userdata('uid');
			
			
	}
	public function delete_mission($mid=0) {
			if($mid)
				echo $this->user_information_model->delete_mission($mid);
		
	}
	public function delete_reply($mid) {
			if($mid)
				echo $this->user_information_model->delete_reply($mid);
	
	}
	public function change_password(){
					
				$uid = $this->session->userdata('uid');	
				$this->user_information_model->set_password($uid);
				echo json_encode(array('result' => TRUE));
	}
}
	

	
	

/* End of file pub_mission.php */
/* Location: ./application/controllers/pub_mission.php */