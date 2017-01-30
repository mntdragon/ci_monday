<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
	public function show_customers(){
		$this->load->model('Customer_model');
		$data['customers']=$this->Customer_model->getCustomers();
		$data['page'] = 'customer/show_customers';
		$this->load->view('menu/content',$data);
	}

	public function add_customers(){
		$this->load->model('Customer_model'); //add model
		//Read date when button is pressed
		$btn = $this->input->post('btnSave');
		//add new csutomer to array
		if(isset($btn)){
			$insert_data = array(
				"fname"=>$this->input->post('fn'),
				"lname"=>$this->input->post('ln')
			);
		$data['test'] = $this->Customer_model->addCustomer($insert_data); // add and call function then send data
		
		}
		$data['page'] = 'customer/add_customers';
		$this->load->view('menu/content',$data);
	}

	public function delete_customers(){
		$this->load->model('Customer_model'); //add model
		//This method will show the customers, then choose which one to delete
		$data['customers']=$this->Customer_model->getCustomers();
		$data['page'] = 'customer/delete_customers';
		$this->load->view('menu/content',$data);
	}

	public function remove_customer($chosen_id){ //chosen_id se hien thi trong /remove_customer/chosen_id khi hover link
		$this->load->model('Customer_model'); //add model
		$this->Customer_model->deleteCustomer($chosen_id);
		$this->show_customers();
	}
	public function update_customers(){
		$this->load->model('Customer_model'); //add model
		//read data, when button is pressed, update data
		$btn=$this->input->post('btnSave');
		if(isset($btn)){ //ùng để kiểm tra biến có được thiết lập hay không,, Trả về TRUE nếu tất cả các biến đều tồn tại
			$a_fname = $this->input->post('fn');
			$a_lname = $this->input->post('ln');
			$id_customers = $this->input->post('id');
			//calculate rows
			$rows = 0;
			foreach($id_customers as $a){
				$rows++;
			}
			//update database row by row
			for($x = 0; $x < $rows; $x++){
				$update_data = array( //read 1st row from the form, then call updateCustomer then so on for 2nd row
					"fname" => $a_fname[$x],
					"lname" => $a_lname[$x]
				);
				$this->Customer_model->updateCustomer($update_data, $id_customers[$x]); //create function in customer_model
			}
			
			//$this->show_customers();
		}
		
		$data['customers']=$this->Customer_model->getCustomers();
		$data['page'] = 'customer/update_customers';
		$this->load->view('menu/content',$data);

	}
}