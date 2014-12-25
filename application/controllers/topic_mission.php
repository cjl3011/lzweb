<?php
header("Content-Type: text/html;charset=utf-8");
class Topic_mission extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('html');
		$this->load->model('theme_model');
		$this->load->model('mission_model');
		$this->load->helper('url');
	}

	public function array_sort($arr,$keys,$type='arsc')
	{ 
		$keysvalue = $new_array = array();
		foreach ($arr as $k=>$v){
			$keysvalue[$k] = $v[$keys];
		}
		if($type == 'arsc')
		{
		arsort($keysvalue);
		}else{
		asort($keysvalue);
		}
		reset($keysvalue);
		foreach ($keysvalue as $k=>$v){
			$new_array[$k] = $arr[$k];
		}
		return $new_array; 
	} 

	public function index($tid = 1)
	{
		$mission = $this->mission_model->get_by_tid($tid);
		$data['theme'] = $this->theme_model->get();

		$data['pubList'] = $this->array_sort($this->mission_model->get_by_tid($tid),'pubtime');

		$this->load->view('templates/header', $data);
		$this->load->view('topic_mission', $data);
		$this->load->view('templates/footer');;

	}


}
/* End of file mission_list.php */
/* Location: ./application/controllers/mission_list.php */