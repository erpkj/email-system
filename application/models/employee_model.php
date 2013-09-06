<?php
class Employee_model extends CI_Model{
		
	   function __construct()
		{
			$this->load->database();
			parent::__construct();
		}

	
	
	function get_all_employee()
	{
		$query=$this->db->get('employee');
		return $query->result_array();
	}
	
	function get_single_employee()
	{		
		$query=$this->db->get_where('employee',array('id'=>1));
		return $query->row_array();
	}
	
	function save($table, $data)
	{
		if($this->db->insert($table,$data))
		{
			return true;
		}
		return false;
	}
	
	function update($id,$data)
	{	
	
	}
}
