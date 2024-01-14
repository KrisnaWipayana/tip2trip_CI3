<!DOCTYPE html>
<html lang="en">

<script language="javascript">
  function hapusdata(idHotel)
  {
    if(confirm("Apakah yakin menghapus data ini?"))
    {
      //alert (KodeDaftar);
      window.open("<?php echo base_url(); ?>Chotel/hapusdata/"+idHotel,"_self");  
    }
  }
  
  function editdata(idHotel)
  {
    //alert(KodeDaftar);
    load("Chotel/editdata/"+idHotel,"#script"); 
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

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Setting Hotel Anda</title>
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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
        .wizard-content {
            display: none;
        }

        .active-step {
            display: block;
        }
    </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="<?php echo base_url('Cawal/tampilawal'); ?>" class="logo d-flex align-items-center">
        <!-- <img src="<?php echo base_url('assets/img/logo.png'); ?>" alt=""> -->
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
              <h6>Nama Hotel</h6>
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

      

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Form Tambah Hotel</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo base_url('Cadminhotel/settingHotel'); ?>">
              <i class="bi bi-circle"></i><span>Setting Hotel Anda</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

       <li class="nav-item">
        <a class="nav-link " data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo base_url('Cadminhotel/tampilPesanan'); ?>">
              <i class="bi bi-circle"></i><span>Data Pemesanan</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Data Kamar Hotel</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->
 

      </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Hotel Anda</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">form tambah hotel</li>
          <li class="breadcrumb-item">Setting Hotel Anda</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">General Form</h5>

              <!-- General Form Elements -->
        <div class="container mt-5">
            <div class="card">
                <div class="card-body">
                    <form id="formHotel" action="process.php" method="post"  enctype="multipart/form-data">
                        <!-- Step 1 -->
                        <div class="wizard-content active-step" id="step-1">
                            <h3>Form Hotel</h3>
                            <div class="form-group">
                                <input type="hidden" name="idHotel">
                                <label for="nama_hotel">Nama Hotel:</label>
                                <input type="text" class="form-control" id="nama_hotel" name="nama_hotel">
                            </div>
                            <div class="form-group">
                                <label for="lokasiHotel">lokasiHotel :</label>
                                <input type="text" class="form-control" id="lokasiHotel" name="lokasiHotel">
                            </div>
                            <div class="form-group">
                            <label class=" col-form-label">Rating Hotel</label>
                                <!-- <div class="col-sm-10"> -->
                                    <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">⭐</option>
                                    <option value="2">⭐⭐</option>
                                    <option value="3">⭐⭐⭐</option>
                                    <option value="4">⭐⭐⭐⭐</option>
                                    <option value="5">⭐⭐⭐⭐⭐</option>
                                    </select>
                                <!-- </div> -->
                            </div>
                            <div class="form-group">
                                <label for="statusHotel">statusHotel :</label>
                                <input type="text" class="form-control" id="statusHotel" name="statusHotel">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi_hotel">Deskripsi Hotel Anda:</label>
                                <input type="text" class="form-control" id="deskripsi_hotel" name="deskripsi_hotel" style="height: 100px">
                            </div>
                            <div class="form-group">
                                <label for="fileUpload">Upload Foto Hotel:</label>
                                <input type="file" class="form-control-file" id="fileUpload" name="fileUpload[]" multiple>
                            </div>
                            <button type="submit" class="btn btn-primary next-step">Next</button>
                            </form>
                        </div>

                        <!-- Step 2 -->
                        <form id="formKamar" action="" method="post" >
                        <div class="wizard-content" id="step-2">
                            <h3>Form Kamar Hotel</h3>
                            <div class="form-group">
                                <button type="button" class="btn btn-success" id="tambahInput">Tambah Tipe Kamar</button>
                            </div>
                            <div class="form-group">
                              <label for="idKamar">ID Kamar:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="idKamar[]">
                                    <div class="input-group-append">
                                    <button type="button" class="btn btn-danger btn-hapus">Hapus</button>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tipeKamar">Tipe Kamar:</label>
                                <input type="text" class="form-control" name="tipeKamar[]">
                            </div>

                            <div class="form-group">
                                <label for="jumlah_kamar">Jumlah Kamar:</label>
                                <input type="number" class="form-control" name="jumlah_kamar[]">
                            </div>

                            <div class="form-group">
                                <label for="harga_kamar">Harga Kamar:</label>
                                <input type="number" class="form-control" name="harga_kamar[]">
                            </div>
                            <button type="button" class="btn btn-secondary prev-step">Previous</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
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

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
  <script language="javascript">
    function logout(){
      if (confirm("Apakah anda yakin untuk keluar?")) {
        window.open("<?php echo base_url(); ?>Clogin/logout","_self");
      }
    }
  </script>

<script>
    $(document).ready(function () {
        var currentStep = 1;

        $(".next-step").click(function () {
            if (currentStep < 2) {
                $("#step-" + currentStep).removeClass("active-step");
                currentStep++;
                $("#step-" + currentStep).addClass("active-step");
            }
        });

        $(".prev-step").click(function () {
            if (currentStep > 1) {
                $("#step-" + currentStep).removeClass("active-step");
                currentStep--;
                $("#step-" + currentStep).addClass("active-step");
            }
        });
    });
</script>

<script>
    $(document).ready(function () {
        var currentStep = 1;

        $(".next-step").click(function () {
            if (currentStep < 2) {
                $("#step-" + currentStep).removeClass("active-step");
                currentStep++;
                $("#step-" + currentStep).addClass("active-step");
            }
        });

        $(".prev-step").click(function () {
            if (currentStep > 1) {
                $("#step-" + currentStep).removeClass("active-step");
                currentStep--;
                $("#step-" + currentStep).addClass("active-step");
            }
        });

        // Fungsi untuk menambah input
        $("#tambahInput").click(function () {
            var newInput = '<div class="form-group">' +
                                '<label for="idKamar">ID Kamar:</label>' +
                                '<div class="input-group">' +
                                    '<input type="text" class="form-control" name="idKamar[]">' +
                                    '<div class="input-group-append">' +
                                        '<button type="button" class="btn btn-danger btn-hapus" data-target=".form-group">Hapus</button>' +
                                    '</div>' +
                                '</div>' +
                                '<label for="tipeKamar">Tipe Kamar:</label><input type="text" class="form-control" name="tipeKamar[]">' +
                                '<label for="jumlah_kamar">Jumlah Kamar:</label><input type="number" class="form-control" name="jumlah_kamar[]">' +
                                '<label for="harga_kamar">Harga Kamar:</label><input type="number" class="form-control" name="harga_kamar[]"></div>';

            $(".container form").append(newInput);
        });

        // Fungsi untuk menghapus seluruh form-group
        $(".container form").on("click", ".btn-hapus", function () {
            $(this).closest(".form-group").remove();
        });
    });
</script>





</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uploadDir = "#"; // Folder penyimpanan file

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $uploadedFiles = $_FILES['fileUpload'];

    for ($i = 0; $i < count($uploadedFiles['name']); $i++) {
        $filename = $uploadedFiles['name'][$i];
        $tempName = $uploadedFiles['tmp_name'][$i];
        $targetPath = $uploadDir . $filename;

        if (move_uploaded_file($tempName, $targetPath)) {
            echo "File berhasil diunggah: " . $filename . "<br>";
        } else {
            echo "Gagal mengunggah file: " . $filename . "<br>";
        }
    }
}
?>
