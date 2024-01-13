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
     <link href="<?php echo base_url('assets/css/pilihhotel.css'); ?>" rel="stylesheet" >
  </head>
  <body>
    
  <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url('Cawal/tampilawal'); ?>">TRIP2TRIP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="<?php echo base_url('Cawal/tampilawal'); ?>">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">My Booking</a>
                <a class="nav-item nav-link" href="#">Contact</a>
                <a class="nav-item nav-link" href="#">Logout</a>
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
                  <p>HOTEL</p>
                  <h3>Sesuai Pencarian Anda</h3>
                  <p>_______________________</p>
                  </div>
              </div>

              <div class="row">
                  <div class="col-lg">
                    <div class="card-deck">
<!-- <<<<<<< HEAD -->
                      <div class="card">
                        <a href="<?php echo base_url('Cdetail/tampilDetail'); ?>">
                        <img class="card-img-top" src="assets/img/box1.jpg" alt="Card image cap">
<!-- =======
                      <div class="card" href="#">
                        <img class="card-img-top" src="assets/img/box1.jpg" alt="Card image cap">
>>>>>>> 328049d875c265d13b1f90ab7d061782cd1dc567 -->
                        <div class="card-body">
                          <h5 class="card-title">Hotel Contoh</h5>
                          <p class="card-text">Deskripsi Hotel.</ps>
                          <h6 class="hargaHotel">Rp.</h6>
                        </div>
                        </a>
                      </div>
                      <div class="card" href="#">
                      <img class="card-img-top" src="assets/img/box1.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Hotel Contoh</h5>
                          <p class="card-text">Deskripsi Hotel.</ps>
                          <h6 class="hargaHotel">Rp.</h6>
                        </div>
                      </div>
                      <div class="card" href="#">
                      <img class="card-img-top" src="assets/img/box1.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Hotel Contoh</h5>
                          <p class="card-text">Deskripsi Hotel.</ps>
                          <h6 class="hargaHotel">Rp.</h6>
                        </div>
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
  </body>
</html>