<?php 
include 'konfigurasi/koneksi.php';
$id_kehadiran = $_POST['kehadiran'];
$id_ibadah = $_POST['ibadah'];
$id_pres= $_POST['pres'];
$id_peng_organisasi = $_POST['peng_organisasi'];


//echo "kehadiran: $id_kehadiran";
//echo "ibadah: $id_ibadah ";
//echo "prestasi: $id_pres";
//echo "organisasi: $id_peng_organisasi";


//----------nm_nilaiatribut kehadiran
$sql_kehadiran = "SELECT * FROM nilai_atribut where id_nilai = '$id_kehadiran'";
$res1= mysql_query($sql_kehadiran,$con);
$nm_keh = mysql_fetch_assoc($res1);
$nm_niKehadiran = $nm_keh['nm_nilaiatribut'];

//----------nm_nilaiatribut ibadah
$sql_ibadah = "SELECT * FROM nilai_atribut where id_nilai = '$id_ibadah'";
$res2= mysql_query($sql_ibadah,$con);
$nm_ib = mysql_fetch_assoc($res2);
$nm_niIbadah = $nm_ib['nm_nilaiatribut'];

//----------nm_nilaiatribut prestasi
$sql_prestasi = "SELECT * FROM nilai_atribut where id_nilai = '$id_pres'";
$res3= mysql_query($sql_prestasi,$con);
$nm_press = mysql_fetch_assoc($res3);
$nm_niPres = $nm_press['nm_nilaiatribut'];

//----------nm_nilaiatribut peng orga
$sql_pOrg = "SELECT * FROM nilai_atribut where id_nilai = '$id_peng_organisasi'";
$res4= mysql_query($sql_pOrg,$con);
$nm_pOrg = mysql_fetch_assoc($res4);
$nm_niPOrg = $nm_pOrg['nm_nilaiatribut'];

//menghitung jml disiplin YA 
$q1 = mysql_query("SELECT * FROM dataset where disiplin='11'");
$jmlDisYa = mysql_num_rows($q1);
//echo "Jumlah disiplin ya= ". $jmlDisYa;

//menghitung jml disiplin tidak
$q2 = mysql_query("SELECT * FROM dataset where disiplin='12'");
$jmlDisTidak = mysql_num_rows($q2);
//echo "Jumlah disiplin tidak = ". $jmlDisTidak;

//menghitung atribut yang diketahui
//kehadiran
$q3 = mysql_query("SELECT * FROM dataset where kehadiran='$id_kehadiran' AND disiplin='11'");
$jmlKehadiranYa = mysql_num_rows($q3);
//echo "Jumlah kehadiran ya dan id_kehadiran ".$id_kehadiran ." = ".$jmlKehadiranYa;

$q4 = mysql_query("SELECT * FROM dataset where kehadiran='$id_kehadiran' AND disiplin='12'");
$jmlKehadiranTidak = mysql_num_rows($q4);
//echo "Jumlah kehadiran tidak dan id_kehadiran ".$id_kehadiran ." = ".$jmlKehadiranTidak;

//ibadah
$q5 = mysql_query("SELECT * FROM dataset where ibadah='$id_ibadah' AND disiplin='11'");
$jmlIbadahYa = mysql_num_rows($q5);
//echo "Jumlah ibadah ya dan id_ibadah ".$id_ibadah ." = ".$jmlIbadahYa;

$q6 = mysql_query("SELECT * FROM dataset where ibadah='$id_ibadah' AND disiplin='12'");
$jmlIbadahTidak = mysql_num_rows($q6);
//echo "Jumlah ibadah tidak dan id_ibadah ".$id_ibadah ." = ".$jmlIbadahTidak;

//prestasi
$q7 = mysql_query("SELECT * FROM dataset where prestasi='$id_pres' AND disiplin='11'");
$jmlPrestasiYa = mysql_num_rows($q7);
//echo "Jumlah Prestasi ya dan id_pres ".$id_pres ." = ".$jmlPrestasiYa;

$q8 = mysql_query("SELECT * FROM dataset where prestasi='$id_pres' AND disiplin='12'");
$jmlPrestasiTidak = mysql_num_rows($q8);
//echo "Jumlah Prestasi tidak dan id_pres ".$id_pres ." = ".$jmlPrestasiTidak;


//pengurus organisasi
$q9 = mysql_query("SELECT * FROM dataset where pengOrg='$id_peng_organisasi' AND disiplin='11'");
$jmlPengOrgYa = mysql_num_rows($q9);
//echo "Jumlah pengurus organisasi ya dengan id_peng_organisasi ".$id_peng_organisasi ." adl ".$jmlPengOrgYa;

