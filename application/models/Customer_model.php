<?php
Class Customer_model extends CI_model {
	public function getCustomers(){
		$this->db->select('*');
		$this->db->from('Customers');
		return $this->db->get()->result_array();
	}
	public function addCustomer($insert_data){
		$this->db->insert('Customers',$insert_data); //data come from customer.php, phan $this->Customer_model->addCustomer($insert_data);
		if($this->db->affected_rows() > 0){ //reseting data when inserting new rows
			return true;
		}
		else{
			return false;
		}
	}

	public function deleteCustomer($chosen_id){
		$this->db->where('id_customers', $chosen_id); //need to be correct name in database
		$this->db->delete('Customers');
	
	}
	
	public function updateCustomer($update_data, $id_customers){
		$this->db->where('id_customers', $id_customers);
		$this->db->update('Customers', $update_data); // update(table name, data)

	}
}