<?php
header("Content-Type: text/html;charset=utf-8");
class Flow_count extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('flow_count_model');
		$this->load->helper('url');
	}
	
	public function index(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data['title'] = '；流量统计';
		
		
		$data['login']=$this->flow_count_model->ShowMyCounter(1);
		
		//$this->flow_count_model->Set_add($id_add['count'],1);
		
		
		$this->load->view('templates/header', $data);
		$this->load->view('flow_count', $data);
		$this->load->view('templates/footer');
	}
}