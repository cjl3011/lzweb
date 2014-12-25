<?php
header("Content-Type: text/html;charset=utf-8");
class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('register_model');
	}
	
	public function get_result(){
		$reslut = $this->register_model->set_user();
		if($reslut === TRUE){
			echo json_encode(array('result' => TRUE));
		} else if ($reslut === 'EXIST'){
			echo json_encode(array('result' => 2));
		} else {
			echo json_encode(array('result' => FALSE));
		}
	}
}
/* End of file register.php */
/* Location: ./application/controllers/register.php */