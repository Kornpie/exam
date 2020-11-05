<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
{
	parent::__construct();
	$this->load->view('navbar');
	$this->load->model('Train');
}
	public function index()
	{
		$this->load->view('welcome_message');
	}
	

	public function insert(){
		$data = array(
			't_num'=>$this->input->post('t_num'),
			'note'=>$this->input->post('note')
		);
		$data2 = array(
			's_stat'=>$this->input->post('s_stat'),
			's_out'=>$this->input->post('s_out')
		);
		$data3 = array(
			'h_to'=>$this->input->post('h_to'),
			'h_out'=>$this->input->post('h_out')
		);
		$data4 = array(
			'e_stat'=>$this->input->post('e_stat'),
			'totime'=>$this->input->post('totime')
		);
		    $this->Train->insert1($data);
			$this->Train->insert2($data2);
			$this->Train->insert3($data3);
			$this->Train->insert4($data4);
			redirect('welcome/index');
	}
  
	
	 public function show(){
		 
		$user_id['query'] = $this->Train->select();
	$this->load->view('show',$user_id);
		
	}
	
}
