<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard Pihak Hotel</title>
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
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="<?php echo base_url('Cawal/tampilawal'); ?>" class="logo d-flex align-items-center">
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

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="" data-bs-toggle="dropdown">
            <!-- <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> -->
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $this->session->userdata('email'); ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Nama Hotel</h6>
              <span>Tampilan Admin</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

           
            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url('Clogin/logout'); ?>">
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
        <a class="nav-link collapsed" href="<?php echo base_url('Cawal/afterlogin'); ?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      

       <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo base_url('Cadminhotel/tampilPesanan'); ?>">
              <i class="bi bi-circle"></i><span>Data Pemesanan</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('Cadminhotel/settingHotel'); ?>">
              <i class="bi bi-circle"></i><span>Data Kamar Hotel</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Pemesanan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Data Pemesanan Hotel</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->
 

      </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Kamar <span>| Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>40</h6>
                      <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Total Kamar Hotel Anda</span>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Kamar Dipesan <span>| This Month</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>40</h6>
                      <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1"> Kali Dipesan</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Kamar Tersedia <span>| Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>12</h6>
                      <span class="text-danger small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Kamar Tersisa</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
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

</body>

</html>
