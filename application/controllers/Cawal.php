<?php
	class Cawal extends CI_Controller
	{
		function tampilawal()
		{
			$this->load->view('index.php');	
		}

		function afterLogin()
		{
			$data = array();
			$level=$this->session->userdata('status');

			if ($level == "Admin"){
				$this->load->view('admint2t.php',$data);	
			}else if($level == "Member"){
				$this->load->view('index.php',$data);
			}else if($level == "Pihak hotel"){
				$this->load->view('dashboard_admin.php',$data);
			}else if($level == ""){
				$this->load->view('index.php',$data);
			}
		}

		function tampilcontact()
		{
			$this->load->view('');
		}
		function tampilabout()
		{
			$this->load->view('');
		}	
	}
?>