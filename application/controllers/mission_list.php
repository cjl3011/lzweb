<?php
header("Content-Type: text/html;charset=utf-8");
class Mission_list extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mission_model');
	}

	public function index($page=NULL)
	{
		$num = 2;
		$total = $this->mission_model->count_result();
		$pagenum = ceil($total/$num);
		If($page>$pagenum || $page === 0){
			echo "Error : Can Not Found The page .";
			exit;
		}
		$offset=($page-1)*$num; 
		$info = $this->mission_model->get_page_info($num, $offset);
		$data['mission'] = $this->mission_model->get();
		$data['title'] = '任务列表';

		$this->load->view('templates/header', $data);
		$this->load->view('mission_list', $data);
		$this->load->view('templates/footer');
	}
}
/* End of file mission_list.php */
/* Location: ./application/controllers/mission_list.php */