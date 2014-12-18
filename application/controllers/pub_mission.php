<?php
class Pub_mission extends CI_Controller {

	public function index(){
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
			$this->news_model->set_news();
			$this->load->view('templates/success');
		}
	}
	
}
/* End of file pub_mission.php */
/* Location: ./application/controllers/pub_mission.php */