$q10 = mysql_query("SELECT * FROM dataset where pengOrg='$id_peng_organisasi' AND disiplin='12'");
$jmlPengOrgTidak = mysql_num_rows($q10);
//echo "Jumlah pengurus organisasi tidak dengan id_peng_organisasi ".$id_peng_organisasi ." adl ".$jmlPengOrgTidak;



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>MTsn Plupuh Sragen</title>
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
        <a href="#intro" class="scrollto"><img src="img/logoo.png" alt="" class="img-fluid"></a>
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
            <h2>Hasil Perhitungan Naive Bayes</h2>
                    
                    <hr>
                    <p class="lead">Atribut yang diketahui seperti berikut ini:</p>
                    
                    
            </div>
            <div class="row contact-wrap">
            
            <div class="col-sm-5 col-sm-offset-1">
                       <div class="form-group">
                        <label>Kehadiran</label>
						<input type="text" name="keh" class="form-control" value="<?php echo "$nm_niKehadiran" ?>" readonly>	
					   </div>
                       <div class="form-group">
                       <label>Ibadah</label>
                       <input type="text" name="ib" class="form-control" value="<?php echo "$nm_niIbadah" ?>" readonly>	
					   </div>
                       <div class="form-group">
                       <label>Prestasi</label>
                            <input type="text" name="pre" class="form-control" value="<?php echo "$nm_niPres" ?>" readonly>	
						</div>
                        
                </div>
                <div class="col-sm-5">
                       
                <div class="form-group">
                       <label>Pengurus Organisasi</label>
                            <input type="text" name="p_Org" class="form-control" value="<?php echo "$nm_niPOrg" ?>" readonly>        
                        </div> 
                        <div class="form-group">
                        <label>Disiplin</label>
                            <input type="text" name="diss" class="form-control" value="Dicari" readonly> 
                        </div>
                        <div class="col-sm-13 col-sm-offset-1 text-right">
                        <div class="form-group">
						 
                        </form>
                        </div>
                        </div>
					  </div> 
                    </div>
                    
                </div>
                
          </div>  
        </div>
    </section>
    <section id="contact-info">
        <div class="container">
            <div class="center">
            <br><br>        
            <h2>Hasil Perhitungan Naive Bayes</h2>
            <p class="lead">Rincian perhitungan kedisiplinan siswa seperti berikut ini:</p>
             <hr>
             <br>        
                    
            </div>
            <div class="row contact-wrap">
            <div class="col-sm-7 col-sm-offset-1">
            <table class="table">
                <tr>
                    <th>Atribut</th>
                    <th>Nilai Atribut</th>
                    <th>Atribut dicari (Disiplin)</th>
                    <th>Y/T</th>
                    <th>Nilai Kemungkinan</th>
                    
                </tr>
                <tr>
                    <th rowspan="2">Kehadiran</th>
                    <td><?php echo $nm_niKehadiran; ?></td>
                    <td><?php echo $jmlKehadiranYa; ?></td>
                    <td><?php echo $jmlDisYa; ?></td>
                    <td><?php $k1 = $jmlKehadiranYa/$jmlDisYa;
                              echo $k1; ?>  </td>
                            
                   
                </tr>
                <tr>    
                    <td><?php echo $nm_niKehadiran; ?></td>
                    <td><?php echo $jmlKehadiranTidak; ?></td>
                    <td><?php echo $jmlDisTidak; ?></td>
                    <td><?php $k2 = $jmlKehadiranTidak/$jmlDisTidak;
                              //$kk2 = number_format($k2);
                              echo $k2; ?>  </td>
                    
                </tr>
                <tr>    
                    <th rowspan="2">Ibadah</th>
                    <td><?php echo $nm_niIbadah; ?></td>
                    <td><?php echo $jmlIbadahYa; ?></td>
                    <td><?php echo $jmlDisYa; ?></td>
                    <td><?php $i1 = $jmlIbadahYa/$jmlDisYa;
                              echo $i1; ?>  </td>
                    
                </tr>
                <tr>
                    <td><?php echo $nm_niIbadah; ?></td>
                    <td><?php echo $jmlIbadahTidak; ?></td>
                    <td><?php echo $jmlDisTidak; ?></td>
                    <td><?php $i2 = $jmlIbadahTidak/$jmlDisTidak;
                              echo $i2; ?>  </td>
                    
                </tr>
                <tr>    
                    <th rowspan="2">Prestasi</th>
                    <td><?php echo $nm_niPres; ?></td>
                    <td><?php echo $jmlPrestasiYa; ?></td>
                    <td><?php echo $jmlDisYa; ?></td>
                    <td><?php $pr1 = $jmlPrestasiYa/$jmlDisYa;
                              echo $pr1; ?>  </td>
                </tr>
                <tr>
                    <td><?php echo $nm_niPres; ?></td>
                    <td><?php echo $jmlPrestasiTidak; ?></td>
                    <td><?php echo $jmlDisTidak; ?></td>
                    <td><?php $pr2 = $jmlPrestasiTidak/$jmlDisTidak;
                              echo $pr2; ?>  </td>
                </tr>
                <tr>    
                    <th rowspan="2">Pengurus Organisasi</th>
                    <td><?php echo $nm_niPOrg; ?></td>
                    <td><?php echo $jmlPengOrgYa; ?></td>
                    <td><?php echo $jmlDisYa; ?></td>
                    <td><?php $po1 = $jmlPengOrgYa/$jmlDisYa;
                              echo $po1; ?>  </td>
                </tr>
                <tr>
                    <td><?php echo $nm_niPOrg; ?></td>
                    <td><?php echo $jmlPengOrgTidak; ?></td>
                    <td><?php echo $jmlDisTidak; ?></td>
                    <td><?php $po2 = $jmlPengOrgTidak/$jmlDisTidak;
                              echo $po2; ?>  </td>
                </tr>
                

            </table>      
                        
            </div>
                <div class="col-sm-8">
                <div class="form-group">
                    <table>
                        <tr>
                            <th width="120">Atribut dicari</th>
                            <th width="120">Nilai Atribut</th>
                            <th width="180">Likelihood</th>
                            <th width="120">Jumlah</th>
                            <th width="120">Hasil Akhir</th>
                        </tr>
                        <tr>
                            <td>Disiplin</td>
                            <td>Ya</td>
                            <td><?php $hsl_y=$k1*$i1*$pr1*$po1;
                                      echo $hsl_y; ?>
                                </td>
                            <td><?php echo $jmlDisYa; ?></td>
                             <td><?php $hsl_akhY=$hsl_y*$jmlDisYa;
                                       echo   $hsl_akhY;?>
                                    </td>   
                        </tr>
                        <tr>

                            <td>Disiplin</td>
                            <td>Tidak</td>
                            <td><?php $hsl_t=$k2*$i2*$pr2*$po2;
                                      echo $hsl_t;?>  
                                </td>
                            <td><?php echo $jmlDisTidak; ?></td>
                            <td><?php $hsl_akhT=$hsl_t*$jmlDisTidak;
                                       echo   $hsl_akhT;?>
                                    </td>    
                        </tr>
                        
                        <tr>
                                <td colspan="5">&nbsp;</td>
                        </td>
                        <tr>
                        <?php 
                             $lk_poss = ($hsl_akhY/($hsl_akhY+$hsl_akhT))*100;
                             $lk_pos = number_format($lk_poss,2);
                             $lk_nee = ($hsl_akhT/($hsl_akhT+$hsl_akhY))*100;
                             $lk_ne = number_format($lk_nee,2);
                                if($hsl_akhY>$hsl_akhT)
                                {   
                                    $lk_pos;
                                    $d="Disiplin";
                                    echo '<td colspan="5"> <input type="button" value="Hasil kemungkinan besar menggunakan algoritma naive bayes menyatakan bahwa siswa tersebut '. $lk_pos .'% '. $d .'" class="btn btn-success"></td>';
                                    //echo '<td colspan="5"> Hasil kemungkinan besar menggunakan algoritma naive bayes menyatakan bahwa siswa tersebut '. $lk_pos .'% '. $d .' </td>';
                                }
                                else
                                {
                                    $lk_ne;
                                    $d="Tidak Disiplin";
                                    echo '<td colspan="5"> <input type="button" value="Hasil kemungkinan besar menggunakan algoritma naive bayes menyatakan bahwa siswa tersebut '. $lk_ne .'% '. $d .'" class="btn btn-danger"></td>';
                                    //echo '<td colspan="5"> Hasil kemungkinan besar menggunakan algoritma naive bayes menyatakan bahwa siswa tersebut '.  $lk_ne .'% '. $d .' </td>';
                                }
                        ?>
                            
                        </tr>    
                    </table>

                </div>
                </div>
                
            
        </div>
    </section>
    
    
    <footer id="footer">
    

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>STMIK SINAR NUSANTARA - 13.5.00018 Brillian Taufik K. 2020</strong>. All Rights Reserved
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