<?php
class Mission_list extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mission_model');
	}

	public function index()
	{
		$data['mission'] = $this->mission_model->get_by_id();
		$data['title'] = '任务列表';

		$this->load->view('templates/header', $data);
		$this->load->view('mission_list', $data);
		$this->load->view('templates/footer');
	}
}
/* End of file mission_list.php */
/* Location: ./application/controllers/mission_list.php */