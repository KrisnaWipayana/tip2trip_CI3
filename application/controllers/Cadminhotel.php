<?php
	class Cadminhotel extends CI_Controller
	{
		public function __construct() {
        parent::__construct();
        $this->load->model('Madminhotel');
        $this->load->model('Mhotel');
    }

		function tampilPesanan()
		{
			$data['hasil'] = $this->Madminhotel->get_data();
			$this->load->view('datapemesanan.php', $data);
		} 

		function verifikasi($idTransaksi)
		{
			$this->Madminhotel->verifikasi($idTransaksi);
			redirect('Cadminhotel/tampilPesanan');
		}

		function tampilHotel(){
			$data['konten']=$this->load->view('data_akunhotel','',TRUE);
			$hasiltable['hasil']=$this->Mhotel->tampildataHotel();
			$data['table']=$this->load->view('data_akunhotel',$hasiltable,TRUE);
			$this->load->view('data_akunhotel',$data);	
		}
		
	}
?>