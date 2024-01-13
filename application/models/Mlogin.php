<?php 
	class Mlogin extends CI_Model
	{
		function proseslogin()
		{
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			
			$sql="select * from tb_user where email='".$email."' ";
			$sql.="and password='".$password."'";
			$query=$this->db->query($sql);	
			if ($query->num_rows()>0)
			{
				//ada data	
				$data = $query->row();
				$namaLengkap = $data->namaLengkap;
				$email = $data->email;
				$password = $data->password;
				$noTelp = $data->noTelp;
				$tanggalLahir = $data->tanggalLahir;
				$status = $data->status;
				$firstName = $data->firstName;
				$lastName = $data->lastName;
				

				$session = array(
					'namaLengkap'=>$namaLengkap,
					'email'=>$email,
					'password'=>$password,
					'noTelp'=>$noTelp,
					'tanggalLahir'=>$tanggalLahir,
					'status'=>$status,
					'firstName'=>$firstName,
					'lastName'=>$lastName,

					
				);

				
				$this->session->set_userdata($session);
				

				redirect('Cawal/afterlogin');
			}
			else
			{
				//tidak ada data	
				$this->session->set_flashdata('pesan','Login gagal');
				redirect('Clogin/formlogin');
				
			}
		}
	}
?>