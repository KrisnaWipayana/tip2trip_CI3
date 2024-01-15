<?php 

class Cbooking extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Mbooking');
    }

    public function booking()
    {
        $data['tipeKamar'] = $this->Mbooking->get_jenis();
        $this->load->view('detail.php', $data);
    }

    function simpanBooking() 
        {
            $this->Mbooking->simpandata();
            redirect('Cbooking/booking');  
        }



    function tampilBooking()
    {
        $data['hasil'] = $this->Mbooking->get_data();
        $this->load->view('myBooking.php', $data);
        }
    }
    
 ?>