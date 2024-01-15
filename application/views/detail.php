<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- my Font -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">

     <!-- my Css-->
     <link href="<?php echo base_url('assets/css/detail.css'); ?>" rel="stylesheet" >
  </head>
  <body>
    
  <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container">
            <a class="navbar-brand" href="#">TRIP2TRIP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="<?php echo base_url('Cawal/tampilawal'); ?>">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="<?php echo base_url('Cbooking/tampilBooking'); ?>">My Booking</a>
                <!-- <a class="nav-item nav-link" href="<?php echo base_url('Cawal/tampilawal'); ?>">Contact</a> -->
                <a class="nav-item nav-link" href="javascript:void(0)" onclick="logout();">Logout</a>
            </div>
            </div>
        </div>
        </nav>

  <!-- end of navbar -->

  <!-- Hotel Panel -->

  <div class="container justify-content-center">
          <div class="col-12 hotel-panel">

              <div class="row">
                  <div class="col-lg">
                  <p>Detail</p>
                  <h3>Hotel Saint Regis</h3>
                  <p></p>
                  </div>
              </div>

              <div class="row">
                  <div class="col-lg">
                    <!-- <div class="card-deck"> -->
                      <div class="card">
                      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img class="d-block w-100" src="<?php echo base_url('assets/img/gym.jpg'); ?>" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo base_url('assets/img/pool1.jpeg'); ?>" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo base_url('assets/img/room2.jpeg'); ?>" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                      </div>
                      <!-- </div> -->
                      
                      <div class="card text-left">
                        <div class="card-body">
                          <h5 class="card-title">Nama Hotel</h5>
                          <p class="card-text">St. Regis dikenal dengan keanggunan dan kemewahan desain interior serta layanannya yang eksklusif. Beberapa ciri khas St. Regis adalah butler pribadi yang siap membantu setiap tamu dan ritual champagne sabering, yang merupakan tradisi di mana sebotol sampanye dibuka dengan menggunakan pisau sabering oleh pelayan.</ps>
                          
                          <?php
                  $pesan=$this->session->flashdata('pesan');
                  if ($pesan=="")
                  {
                    echo "";  
                  }
                  else
                  { 
                  ?>
  
                  <div class="alert alert-success alert-dismissible">
                  <?php echo $pesan; ?>
                  </div>
      
                  <?php
                  }
                  ?>


                          <form name="formBooking" action="<?php echo base_url('Cbooking/simpanBooking'); ?>" method="post">
                          <input type="hidden" name="idTransaksi">
                          <input type="hidden" name="" value="Saint Regis"> 
                          <h5>Nama Pemesan</h5>
                          <p><input type="text" name="namaLengkap" class="form-control" placeholder="Masukkan Nama Lengkap Anda"></p>
                          
                          <h5>Tanggal Masuk</h5>
                          <p><input type="date" name="tanggalMasuk" id="tanggalMasuk" class="form-control" placeholder=""></p>
                          <h5>Tanggal Keluar</h5>
                          <p><input type="date" name="tanggalKeluar" id="tanggalKeluar" class="form-control" placeholder=""></p>
                          <h5>Tipe Kamar</h5>
                          <select class="form-control">
                          <?php foreach ($tipeKamar as $tipeKamar): ?>
                            <option value="<?= $tipeKamar->tipeKamar ?>"><?= $tipeKamar->tipeKamar ?></option>
                          <?php endforeach; ?>                                                    
                          </select>
                          <!-- <h5>Jumlah Kamar</h5>                           -->
                          <!-- <input type="text" class="form-control" name="jumlahKamar" id="jumlahKamar"> -->
                          <input type="hidden" name="statusPesanan" value="Belum Diverifikasi">
                          <p></p>                          
                          <button type="submit" class="btnPesan btn-success btn-lg">Pesan</button>

                  

                          </form>
                        </div>
                    </div>
                  </div>
              </div>

          </div>
      </div>

   
  <!-- Hotel Panel  -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script language="javascript">
    function logout(){
      if (confirm("Apakah anda yakin untuk keluar?")) {
        window.open("<?php echo base_url(); ?>Clogin/logout","_self");
      }
    }
  </script>
  </body>
</html>