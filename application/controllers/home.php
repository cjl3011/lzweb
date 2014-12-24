<?php
header("Content-Type: text/html;charset=utf-8");
class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('theme_model');
		$this->load->model('mission_model');
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

	public function index()
	{
		$this->load->helper('html');
		$data['mission'] = $this->mission_model->get_all();
		$data['theme'] = $this->theme_model->get();

		$data['payList'] = $this->array_sort($this->mission_model->get_all(),'payment');
		$data['pubList'] = $this->array_sort($this->mission_model->get_all(),'pubtime');
		$data['goodList'] = $this->array_sort($this->mission_model->get_all(),'goodcount');
		$data['gradeList'] = $this->array_sort($this->mission_model->get_all(),'grade');

		$this->load->view('templates/header',$data);
		$this->load->view('home', $data);
		$this->load->view('templates/footer');

	}


}
/* End of file mission_list.php */
/* Location: ./application/controllers/mission_list.php */