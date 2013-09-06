<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee extends CI_Controller {

	public function __construct()
		   {
			   	parent::__construct();
				$this->load->model('Employee_model');
		   }

	public function index()
	{	
		$data['query']=$this->Employee_model->get_single_employee();
		$this->load->view('employeeview',$data);		
	}
	
	
	public function employee_list()
	{			
		$data['query']=$this->Employee_model->get_all_employee();
		$this->load->view('employee_list_view',$data);		
	}
	
	public function single_employee()
	{		
		$data['query']=$this->Employee_model->get_single_employee();
		$this->load->view('single_employee_view',$data);		
	}
	
	public function new_employee()
	{		
		if(isset($_POST['mysubmit']))
		{
			
			/*
			 * $config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '100';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload())
			{
				$error = array('error' => $this->upload->display_errors());
				print_r($error); exit;
				//$this->load->view('upload_form', $error);
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());

				//$this->load->view('upload_success', $data);
			}
		*/
			$name=$_POST['name'];
			$department=$_POST['department'];
			$data = array(
				'name' => $name ,
				'department' => $department 
			);
			$this->Employee_model->save('employee',$data);
		}
		
		$this->load->helper('form');
		$this->load->view('new_employee_view');
	}	
}
