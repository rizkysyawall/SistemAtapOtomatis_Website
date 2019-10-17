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
          <li><a href="home.php">Home</a></li>            
          <li><a href="about.php">About</a></li>
          <li class="active"><a href="data_user.php">Data User</a></li>
          <li><a href="logout.php">Logout</a></li>          
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->


<form method="POST">
<div class="modal fade" id="addUser">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <b>Tambah User</b>
            </div>
            <div class="modal-body">
                Username :
                <input type="text" name="username" class="form-control" placeholder="Masukan username" required="">
                <br>

                Password :
                <input type="password" name="password" class="form-control" placeholder="Masukan password" required="">
                <br>

                Nama Lengkap :
                <input type="text" name="nama" class="form-control" placeholder="Masukan nama lengkap" required="">
            </div>
            <div class="modal-footer">
                <button type="submit" name="tambahUser" class="btn btn-info">Simpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
</form>


<?php 
    foreach($conn->query('select * from user') as $modal){
?>
<form method="POST">
<div class="modal fade" id="ubah_<?= $modal['username']; ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <b>Ubah User</b>
            </div>
            <div class="modal-body">
                Username :
                <input type="text" name="username" value="<?= $modal['username']; ?>" class="form-control" placeholder="Masukan username" required="">
                <br>

                Password :
                <input type="password" name="password" value="<?= $modal['password']; ?>" class="form-control" placeholder="Masukan password" required="">
                <br>

                Nama Lengkap :
                <input type="text" name="nama" value="<?= $modal['nama']; ?>" class="form-control" placeholder="Masukan nama lengkap" required="">
            </div>
            <div class="modal-footer">
                <button type="submit" name="ubah" value="<?= $modal['username']; ?>" class="btn btn-success">Ubah</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
</form>
<?php } ?>

<?php 
    if(isset($_POST['tambahUser'])){
        $conn->query('INSERT INTO user (username, password, nama) VALUES ("'.$_POST['username'].'", "'.$_POST['password'].'", "'.$_POST['nama'].'")');
        echo '<script>alert("Berhasil di simpan!");location="data_user.php";</script>';
    }

    if(isset($_POST['ubah'])){
        $conn->query('UPDATE user SET username="'.$_POST['username'].'", password="'.$_POST['password'].'", nama="'.$_POST['nama'].'" WHERE username="'.$_POST['ubah'].'" ');
        echo '<script>alert("Berhasil di ubah!");location="data_user.php";</script>';
    }

    if(isset($_POST['delete'])){
        $conn->query('DELETE FROM user WHERE username = "'.$_POST['delete'].'" ');
        echo '<script>location="data_user.php";</script>';
    }
?>

  <main id="main">
    <button class="btn btn-lg btn-info" type="button" style="border-radius: 100%;position: fixed;bottom:0;right:0;margin-bottom: 20px;margin-right: 20px;" data-toggle="modal" data-target="#addUser">
          <i class="material-icons" style="margin-top: 5px;">add</i>
    </button>

    <section id="about" class="wow fadeInUp">

      <div class="container">
        <div class="row">

          <div class="col-lg-12 col-md-12">
            <div class="about-content">
              <h2 align="center">Data User Atap Otomatis</h2>
              <hr>
              <table id="dataTables" class="table table-bordered table-striped table-hover">
                  <thead>
                      <tr>
                          <td><b>No</b></td>
                          <td><b>Username</b></td>
                          <td><b>Password</b></td>
                          <td><b>Nama</b></td>
                          <td><b>Action</b></td>
                      </tr>
                  </thead>
                  <tbody>
                    <?php 
                        $no = 1;
                        foreach($conn->query('select * from user') as $row){
                            $md5 = md5($row['password']);
                            $substr = substr($md5, 0,10);
                            $password = base64_encode($substr);
                    ?>
                      <tr>
                          <td><?= $no; ?></td> 
                          <td><?= $row['username']; ?></td>
                          <td><?= $password; ?></td>
                          <td><?= $row['nama']; ?></td>
                          <td>
                              <form method="POST">
                              <button type="button" data-toggle="modal" data-target="#ubah_<?= $row['username']; ?>" class="btn btn-success" >Ubah</button>
                              <button type="submit" name="delete" value="<?= $row['username']; ?>" class="btn btn-danger">Hapus</button>
                            </form>
                          </td>
                      </tr>
                      <?php $no++; } ?>
                  </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </section><!-- #about -->



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