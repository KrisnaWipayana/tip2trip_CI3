<?php
	class Cadmin extends CI_Controller
	{
		public function __construct() {
        parent::__construct();
        $this->load->model('Madmin');
    }

		function tampilAkun()
		{
			$data['hasil'] = $this->Madmin->get_data();
			$this->load->view('settingakun_customer.php', $data);
		}

		function settingHotel()
		{
			$this->load->view('settinghotel.php');
		}

		// function dataPesanan()
		// {

		// }
	}
?>