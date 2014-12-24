<?php
header("Content-Type: text/html;charset=utf-8");
class Mission_list extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('mission_model', 'login_model', 'reply_model','theme_model'));
		$this->load->helper('url');
	}

	public function index()
	{
		$missions = $this->mission_model->get();
		$data['theme'] = $this->theme_model->get();
		foreach($missions as $key => $mission){
			$user = $this->login_model->get_by_uid($mission['uid']);
			$missions[$key]['nickname'] = $user['nickname'];
			$missions[$key]['reply_count'] = count($this->reply_model->get_by_mid($mission['mid']));
		}
		$data['title'] = '任务列表';
		$data['mission'] = $missions;

		$this->load->view('templates/header', $data);
		$this->load->view('mission_list', $data);
		$this->load->view('templates/footer');
	}
}
/* End of file mission_list.php */
/* Location: ./application/controllers/mission_list.php */