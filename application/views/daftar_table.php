<script language="javascript">
	function hapusdata(kode_user)
	{
		if(confirm("Apakah yakin menghapus data ini?"))
		{
			//alert (KodeDaftar);
			window.open("<?php echo base_url(); ?>cpendaftaran/hapusdata/"+kode_user,"_self");	
		}
	}
	
	function editdata(kode_user)
	{
		//alert(KodeDaftar);
		load("cpendaftaran/editdata/"+kode_user,"#script");	
	}
	
</script>

<div class="container mt-3">
  <h4>Data Pendaftaran</h4>
 <table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th>Nomor Induk</th>
        <th>Nama Lengkap</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Jabatan</th>
        <th>Unit Kerja</th> 
        <th>Email</th>
        <th>Password</th>
        <th>Status</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php
		if(empty($hasil))
		{
			echo "Data Kosong";	
		}
		else
		{
			$no=1;
			foreach($hasil as $data):
	?>
    
      <tr>
        <td><?php echo $data->nomor_induk;  ?></td>
        <td><?php echo $data->nama;  ?></td>
        <td><?php echo $data->tanggal_lahir;  ?></td>
        <td><?php echo $data->jenis_kelamin;  ?></td>
        <td><?php echo $data->jabatan;  ?></td>
        <td><?php echo $data->unit_kerja;  ?></td>
        <td><?php echo $data->email;  ?></td>
        <td><?php echo $data->password;  ?></td>
        <td><?php echo $data->status;  ?></td>
        <td>
        <button type="button" class="btn btn-primary btn-sm" onclick="editdata('<?php echo $data->kode_user; ?>')">Edit</button>
        <button type="button" class="btn btn-danger btn-sm" onclick="hapusdata('<?php echo $data->kode_user; ?>');">Hapus</button>
        </td>
      </tr>
      
    <?php
		  $no++;
		  endforeach;
		}
	?>  
      
      
      
    </tbody>
  </table>
</div>