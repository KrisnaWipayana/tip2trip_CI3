<script language="javascript">
  function hapusdata(idUser)
  {
    if(confirm("Apakah yakin menghapus data ini?"))
    {
      //alert (KodeDaftar);
      window.open("<?php echo base_url(); ?>Cdaftar/hapusdata/"+idUser,"_self");  
    }
  }
  
  function editdata(idUser)
  {
    //alert(KodeDaftar);
    load("Cdaftar/editdata/"+idUser,"#script"); 
  }

  function simpandata()
  {
    // var NamaLengkap=$('#NamaLengkap').val();
    // if (NamaLengkap=="")
    // {
    //   alert ("Nama lengkap masih kosong");
    //   $('#NamaLengkap').focus();
    //   return false; 
    // } 
    
    // var Alamat=$('#Alamat').val();
    // if (Alamat=="")
    // {
    //   alert ("Alamat masih kosong");
    //   $('#Alamat').focus();
    //   return false; 
    // }
    
    $('#formdaftar').submit();  
  }
  
</script>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Setting Akun</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/img/favicon.png'); ?>" rel="icon">
  <link href="<?php echo base_url('assets/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/quill/quill.snow.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/quill/quill.bubble.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/remixicon/remixicon.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/simple-datatables/style.css'); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="<?php echo base_url('Cawal/afterlogin'); ?>" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Trip2Trip</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">

    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <!-- End Notification Icon -->

          
        </li><!-- End Notification Nav -->

          <!-- End Messages Icon -->
          
        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <!-- <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> -->
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $this->session->userdata('email'); ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $this->session->userdata('namaLengkap'); ?></h6>
              <span><?php echo $this->session->userdata('status'); ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

          
            <li>
              <a class="dropdown-item d-flex align-items-center" href="javascript:void(0)" onclick="logout();">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
          </li>
          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="<?php echo base_url('Cawal/afterlogin'); ?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Form Akun</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="forms-elements.html" class="active">
              <i class="bi bi-circle"></i><span>Setting Akun Customer</span>
            </a>
          </li>
        </ul>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="forms-elements.html" >
              <i class="bi bi-circle"></i><span>Setting Akun Hotel</span>
            </a>
          </li>
        </ul>
      </li> --><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Master Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <a href="<?php echo base_url('Cadmin/tampilAkun'); ?>">
              <i class="bi bi-circle"></i><span>Akun Customer</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->
 

      </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

  <div class="pagetitle">
      <h1>Setting Akun Customer</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Form Akun</li>
          <li class="breadcrumb-item active">Setting Akun Customer</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <!-- No Labels Form -->
    <form class="row g-3" name="formdaftar" id="formdaftar" method="post" action="<?php echo base_url('Cdaftar/simpandata'); ?>">
                <div class="col-md-12">
                  <input type="hidden" name="idUser" id="idUser"/>
                  <label for="namaLengkap">Nama Lengkap:</label>
                  <input type="text" name="namaLengkap" id="namaLengkap" class="form-control" placeholder="Nama Lengkap" >
                </div>
                <div class="col-md-6">
                  <label for="email">Email:</label>
                  <input type="email"  name="email" id="email" class="form-control" placeholder="Email">
                </div>
                <div class="col-md-6">
                  <label for="password">Password:</label>
                  <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                </div>
                <div class="col-12">
                  <label for="noTelp">Nomor Telepon:</label>
                  <input type="number" name="noTelp" id="noTelp" class="form-control" placeholder="Nomor Handphone">
                </div>
                <div class="col-md-6">
                  <label for="status">Status:</label>
                  <!-- <input type="text" name="status" id="status" class="form-control" placeholder="Status akun"> -->
                   <select class="form-select" id="status" name="status" aria-label="Default select example">
                      <option selected>Pilih status user</option>
                      <option value="Member">Member</option>
                      <option value="Admin">Admin</option>
                      <option value="Pihak Hotel">Pihak Hotel</option>
                    </select>
                </div>
                <div class="col-md-6">
                  <label for="tanggalLahir">Tanggal Lahir:</label>
                  <input type="date" name="tanggalLahir" id="tanggalLahir" class="form-control" placeholder="">
                </div>
                
                
                  <div class="col-md-12" style="height:100px">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                </div>
              </form><!-- End No Labels Form -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Akun Customer</h5>
              <p>Edit Akun Customer</a>.</p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>status</th>
                    <th>Nomor Handphone</th>
                    <th>Tanggal Lahir</th>
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
                    foreach ($hasil as $data): 
                      ?>
                <tr>

                    <td><?php echo $data->namaLengkap; ?></td>
                    <td><?php echo $data->email; ?></td>
                    <td><?php echo $data->status; ?></td>
                    <td><?php echo $data->noTelp; ?></td>
                    <td><?php echo $data->tanggalLahir; ?></td>
                    <td>
                    <button type="button" class="btn btn-primary btn-sm" onclick="editdata('<?php echo $data->idUser; ?>');">Edit</button>
                    <button type="button" class="btn btn-danger btn-sm" onclick="hapusdata('<?php echo $data->idUser; ?>');">Hapus</button>
                    </td>               
                </tr>
                  <?php 
                  $no++; 
                    endforeach;
                  } 
                  ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Trip2Trip</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by Trip2Trip Team</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/vendor/apexcharts/apexcharts.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/chart.js/chart.umd.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/echarts/echarts.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/quill/quill.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/simple-datatables/simple-datatables.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/tinymce/tinymce.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/php-email-form/validate.js'); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
  <script language="javascript">
    function logout(){
      if (confirm("Apakah anda yakin untuk keluar?")) {
        window.open("<?php echo base_url(); ?>Clogin/logout","_self");
      }
    }
  </script>
</body>

</html>