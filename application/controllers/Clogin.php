<?php 
	class Clogin extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Mlogin');
		}
		function formlogin() // form login
		{
			$data['konten']=$this->load->view('login','',TRUE);
			$this->load->view('login',$data);	
		}
		function proseslogin() //button login
		{
			$this->Mlogin->proseslogin();	
		}
		function logout() // button logout
		{
			$this->session->sess_destroy();
			redirect('Cawal/tampilawal');
		}

	}
 ?>