<?php
 session_start();
 if(isset($_SESSION['usr']))
 {
    $usr = $_SESSION['usr'];
    $nm_usr = $_SESSION['nm_usr'];
 }else{
    $pesan = "Anda Tidak Berhak Mengakses Halaman Ini!! Silahkan Login Terlebih dahulu!!";
    header("Location: adm_login.php?msg=$pesan");
 }
 include "konfigurasi/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Politeknik Akbara</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/icon.png" rel="icon">
  <link href="img/icon.png" rel="apple-touch-icon">

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
          <li class="active"><a href="adm_index.php">Home</a></li>
          <li><a href="adm_dataset.php">Input Dataset</a></li>
          <li><a href="adm_listdata.php">List Dataset</a></li>
          <li><a href="adm_logout.php">Logout</a></li>
          
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header>
 
 
<section id="contact-info">
        <div class="container">
            <div class="center">
            <br><br><br><br>        
            <h2>Input Dataset</h2>
                    <p class="lead">Silahkan lengkapi data dibawah ini!</p>
                    <hr>
                    <div class="left">
                         <input type="button" value="<?php if (!empty ($_GET['msg'])) echo $_GET['msg']; ?>" class="btn btn-success">
                    </div>
                    <br>
                    
            </div>
            <!--
            <div class="row contact-wrap">
            
            <div class="col-sm-5 col-sm-offset-1">
                       <div class="form-group">
            <form  method="POST" name="simpan_dtset" id="simpan_dtset" class="contact-form" action="adm_prosesdtset.php"> 
                       <label>Kehadiran</label>
							<?php 
								
								$sql = "SELECT * FROM nilai_atribut where id_atribut='1'";
								$result = mysql_query($sql,$con); ?>
								<select name="kehadiran" class="form-control" id="kehadiran">
								<option>-PILIH-</option>
									<?php while($kehadiran = mysql_fetch_assoc($result))
											{
                          echo '<option value="'.$kehadiran['id_nilai']. '">' . $kehadiran['nm_nilaiatribut'] . '</option>';
                                                    
                      }
                                           		
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
                                                     //'<input type="hidden" name="nm_ibadah" class="form-control" value="'. $ibadah['nm_nilaiatribut'].'">';
											}
													
									?>        
								</select>
					   </div>
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
                        
                </div>
                <div class="col-sm-5">
                       
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
                        <div class="form-group">
                        <label>Disiplin</label>
							<?php 
								
								$sql = "SELECT * FROM nilai_atribut where id_atribut='5'";
								$result = mysql_query($sql,$con); ?>
								<select name="dis" class="form-control" id="dis">
								<option>-PILIH-</option>
									<?php while($dis = mysql_fetch_assoc($result))
											{
													echo '<option value="'.$dis['id_nilai']. '">' . $dis['nm_nilaiatribut'] . '</option>';
											}
													
									?>        
								</select>
                        </div>
                        <div class="col-sm-13 col-sm-offset-1 text-right">
                        <div class="form-group">
						 <button type="submit" name="pesan" value="pesan" class="btn btn-success" >Simpan</button>
                        </form>
                        </div>
                        </div>
					  </div> 
                    </div>
                    
                </div>
                
          </div>-->  
        </div>
    </section>
    <br>
    
  
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
