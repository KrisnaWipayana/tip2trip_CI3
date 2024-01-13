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
     <link href="assets/css/detail.css" rel="stylesheet" >
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
                <a class="nav-item nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
                  <p>Detail</p>
                  <h3>Pilihan Hotel Anda</h3>
                  <p>_______________________</p>
                  </div>
              </div>

              <div class="row">
                  <div class="col-lg">
                    <div class="card-deck">
                      <div class="card">
                      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img class="d-block w-100" src="img/box1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="img/bghome.jpeg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="img/box1.jpg" alt="Third slide">
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
                      </div>
                      
                      <div class="card text-left">
                        <div class="card-body">
                          <h5 class="card-title">Nama Hotel</h5>
                          <p class="card-text">Deskripsi Hotel apa aja yang penting panjang dah intinya minimal abnget 100 karakternya yak.</ps>
                          <p> _______________________________________________________________________</p>
                          <h5 class="card-tipe">Tipe Kamar</h5>
                          <p class="tipeKamar">Tipe kamar vvip, Tipe Private, Tipe HoneyMoon</ps>
                          <p>_______________________________________________________________________</p>
                          <h5>Nama Pemesan</h5>
                          <p><input type="text" class="namaPemesan w-75 rounded" placeholder="Masukkan Nama Lengkap Anda"></p>
                          <h5>Jumlah Kamar</h5>
                          <select class="jumlahkamar rounded">
                            <option value="">...</option>
                            <optgroup label="ketik dalam jumlah lain">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                          </select>
                          <h5>Tipe Kamar</h5>
                          <select class="tipeKamar rounded">
                            <option value="">...</option>
                            <optgroup label="Masukkan tipe kamar yang dipilih">
                                <option value="1">VVIP</option>
                                <option value="2">Private</option>
                                <option value="3">HoneyMoon</option>
                          </select>
                          <p>_____________________________________________________</p>
                          <button type="button" class="btnReset btn-danger btn-lg w-30">Reset</button>
                          <button type="button" class="btnPesan btn-dark btn-lg w-30">Pesan</button>
                           


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