<?php
header("Content-Type: text/html;charset=utf-8");
class Mission_reply extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model(array('mission_model', 'login_model', 'reply_model','theme_model'));
		$this->load->helper('url');
	}
	
	public function index($mid = 0){
		$replies = $this->reply_model->get_by_mid($mid);
	
		foreach($replies as $key=>$reply) {
			if($reply['hidden']) {
				$replies[$key]['nickname'] = '匿名';
			}
		}
		$data = array(
			'title' => '任务详情',
			'mid'	=> $mid,
			'mission' => $this->mission_model->get_by_mid($mid),
			'reply'	=> $replies,
			'theme' => $this->theme_model->get()
		);
		$data['pub_user'] = $this->login_model->get_by_uid($data['mission']['uid']);
		$data['theme'] = $this->theme_model->get();
		
		$this->load->view('templates/header', $data);
		$this->load->view('mission_reply', $data);
		$this->load->view('templates/footer');
	}
	
	public function reply(){
		if($this->reply_model->set_reply() === TRUE){
			echo json_encode(array('result'=>TRUE));
		}else{
			echo json_encode(array('result'=>FALSE));
		}
	}
	
	public function add_goodcount(){
		$rid = $this->input->get('rid');
		$mid = $this->input->get('mid');
		
		if($rid){
			if($this->reply_model->set_goodcount($rid) === TRUE){
				redirect(base_url('mission_reply/index/' . $mid));
			}else{
				echo json_encode(array('result'=>FALSE));
			}
		} else {
			if($this->mission_model->set_goodcount($mid) === TRUE){
				redirect(base_url('mission_reply/index/' . $mid));
			}else{
				echo json_encode(array('result'=>FALSE));
			}
		}
	}
	
	public function add_grade(){
		$mid = $this->input->post('mid');
		$point = $this->input->post('point');
		if($this->mission_model->set_grade($mid, $point) === TRUE){
			echo json_encode(array('result'=>TRUE));
		}else{
			echo json_encode(array('result'=>FALSE));
		}
		
	}
}
/* End of file mission_list.php */
/* Location: ./application/controllers/mission_list.php */