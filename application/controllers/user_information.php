<?php
class User_information extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
		$this->load->model('user_information_model');
		$this->load->library('session');
	}
	public function index(){
		$this->load->library('session');
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
			$this->load->view('user_information');
			$this->load->view('templates/footer');
		
		
			//$uid = $this->session->userdata('uid');
			
			
	}
	public function delete_mission() {
		$uid = $this->session->userdata('uid');
		$user_mission =  $this->user_information_model->get_user_mission($uid);
		foreach($user_mission as $user):
		if($user['mid']!=NULL){
			$this->user_information_model->delete_mission($user['mid']);
			echo "delete successful";
		}
		else
			echo "no mission";
		endforeach;
	}
	public function delete_reply() {
		$uid = $this->session->userdata('uid');
		$user_reply = $this->user_information_model->get_user_reply($uid);
		foreach($user_reply as $reply):
		if($reply['mid']!=NULL){
			$this->user_information_model->delete_reply($reply['mid']);
			echo "delete successful";
		}
		else
			echo "no reply";
		endforeach;
		}
	
	}
	

	
	

/* End of file pub_mission.php */
/* Location: ./application/controllers/pub_mission.php */