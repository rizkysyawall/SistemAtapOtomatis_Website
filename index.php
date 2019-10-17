<?php 
    if(isset($_POST['submit'])){
        include 'koneksi.php';       
        // menangkap data yang dikirim dari form
        $username = $_POST['username'];
        $password = $_POST['password'];
         
        // menyeleksi data admin dengan username dan password yang sesuai
        $data = mysqli_query($conn,"select * from user where username='$username' and password='$password'");
         
        // menghitung jumlah data yang ditemukan
        $cek = mysqli_num_rows($data);
         
        if($cek > 0){
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "login";
            header("location:home.php");
        }else{
            echo '<script>alert("Username / password salah!");</script>';
        }
    }
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>User Login</title>
    <link rel="apple-touch-icon" href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/css/themes/vertical-modern-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/css/themes/vertical-modern-menu-template/style.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/css/pages/login.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/materialize-material-design-admin-template/app-assets/css/custom/custom.css">
  </head>
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 1-column login-bg  blank-page blank-page" data-open="click" data-menu="vertical-modern-menu" data-col="1-column">
    <div class="row">

      <div class="col s12">
        <div class="container">
        <div id="login-page" class="row">
        <center><img src="Smartroof_new.png" height="260px" style="margin-right: 150px;"></center>
          <div class="col s12 m12 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
            <form class="login-form" method="POST">
              <div class="row">
                <div class="input-field col s12">
                  <h5 class="ml-4 center">Login Pengguna</h5>
                </div>
              </div>
              <div class="row margin">
                <div class="input-field col s12">
                  <i class="material-icons prefix pt-2">person_outline</i>
                  <input id="username" type="text" name="username">
                  <label for="username" class="center-align">Username</label>
                </div>
              </div>
              <div class="row margin">
                <div class="input-field col s12">
                  <i class="material-icons prefix pt-2">lock_outline</i>
                  <input id="password" type="password" name="password">
                  <label for="password">Password</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <button type="submit" name="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Login</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        </div>
      </div>
    </div>

    <div style="width: 100%;overflow: hidden;position: fixed;top: 0;left: 0;right: 0;background: #3c6382;border-bottom: 5px solid #FFF;">
        <p style="text-align: center;color: #FFF;font-family: Arial; font-size: 20px;">LARASSETTE LAUNDRY</p>
    </div>
    
    <script src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/js/vendors.min.js" type="text/javascript"></script>
    <script src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/js/plugins.js" type="text/javascript"></script>
    <script src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/js/custom/custom-script.js" type="text/javascript"></script>
  </body>
</html>