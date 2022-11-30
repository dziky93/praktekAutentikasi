<?php include "konfigurasi/koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Politeknik AKbara</title>
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
          <li><a href="usr_visimisi.php">Visi Misi</a></li>
          <li><a href="usr_strukturorg.php">Struktur Organisasi</a></li>
          <li><a href="adm_login.php">Login</a></li>
          
        </ul>
      </nav>
      
    </div>
  </header><!-- #header -->
 
 
<section id="contact-info">
        <div class="container">
            <div class="center">
            <br><br><br><br>        
            <h4>Perhitungan Kedisiplinan Politeknik Akbara - Naive Bayes</h4>
                    <p class="lead">Silahkan lengkapi data atribut dibawah ini!</p>
                    <hr>
                    
                    
            </div>
            <!--
            <div class="row contact-wrap">
            <div class="col-sm-5 col-sm-offset-1">
                <div class="form-group">
                  <form  method="POST" name="hitbayes" id="hitbayes" class="contact-form" action="usr_proseshit.php"> 
                  <label>Kehadiran</label>
							        <?php 
								            /*$sql = "SELECT * FROM nilai_atribut where id_atribut='1'";
								            $result = mysql_query($sql,$con); ?>
								            <select name="kehadiran" class="form-control" id="kehadiran">
								            <option>-PILIH-</option>
									            <?php while($kehadiran = mysql_fetch_assoc($result))
										            	{
                                      echo '<option value="'.$kehadiran['id_nilai']. '">' . $kehadiran['nm_nilaiatribut'] . '</option>';
                                                    
                                  }*/
                                           		
									    ?>        
								            </select>
					      </div>
               <div class="form-group">
                  <label>Ibadah</label>
							        <?php 
								
								            $sql = "SELECT * FROM nilai_atribut where id_atribut='2'";
							            	$result = mysql_query($sql,$con); ?>
								            <select name="ibadah" class="form-control" id="ibadah">
								            <option>-PILIH-</option>
									          <?php while($ibadah = mysql_fetch_assoc($result))
											         {
                                    echo '<option value="'.$ibadah['id_nilai']. '">' . $ibadah['nm_nilaiatribut'] . '</option>';
                             
											          }
													
									    ?>        
								            </select>
					      </div>
            </div>
            <div class="col-sm-5">
               <div class="form-group">
                  <label>Prestasi</label>
							        <?php 
								
								          $sql = "SELECT * FROM nilai_atribut where id_atribut='3'";
								          $result = mysql_query($sql,$con); ?>
								          <select name="pres" class="form-control" id="pres">
								          <option>-PILIH-</option>
									        <?php while($pres = mysql_fetch_assoc($result))
											          {
													          echo '<option value="'.$pres['id_nilai']. '">' . $pres['nm_nilaiatribut'] . '</option>';
											          }
													
									    ?>        
								          </select>
						    </div>
                <div class="form-group">
                   <label>Pengurus Organisasi</label>
							        <?php 
								
								        $sql = "SELECT * FROM nilai_atribut where id_atribut='4'";
								        $result = mysql_query($sql,$con); ?>
								        <select name="peng_organisasi" class="form-control" id="peng_organisasi">
								        <option>-PILIH-</option>
									      <?php while($peng_organisasi = mysql_fetch_assoc($result))
											        {
													          echo '<option value="'.$peng_organisasi['id_nilai']. '">' . $peng_organisasi['nm_nilaiatribut'] . '</option>';
                               }
													
									      ?>        
								        </select>
                   </div> 
                   <div class="col-sm-13 col-sm-offset-1 text-right">
                   <div class="form-group">
						          <button type="submit" name="pesan" value="pesan" class="btn btn-success" >Proses</button>
                   </form>
                   </div>
                        </div>
					  </div> 
                    </div>
                    
                </div>
                
          </div>  
        </div>
    </section> -->
    <br><br><br><br><br><br>
   
   <!--==========================
    Footer
  ============================-->
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
