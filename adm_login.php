<?php include "konfigurasi/koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Politeknik Akbara</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="" rel="icon">
  <link href="" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="#intro" class="scrollto"><img src="img/logo1.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="usr_bayes.php">Kedisiplinan</a></li>
          <li><a href="adm_login.php">Login</a></li>
          
        </ul>
      </nav>
      
    </div>
  </header><!-- #header -->
  
  <section id="contact-info">
        <div class="container">
                <div class="center">
                        <br><br><br><br>         
                        
                </div> 
            <div class="row contact-wrap"> 
            <br>
            <form method="POST" action="adm_proseslogin.php">
                <div class="row contact-wrap">
                
                    <div class="col-lg-13 col-lg-offset-2 text-left">
                     <div class="form-group">
                            <label> <h2>Silahkan Login</h2>
                                    <h4>Masukkan Username dan Password Anda!</h4>
                            </label>
                            <hr>
                     </div>
                     <div class="form-group">
                            <label> Nama Akun </label>
                            <input type="text" name="usr" class="form-control" required>
                    </div>
                     <div class="form-group">
                            <label> Password </label>
                            <input type="password" name="pwd" class="form-control" required>
                    </div>
                    <div class="col-sm-15 col-sm-offset-1 text-right">
                        <div class="form-group">
                        <br>
                            <button type="submit" name="login" class="btn btn-info" value="login" >Login</button>
              </form>
                         </div>
                    </div>
                      <div class="left">
                         <input type="button" value="<?php if (!empty ($_GET['msg'])) echo $_GET['msg']; ?>" class="btn btn-danger">
                         <br><br><br>
                    </div>
                    </div>
				</div>
		
        </div>
  </section>
  
  <footer id="footer">
    

    <div class="container">
      <div class="copyright">
       &copy; Copyright <strong>DzikyR</strong>. All Rights Reserved
      </div>
      <div class="credits">
        
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>