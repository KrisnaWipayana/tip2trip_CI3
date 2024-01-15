<?php 
class Mbooking extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_jenis() {
        $query = $this->db->get('tb_kamar');
        return $query->result();
	    }


	 function simpandata()
		{
			$data=$_POST;
			$idTransaksi=$data['idTransaksi'];
			$namaLengkap=$data['namaLengkap'];

				//simpan
			$this->db->insert('tb_transaksi',$data);
			$this->session->set_flashdata('pesan','Pesanan dibuat, cek transaksi pada page My Booking');	
		}

		public function get_data() {
        $query = $this->db->get('tb_transaksi');
        // $sql="SELECT * FROM tb_kegiatan WHERE kode_kegiatan='".$kode_kegiatan."'";
        // $query=$this->db->query($sql);
        // return $query->result();
        if($query->num_rows()>0)
            {
                foreach($query->result() as $data)
                {
                    $hasil[]=$data; 
                }   
            }
            else
            {
                $hasil="";  
            }
            return $hasil;
    }

    	public function get_hotel() {
        $query = $this->db->get('tb_hotel');
        // $sql="SELECT * FROM tb_kegiatan WHERE kode_kegiatan='".$kode_kegiatan."'";
        // $query=$this->db->query($sql);
        // return $query->result();
        if($query->num_rows()>0)
            {
                foreach($query->result() as $data)
                {
                    $hasil[]=$data; 
                }   
            }
            else
            {
                $hasil="";  
            }
            return $hasil;
    }
}
?>