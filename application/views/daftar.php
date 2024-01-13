<script language="javascript">
  function simpandata()
  {
    var email=$('#email').val();
    if (email=="")
    {
      alert ("Email masih kosong");
      $('#email').focus();
      return false; 
    } 
    
    var password=$('#password').val();
    if (password=="")
    {
      alert ("Password masih kosong");
      $('#password').focus();
      return false; 
    }
    
    $('#formdaftar').submit();
      
  }
</script>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- my Font -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">

     <!-- my Css-->
     <link href="<?php echo base_url('assets/css/daftar.css'); ?>" rel="stylesheet" >
  </head>
  

    <body>
    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url('Cawal/tampilawal'); ?>">TRIP2TRIP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link" href="<?php echo base_url('Cawal/tampilawal'); ?>">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">About</a>
            <a class="nav-item nav-link" href="#">Contact</a>
            <a class="nav-item nav-link" href="<?php echo base_url('Clogin/formlogin'); ?>">Login</a>
            <a class="nav-item nav-link active" href="#">Sign Up<span class="sr-only">(current)</span></a>
          </div>
        </div>
      </div>
    </nav>
    
    <!-- end off navbar -->

    <!-- JumboTron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
      </div>
    </div>

    <!-- end off jumbotron -->
    
    <!-- container daftar00 -->

    <div class="container justify-content-center">
      <form name="formdaftar" id="formdaftar" method="post" action="<?php echo base_url('Cdaftar/simpandata'); ?>">
          <div class="col-6 daftar-panel">
            <div class="row">
                <div class="col-lg">
                 <h3>SIGN UP</h3>
                </div>

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

            </div>

            <div class="row">
              <input type="hidden" name="idUser" id="idUSer"/>
                <div class="col-lg">
                  <p></p>
                  <h5>Email</h5>
                  <p><input type="text" id="email" name="email" placeholder="Example@gmail.com" class="text-center w-100 r-40" ></p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg">
                  <p></p>
                  <h5>Nama Lengkap</h5>
                  <p><input type="text" id="namaLengkap" name="namaLengkap" placeholder="Example Example" class="text-center w-100"></p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg">
                  <p></p>
                  <h5>Password</h5>
                  <p><input type="password" id="password" name="password" placeholder="*******" class="text-center w-100"></p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg">
                  <p></p>
                  <h5>No. Phone</h5>
                  <p><input type="number" id="noTelp" name="noTelp" placeholder="082*****" class="text-center w-100"></p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg">
                  <p></p>
                  <h5>Tanggal Lahir</h5>
                  <p><input type="date" id="tanggalLahir" name="tanggalLahir" placeholder="time" class="text-center w-100"></p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg">
                <p></p>
                    <!-- <button class="btnLogin btn-dark btn-lg w-100" href="<?php echo base_url('Clogin/formlogin'); ?>">Login</button> -->
                    <button type="button" class="btnSignIN btn-primary btn-lg w-100" onclick="simpandata()">Sign Up</button>
                </div>
                <div class="col-lg">
                <p></p>
                    
                </div>
            </div>
            </form>
      </div>

    <!-- end of container -->

    <!-- footer -->
    
    <!-- end of footer -->
        

       <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html> 