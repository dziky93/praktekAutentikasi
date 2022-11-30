<?php

session_start();
		   
			   include "konfigurasi/koneksi.php";
			   $usr = $_POST['usr'];
			   $pwd = $_POST['pwd'];
			   $login = $_POST['login'];
			   //$pwd = md5($_POST['pwd']);
			   //echo $usr;
			   //echo $pwd;
			   
			   if(isset($login))
			   {
			   	 if(!empty($usr) && !empty($pwd))
				 {
				  
				    $query = mysqli_query($koneksi,"SELECT * FROM `user` WHERE nm_user = '$usr' AND pwd= '$pwd'");
				 	if(mysqli_num_rows($query) > 0)
					{ 
						$r = mysqli_fetch_array($query);
						$_SESSION['usr'] = $r['id'];
						$_SESSION['nm_usr'] = $r['nm_user'];
						 //echo 'berhasil';
						 echo '<META HTTP-EQUIV="Refresh" CONTENT="1; URL=adm_index.php">';
				   }
				  else
				  {
                      $error = "Login gagal, User Name atau Password Tidak Valid!";
                      header("Location:adm_login.php?msg=$error");
				  
				   }
				 } 
				else
				{
					$error = "Login gagal! User Name atau Password Tidak Boleh Kosong!";
				    //balik ke halaman login
				    header("Location:usr_login.php?msg=$error");
				}
				  }
			   
			   
			   
				if(isset($_GET['msg'])) echo $_GET['msg'];
				
             ?>