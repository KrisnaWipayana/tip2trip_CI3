<?php 

class Madminhotel extends CI_Model {

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
    function verifikasi($idTransaksi)
        {
            $sql = "UPDATE `tb_transaksi` SET `statusPesanan` = 'Sudah diverifikasi' WHERE `tb_transaksi`.`idTransaksi` = '".$idTransaksi."'";  
            // ------delete from tb_transaksi where idTransaksi='".$idTransaksi."'";
            $this->db->query($sql);
        }
}
?>