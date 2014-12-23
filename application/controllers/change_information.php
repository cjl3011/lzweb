<?php
header("Content-Type: text/html;charset=utf-8");
class Change_information extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('change_information_model');
		$this->load->library('session');
	}
	
	public function index(){
		$this->load->library('session');
		if ( ! file_exists(APPPATH.'/views/' . 'pub_mission' . '.php')){
			show_404();
		}
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		
		$uid = $this->session->userdata('uid');
		echo $uid;
		
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('nickname', 'Nickname', 'required');
	
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header',$uid);
			$this->load->view('change_information',$uid);
			$this->load->view('templates/footer');
		}
		else
		{
			
			if($this->change_information_model->change_user_information($uid)==='NOEXIST')
				echo "你所查找的用户不存在";
			else{
				$query=$this->change_information_model->change_user_information($uid);
				echo "change successful";

			}
				
		}
		
	}
}
