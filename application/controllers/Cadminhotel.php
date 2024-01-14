<?php
	class Cadminhotel extends CI_Controller
	{
		public function __construct() {
        parent::__construct();
        $this->load->model('Madminhotel');
    }

		function tampilPesanan()
		{
			$data['hasil'] = $this->Madminhotel->get_data();
			$this->load->view('datapemesanan.php', $data);
		}

		// function settingHotel()
		// {
		// 	$this->load->view('settinghotel.php');
		// }
		function verifikasi($idTransaksi)
		{
			$this->Madminhotel->verifikasi($idTransaksi);
			redirect('Cadminhotel/tampilPesanan');
		}
		
	}
?>