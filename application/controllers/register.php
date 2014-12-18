<?php
header("Content-Type: text/html;charset=utf-8");
class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('register_model');
	}
	
	public function index()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = '用户注册';

		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_rules('confirm_password', 'comfirm_password', 'required');
		$this->form_validation->set_rules('nickname', 'nickname', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);  
			$this->load->view('register');
			$this->load->view('templates/footer');

		}
		else
		{
			
			if($this->register_model->set_user() === 'EXIST'){
				echo '用户名已存在！';
			} else {
				echo '注册成功';
			}
			
		}
	}
}
/* End of file register.php */
/* Location: ./application/controllers/register.php */