<?php
	class Mhotel extends CI_Model
	{
		
		// function buatpwd()
		// {
		// 	$kata="ABCDEFGHIJKLMNPQRSTUVWXYZ123456789";
		// 	$password=substr(str_shuffle($kata),0,4);
		// 	return $password;
		// }
		
		function simpandataHotel()
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

		function simpandataKamar()
		{
			$data=$_POST;
			// $email=$data['email'];
			// $password=$data['password'];
			
			// $data['email']=$email;
			// $data['password']=$password;
			
			$idKamar=$data['idKamar'];
			$tipeKamar=$data['tipeKamar'];

			if ($idKamar=="")
			{
				//simpan
				$this->db->insert('tbKamar',$data);
				$this->session->set_flashdata('pesan','Data sudah disimpan!');	
			}
			else
			{
				//edit	
				$Kode=array(
					'idKamar'=>$idKamar
				);
				$this->db->where($Kode);
				$this->db->update('tb_Kamar',$data);
				$this->session->set_flashdata('pesan','Data sudah diedit!');
			}
		}
		
		function tampildataHotel()
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

		function tampildataKamar()
		{
			$sql="select * from tb_kamar order by idKamar";
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
		
		function hapusdataHotel($idHotel)
		{
			$sql="delete from tb_hotel where idHotel='".$idHotel."'";
			$this->db->query($sql);
		}
		
		function hapusdataKamar($idKamar)
		{
			$sql="delete from tb_kamar where idKamar='".$idKamar."'";
			$this->db->query($sql);
		}

		// function editdataHotel($idHotel)
		// {
		// 	$sql="select * from tb_hotel where idHotel='".$idHotel."'";
		// 	$query=$this->db->query($sql);
		// 	if ($query->num_rows()>0)
		// 	{
		// 		$data=$query->row(); 
		// 		echo "<script>$('#idHotel').val('".$data->idHotel."');</script>";
		// 		echo "<script>$('#namaLengkap').val('".$data->namaLengkap."');</script>";	
		// 		echo "<script>$('#email').val('".$data->email."');</script>";
		// 		echo "<script>$('#password').val('".$data->password."');</script>";
		// 		echo "<script>$('#noTelp').val('".$data->noTelp."');</script>";
		// 		echo "<script>$('#tanggalLahir').val('".$data->tanggalLahir."');</script>";
		// 		echo "<script>$('#status').val('".$data->status."');</script>";
		// 	}			
		// }	

		// function editdataKamar($idKamar)
		// {
		// 	$sql="select * from tb_kamar where idKamar='".$idKamar."'";
		// 	$query=$this->db->query($sql);
		// 	if ($query->num_rows()>0)
		// 	{
		// 		$data=$query->row(); 
		// 		echo "<script>$('#idKamar').val('".$data->idKamar."');</script>";
		// 		echo "<script>$('#namaLengkap').val('".$data->namaLengkap."');</script>";	
		// 		echo "<script>$('#email').val('".$data->email."');</script>";
		// 		echo "<script>$('#password').val('".$data->password."');</script>";
		// 		echo "<script>$('#noTelp').val('".$data->noTelp."');</script>";
		// 		echo "<script>$('#tanggalLahir').val('".$data->tanggalLahir."');</script>";
		// 		echo "<script>$('#status').val('".$data->status."');</script>";
		// 	}			
		// }						
	}
?>