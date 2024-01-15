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
			$hasiltable['hasil']=$this->Mhotel->tampildataHotel();
			// $data['table']=$this->load->view('pendaftaran_table',$hasiltable,TRUE);
			$this->load->view('settinghotel',$data);	
		}
		
		function simpandataHotel() 
		{
			$this->Mhotel->simpandataHotel();
			redirect('Chotel/registHotel');	
		}
		
		function hapusdataHotel($idHotel)
		{
			$this->Mhotel->hapusdataHotel($idHotel);
			redirect('Chotel/registHotel');
		}
		 
		function editdataHotel($idHotel)
		{
			$this->Mhotel->editdataHotel($idHotel);
			// var_dump($idUSer);
			// die();	 
		}	




		function registKamar(){
			$data['konten']=$this->load->view('settinghotel','',TRUE);
			$hasiltable['hasil']=$this->Mhotel->tampildataKamar();
			// $data['table']=$this->load->view('pendaftaran_table',$hasiltable,TRUE);
			$this->load->view('settinghotel',$data);	
		}
		
		function simpandataKamar() 
		{
			$this->Mhotel->simpandataKamar();
			redirect('Chotel/registHotel');	
		}
		
		function hapusdataKamar($idKamar)
		{
			$this->Mhotel->hapusdataKamar($idKamar);
			redirect('Chotel/registHotel');
		}
		 
		function editdataKamar($idKamar)
		{
			$this->Mhotel->editdataKamar($idKamar);
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