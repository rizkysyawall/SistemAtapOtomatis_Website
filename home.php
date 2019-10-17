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
        <h1 class="text-light"><a href="home.php" class="scrollto"><span>Larassette Laundry</span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="home.php">Home</a></li>
          <li><a href="about.php">About</a></li>
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

    <section id="pricing" class="wow fadeInUp section-bg">

      <div class="container">

        <header class="section-header">
          <h3>Data Sistem Terupdate</h3>
          <hr>
        </header>


        <div class="row flex-items-xs-middle flex-items-xs-center">
      
          <!-- Basic Plan  -->
          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3><i class="material-icons" style="font-size: 100px;">brightness_high</i></h3>
              </div>
              <div class="card-block">
                <h4 class="card-title"> 
                    Intensitas Cahaya<br>
                        <p class="light-center">
                            <?php
                            $resultcahaya = mysqli_query($conn,"SELECT * FROM atapotomatis ORDER BY id DESC LIMIT 1");           
                            while ($row = mysqli_fetch_array($resultcahaya))
                            {?>
                            <?php echo $row["cahaya"];?>
                            <?php }?>   
                        </p>
                </h4>
                <ul class="list-group">
                  <li class="list-group-item">
                      <a href="javascript:;" data-toggle="collapse" data-target="#collapse_01">Keterangan :</a>
                  </li>
                  <span class="collapse" id="collapse_01">
                      <li class="list-group-item">Nilai <= 699  : Cerah</li>
                      <li class="list-group-item">Nilai >= 700 : Gelap</li>
                  </span>
                </ul>
              </div>
            </div>
          </div>
      
          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3><i class="material-icons" style="font-size: 100px;">invert_colors</i></h3>
              </div>
              <div class="card-block">
                <h4 class="card-title"> 
                    Intensitas Hujan<br>
                        <p class="light-center">
                            <?php
                            $resulthujan = mysqli_query($conn,"SELECT * FROM atapotomatis ORDER BY id DESC LIMIT 1");           
                            while ($row = mysqli_fetch_array($resulthujan))
                            {?>
                            <?php echo $row["hujan"];?>
                            <?php }?>   
                        </p>
                </h4>
                <ul class="list-group">
                  <li class="list-group-item">
                      <a href="javascript:;" data-toggle="collapse" data-target="#collapse_02">Keterangan :</a>
                  </li>
                  <span class="collapse" id="collapse_02">
                      <li class="list-group-item">Keterangan :</li>
                      <li class="list-group-item">Nilai <= 929  : Hujan</li>
                      <li class="list-group-item">Nilai >= 930 : Tidak Hujan</li>
                  </span>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3><i class="material-icons" style="font-size: 100px;">home</i></h3>
              </div>
              <div class="card-block">
                <h4 class="card-title"> 
                    Kondisi Atap<br>
                        <p class="light-center">
                            <?php
                            $resultatap = mysqli_query($conn,"SELECT * FROM atapotomatis ORDER BY id DESC LIMIT 1");           
                            while ($row = mysqli_fetch_array($resultatap))
                            {?>
                            <?php echo $row["atap"];?>
                            <?php }?>   
                        </p>
                </h4>
                <ul class="list-group">
                  <li class="list-group-item">
                      <a href="javascript:;" data-toggle="collapse" data-target="#collapse_03">Keterangan :</a>
                  </li>
                  <span class="collapse" id="collapse_03">
                      <li class="list-group-item">Nilai hujan <=929 && Nilai cahaya <=699 || Nilai cahaya >=700  : Tertutup</li>
                      <li class="list-group-item">Nilai hujan >=930 && Nilai cahaya <=699 : Terbuka</li>
                  </span>
                </ul>
              </div>
            </div>
          </div>
      
        </div>
      </div>

    </section><!-- #pricing -->

    <section id="about" class="wow fadeInUp">

      <div class="container">
        <div class="row">

          <div class="col-lg-12 col-md-12">
            <div class="about-content">
              <h2 align="center">Rincian Data Sistem</h2>
              <hr>
              <table id="dataTables" class="table table-bordered table-striped table-hover">
                  <thead>
                      <tr>
                          <td><b>No</b></td>
                          <td><b>Tanggal</b></td>
                          <td><b>Waktu</b></td>
                          <td><b>Cahaya</b></td>
                          <td><b>Hujan</b></td>
                          <td><b>Atap</b></td>
                      </tr>
                  </thead>
                  <tbody>
                    <?php 
                        $no = 1;
                        foreach($conn->query('select * from atapotomatis') as $row){
                    ?>
                      <tr>
                          <td><?= $no; ?></td> 
                          <td><?= date('j-F-Y', strtotime($row['tanggal'])); ?></td>
                          <td><?= date('H:i a', strtotime($row['waktu'])); ?></td>
                          <td><?= $row['cahaya']; ?></td>
                          <td><?= $row['hujan']; ?></td>
                          <td><?= $row['atap']; ?></td>
                      </tr>
                      <?php $no++; } ?>
                  </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </section><!-- #about -->

    <section id="pricing" class="wow fadeInUp section-bg">
    
          <div class="container">
    
            <header class="section-header">
              <h3>Hapus Data Sistem</h3>
              <hr>
            </header>
            <form action="hapusdata.php" method="post">
            <div class="row">
              <div class="col-5">
                        <label>Dari Tanggal</label>
                        <input type="text" name="dari" id="dari" class="validate" required="" placeholder="YYYY-MM-DD">
              </div>
              <div class="col-1">
                <h3>-</h3>
              </div>
              <div class="col-5">
                        <label>Sampai Tanggal</label>
                        <input type="text" name="sampai" id="sampai" class="validate" required="" placeholder="YYYY-MM-DD">
              </div>       
              <div class="col-1">
                <input type="submit" name="hapus" value="Hapus" class="btn btn-primary">
              </div>
            </div>
          </form>
            </div>
    </section>


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