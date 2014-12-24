<?php
class Find_password extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('find_password_model');
	}
	public function index(){
		$this->load->library('session');
		if ( ! file_exists(APPPATH.'/views/' . 'pub_mission' . '.php')){
			show_404();
		}
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('username', 'Username', 'required');
	
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('find_password');
			$this->load->view('templates/footer');
		}
		else
		{
			if($this->find_password_model->get_user_password()==='NOEXIST')
				echo "你所查找的用户不存在";
			else{
				$query =$this->find_password_model->get_user_password();
				echo $query;
			}
				
		}
				
	}
}