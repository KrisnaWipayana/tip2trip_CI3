<?php
	class Chotel extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Mhotel');
		}
		
		// function formdaftar()
		// {
		// 	$data['konten']=$this->load->view('resetpass','',TRUE);
		// 	// $hasiltable['hasil']=$this->mpendaftaran->tampildata();
		// 	// $data['table']=$this->load->view('pendaftaran_table',$hasiltable,TRUE);
		// 	$this->load->view('resetpass',$data);	
		// }

		function registHotel(){
			$data['konten']=$this->load->view('settinghotel','',TRUE);
			$hasiltable['hasil']=$this->Mhotel->tampildata();
			$data['table']=$this->load->view('pendaftaran_table',$hasiltable,TRUE);
			$this->load->view('settinghotel',$data);	
		}
		
		function simpandata() 
		{
			$this->Mhotel->simpandata();
			redirect('Chotel/registHotel');	
		}
		
		function hapusdata($idUser)
		{
			$this->Mhotel->hapusdata($idUser);
			redirect('Chotel/registHotel');
		}
		 
		function editdata($idUser)
		{
			$this->Mhotel->editdata($idUser);
			// var_dump($idUSer);
			// die();	 
		}	

		// function as()
		// {
		// 	var_dump('test');
		// 	die();
		// }
	}
?>