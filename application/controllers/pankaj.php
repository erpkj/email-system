<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pankaj extends CI_Controller {
	
	var $name;
	var $department;
	
	
	function Pankaj()
	{
			parent::__construct();	 
			$this->name="Kapil Sharma";
			$this->department="Web Development";
	}


	public function index($firstname=null, $department=null)
	{
		$data['name']= empty($firstname) ? $this->name : $firstname;
		$data['department']= empty($department) ? $this->department : $department;
		$this->load->view('pankajview',$data);
	}
	
	
	
	
	function send_email() {	
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'smtp.gmail.com',
			'smtp_port' => 587,
			'smtp_crypto'	=> 'tls',
			'smtp_user' => 'abc@xyz.com',
			'smtp_pass' => 'xxxx',
			'mailtype'  => 'html', 
			'charset'   => 'iso-8859-1'    
		);
		
		 // recipient, sender, subject, and you message
        $to =  array('abc@xyz.com');
        $from_email = 'abc@xyz.com';
        $from_name ="Pankaj";
        $subject = "Test sending email using CodeIgniter Framework";
        //$message = "This is a test email using CodeIgniter. If you can view this email, it means you have successfully send an email using CodeIgniter.";
        
		
			$this->load->library('email', $config);
			$this->load->library('parser');
			$this->email->set_newline("\r\n");
			$this->email->from($from_email, $from_name);
			$this->email->to($to);
			//$data = array();
			//$htmlMessage = $this->parser->parse('messages/email', $data, true);
			$htmlMessage = $this->load->view('Email/test', '', true);
			//$this->email->message($message);
			$this->email->subject($subject);
			$this->email->message($htmlMessage);
			 // send your email. if it produce an error it will print 'Fail to send your message!' for you
			if($this->email->send()) {
				echo "Message sent successfully!";
			}
			else {
				echo "Fail to send your message!";
			}
		}

}

