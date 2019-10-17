<?php
include "koneksi.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Larasati Laundry</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="bootstrap/img/favicon.png" rel="icon">
  <link href="bootstrap/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">


  <!-- Bootstrap CSS File -->
  <link href="bootstrap/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
  <link href="bootstrap/lib/animate/animate.min.css" rel="stylesheet">
  <link href="bootstrap/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="bootstrap/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="bootstrap/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

  <!-- Main Stylesheet File -->
  <link href="bootstrap/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  <!--==========================
  Header
  ============================-->
  <header id="header">

    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="home.php" class="scrollto"><span>Larassatte Laundry</span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li><a href="home.php">Home</a></li>
          <li class="active"><a href="about.php">About</a></li>
          <li><a href="data_user.php">Data User</a></li>
          <li><a href="logout.php">Logout</a></li>          
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->


  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        
  
        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="Smartroof_new.png" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer" class="section-bg">    
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Sistem Atap Otomatis</strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- #footer -->

  <!-- JavaScript Libraries -->
  <script src="bootstrap/lib/jquery/jquery.min.js"></script>
  <script src="bootstrap/lib/jquery/jquery-migrate.min.js"></script>
  <script src="bootstrap/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script src="bootstrap/lib/easing/easing.min.js"></script>
  <script src="bootstrap/lib/mobile-nav/mobile-nav.js"></script>
  <script src="bootstrap/lib/wow/wow.min.js"></script>
  <script src="bootstrap/lib/waypoints/waypoints.min.js"></script>
  <script src="bootstrap/lib/counterup/counterup.min.js"></script>
  <script src="bootstrap/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="bootstrap/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="bootstrap/lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="bootstrap/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="bootstrap/js/main.js"></script>
  <script type="text/javascript">
        $(document).ready(function() {
            $('#dataTables').DataTable();
        } );
  </script>
</body>
</html>