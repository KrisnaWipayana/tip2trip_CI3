<?php
	class Cdaftar extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Mdaftar'); 
		}
		
		// function formdaftar()
		// {
		// 	$data['konten']=$this->load->view('resetpass','',TRUE);
		// 	// $hasiltable['hasil']=$this->mpendaftaran->tampildata();
		// 	// $data['table']=$this->load->view('pendaftaran_table',$hasiltable,TRUE);
		// 	$this->load->view('resetpass',$data);	
		// }

		function registacc(){
			$data['konten']=$this->load->view('daftar','',TRUE);
			// $hasiltable['hasil']=$this->Mdaftar->tampildata();
			// $data['table']=$this->load->view('pendaftaran_table',$hasiltable,TRUE);
			$this->load->view('daftar',$data);	
		}
		
		function simpandata()
		{
			$this->Mdaftar->simpandata();
			redirect('Cdaftar/registacc');	
		}
		
		function hapusdata($idUser)
		{
			$this->Mdaftar->hapusdata($idUser);
			redirect('Cdaftar/registacc');
		}
		 
		// function editdata($idUser)
		// {
		// 	$this->Mdaftar->editdata($idUser);	
		// }	
	}
?>