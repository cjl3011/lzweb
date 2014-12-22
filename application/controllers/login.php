<?php
header("Content-Type: text/html;charset=utf-8");
class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
		$this->load->helper('url');
	}
	
	public function index(){
		$data['title'] = '用户登陆';
		$data['info'] = '';
		  
		$this->load->view('login', $data);
		$this->load->view('templates/footer');
	}
	
	public function get_result(){
		if($this->login_model->get_by_name() === TRUE){
			$this->login_model->set_cookie();
			echo json_encode(array('result' => TRUE));
		} else if ($this->login_model->get_by_name() === FALSE){
			echo json_encode(array('result' => FALSE));
		}

	}
}
/* End of file login.php */
/* Location: ./application/controllers/login.php */