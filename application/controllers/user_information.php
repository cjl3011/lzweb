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
	/*public function mission(){
		$this->load->library('session');
		if ( ! file_exists(APPPATH.'/views/' . 'pub_mission' . '.php')){
			show_404();
		}
		$uid = $this->session->userdata('uid');
		$data = array(
			'title' => '个人中心',
			'user_mission' =>  $this->user_information_model->get_user_mission($uid)
			);
			
		//$data['user_mission'] = $this->user_information_model->get_user_mission($data['uid']);

			$this->load->view('templates/header', $data);
			$this->load->view('user_information',$data);
			$this->load->view('templates/footer');
		
	}
	public function reply(){
		$this->load->library('session');
		if ( ! file_exists(APPPATH.'/views/' . 'pub_mission' . '.php')){
			show_404();
		}
		$data = array(
			'title' => '个人中心',
			'uid' => $this->session->userdata('uid')
			);
			echo $data['uid'];
		$data['user_reply'] = $this->user_information_model->get_user_reply($data['uid']);
		
		
			$this->load->view('templates/header', $data);
			$this->load->view('user_information',$data);
			$this->load->view('templates/footer');
		
			
			
	}*/
	
		

	
	
}
/* End of file pub_mission.php */
/* Location: ./application/controllers/pub_mission.php */