<?php
header("Content-Type: text/html;charset=utf-8");
class Pub_mission extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pub_mission_model');
		$this->load->model('theme_model');
		$this->load->library('session');
		$this->load->helper('url');
	}
	
	public function index(){
		$this->load->library('session');
		$data['theme'] = $this->theme_model->get();
		if ( ! file_exists(APPPATH.'/views/' . 'pub_mission' . '.php')){
			show_404();
		}
		$data['title'] = '发布任务';
		$data['theme'] = $this->theme_model->get();
		$this->load->view('templates/header', $data);
		$this->load->view('pub_mission');
		$this->load->view('templates/footer');
	}
	
	public function get_result(){
		$uid = $this->session->userdata('uid');
		if($this->pub_mission_model->set_mission($uid)){
			echo json_encode(array('result' => TRUE));
		} else {
			echo json_encode(array('result' => FALSE));
		}
	}
	
}
/* End of file pub_mission.php */
/* Location: ./application/controllers/pub_mission.php */