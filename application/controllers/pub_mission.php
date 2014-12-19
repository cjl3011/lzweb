<?php
header("Content-Type: text/html;charset=utf-8");
class Pub_mission extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pub_mission_model');
		$this->load->library('session');
	}
	public function index(){
		$this->load->library('session');
		if ( ! file_exists(APPPATH.'/views/' . 'pub_mission' . '.php')){
			show_404();
		}
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		
		$data['title'] = '发布主题';

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('content', 'Content', 'required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('pub_mission');
			$this->load->view('templates/footer');
		}
		else
		{
			$uid = $this->session->userdata('uid');
			if($this->pub_mission_model->set_mission($uid)){
				echo 'write right';
			} else {
				echo 'write error';
			}
		}
	}
	
}
/* End of file pub_mission.php */
/* Location: ./application/controllers/pub_mission.php */