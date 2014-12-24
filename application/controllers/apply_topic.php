<?php
header("Content-Type: text/html;charset=utf-8");
class Apply_topic extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('apply_topic_model');
	}
	public function index(){
		if ( ! file_exists(APPPATH.'/views/' . 'pub_mission' . '.php')){
			show_404();
		}
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		
		$data['title'] = '申请主题';

		$this->form_validation->set_rules('theme', 'Theme', 'required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('apply_topic');
			$this->load->view('templates/footer');
		}
		else
		{
			if($this->apply_topic_model->set_apply()){
				echo 'write right';
			} else {
				echo 'write error';
			}
		}
	}
	
}
/* End of file pub_mission.php */
/* Location: ./application/controllers/pub_mission.php */