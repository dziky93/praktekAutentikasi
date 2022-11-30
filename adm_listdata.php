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
            <br><br><br><br>    <br>
                <h2>List Data Dataset</h2>
            </div>
            <table class="table" >
                    <tr>
                        <td width="12">Id</td>
                        <td  style="width: 80px;">Kehadiran</td>
                        <td width="80">Ibadah</td>
                        <td width="80">Prestasi</td>
                        <td width="80">Pengurus Organisasi</td>
                        <td width="80">Disiplin</td>
                        <td width="80">Edit/Hapus</td>
                        
		    	    </tr><!--
                    <?php
					 include "konfigurasi/koneksi.php";
					$batas = 4;
					$pg = isset($_GET['pg'])?$_GET['pg']:"";
					
					if(empty($pg)){
					$posisi = 0;
					$pg = 1;
					}else{
					$posisi = ($pg-1)*$batas;
					}
					
					$sql = "select * from dataset ORDER BY id_dtset ASC limit $posisi,$batas";
					$hasil = mysql_query($sql,$con);
					$no = 1+$posisi;
					while ($baris = mysql_fetch_row($hasil)) {
					?>
				<tr>
                	<td><?php echo $baris[0]; ?></td>
                    <td><?php echo $baris[1]; ?></td>
                    <td><?php echo $baris[2]; ?></td>
                    <td><?php echo $baris[3]; ?></td>
                    <td><?php echo $baris[4]; ?></td>
                    <td><?php echo $baris[5]; ?></td>
                    
                    
               <td>
			    <form method="POST" action="adm_editdataset.php">
				 <input name="id" type="hidden" value="<?php echo $baris[0]; ?>"> 
				 <input type="submit" value="Edit" class="btn btn-success">
                </form>
			   </td>
			<td>
			    <form action="adm_hapusdatalokawal.php" method="POST">
				<input name="id" type="hidden" value="<?php echo $baris[0]; ?>"> 
				<input type="submit" value="Hapus" class="btn btn-danger"> 
			    </form>
			</td>
			
		    	
		    </tr>
               <?php 
			   			$no++;
						} 
				?>
               </table> 
                 </div></div>
                 <?php
                 $jml_data = mysql_num_rows(mysql_query("select * from dataset",$con));
					$jmlHalaman = ceil($jml_data/$batas);
					
					if($pg>1){
					$link = $pg-1;
					$prev = "<a href='?pg=$link' class='btn btn-info page-scroll'>Prev &nbsp </a>";
					}else{
					$prev = "<a href='' class='btn btn-success page-scroll'>Prev &nbsp </a>";
					}    
					//nav nomor	
					$nmr = "";
					for($i=1; $i<=$jmlHalaman; $i++){
					if($i == $pg){
					$nmr .="<a href='' class='btn btn-danger page-scroll'>$i </a>";
					}else{
					$nmr .="<a href='?pg=$i' class='btn btn-warning page-scroll'>$i </a>";
					}
					}
					//nav next
					if($pg<$jmlHalaman){
					$link = $pg+1;
					$next = "<a href='?pg=$link' class='btn btn-success page-scroll'>&nbsp Next </a>";
					}else{
					$next="&nbsp Next";
					}
					
					
				?>	
                <div class="col-sm-11 col-sm-offset-1 text-right">
						<div class="form-group">
						<br>
						  <?php echo $prev.$nmr.$next; ?>
						
                        </div>  
				</div>
      -->
				
	</section>
    <br><br>
    
  
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