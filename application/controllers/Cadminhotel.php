<?php
	class Cadminhotel extends CI_Controller
	{
		function tampilPesanan()
		{
			$this->load->view('datapemesanan.php');
		}

		function settingHotel()
		{
			$this->load->view('settinghotel.php');
		}
	}
?>