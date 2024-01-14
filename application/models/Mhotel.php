<?php
	class Mhotel extends CI_Model
	{
		
		// function buatpwd()
		// {
		// 	$kata="ABCDEFGHIJKLMNPQRSTUVWXYZ123456789";
		// 	$password=substr(str_shuffle($kata),0,4);
		// 	return $password;
		// }
		
		function simpandata()
		{
			$data=$_POST;
			// $email=$data['email'];
			// $password=$data['password'];
			
			// $data['email']=$email;
			// $data['password']=$password;
			
			$idHotel=$data['idHotel'];
			$lokasiHotel=$data['lokasiHotel'];

			if ($idHotel=="")
			{
				//simpan
				$this->db->insert('tb_hotel',$data);
				$this->session->set_flashdata('pesan','Data sudah disimpan!');	
			}
			else
			{
				//edit	
				$Kode=array(
					'idHotel'=>$idHotel
				);
				$this->db->where($Kode);
				$this->db->update('tb_hotel',$data);
				$this->session->set_flashdata('pesan','Data sudah diedit!');
			}
		}
		
		function tampildata()
		{
			$sql="select * from tb_hotel order by idHotel";
			$query=$this->db->query($sql);
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
		
		function hapusdata($idHotel)
		{
			$sql="delete from tb_hotel where idHotel='".$idHotel."'";
			$this->db->query($sql);
		}
		
		function editdata($idHotel)
		{
			$sql="select * from tb_hotel where idHotel='".$idHotel."'";
			$query=$this->db->query($sql);
			if ($query->num_rows()>0)
			{
				$data=$query->row(); 
				echo "<script>$('#idHotel').val('".$data->idHotel."');</script>";
				echo "<script>$('#namaLengkap').val('".$data->namaLengkap."');</script>";	
				echo "<script>$('#email').val('".$data->email."');</script>";
				echo "<script>$('#password').val('".$data->password."');</script>";
				echo "<script>$('#noTelp').val('".$data->noTelp."');</script>";
				echo "<script>$('#tanggalLahir').val('".$data->tanggalLahir."');</script>";
				echo "<script>$('#status').val('".$data->status."');</script>";
			}			
		}							
	}
?>