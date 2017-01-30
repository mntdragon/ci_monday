<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
//example method 

	public function sayhello(){
		echo 'This is Test Controller and the method is sayhello';
	}
//index method
	public function index(){
		echo 'This is index-method';
	}

public function first(){
	$data['fname']='Jim';
	$data['lname']='Jones';
	$this->load->view('test/first',$data);
}

public function names() {
	$this->load->model('Test_model');
	$data['customers']=$this->Test_model->getNames();

	$this->load->view('test/names',$data);
}
}