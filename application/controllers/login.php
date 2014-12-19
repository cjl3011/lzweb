<?php
header("Content-Type: text/html;charset=utf-8");
class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
		$this->load->helper('url');
	}
	
	public function index(){
		//echo md5(uniqid());
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data['title'] = '用户登陆';
		$data['info'] = '';
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		
		if ($this->form_validation->run() === FALSE){
			$this->load->view('templates/header', $data);  
			$this->load->view('login', $data);
			$this->load->view('templates/footer');
		} else {
			if($this->login_model->get_by_name() === TRUE){
				$this->login_model->set_cookie();
				redirect('http://localhost/lzweb/index.php/mission_list');
			} else if ($this->login_model->get_by_name() === FALSE){
				$data['info'] = '用户名或密码不正确，请重新输入';
				$this->load->view('templates/header', $data);
				$this->load->view('login', $data);
				$this->load->view('templates/footer');
			} else {
				$data['info'] = '用户名不存在';
				$this->load->view('templates/header', $data);
				$this->load->view('login', $data);
				$this->load->view('templates/footer');
			}
		}
	}
}
/* End of file login.php */
/* Location: ./application/controllers/login.php */