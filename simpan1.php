
<html>
<head>
	<title>SURAT KONTROL</title>

	<style>
		ul {
		  list-style-type: none;
		  margin: 0;
		  padding: 0;
		  overflow: hidden;
		  background-color: #333333;
		}

		li {
		  float: left;
		}

		li a {
		  display: block;
		  color: white;
		  text-align: center;
		  padding: 16px;
		  text-decoration: none;
		}

	</style>

</head>
<body  bgcolor="	#0b821e">

<div class="content">
	<header>
		<center> <img class="x" src="x.png" height=150px;width=250px;  >  </center>
		<center> <h3 class="deskripsi"> <font face="verdana" color="#FFFFF0" >  DATA   AMBULANCE   TELAH   DI   SIMPAN</h3> </center>
	</header>





	<div class="menu">
		<ul>
			<li><a href="form1.php"> TAMBAH DATA </a></li>
			<li><a href="tampil1.php"> LIHAT DATA </a></li>
			<li><a href="index.php">HOME</a></li>
		</ul>
	</div>


</div>


<?php
	$conn = new mysqli ("localhost", "root", "", "project" ) ;
	mysqli_connect_errno ();

	$conn->query ("insert into ambulance (kode,nama,noreg,alamat,norm,tglrjk,dx,kecamatan,tujuan,sopir,petugas,jamx,jamy,kmx,kmy)
		values ('".$_POST['kode']."','".$_POST['nama']."','".$_POST['noreg']."','".$_POST['alamat']."','".$_POST['norm']."','".$_POST['tglrjk']."','".$_POST['dx']."','".$_POST['kecamatan']."','".$_POST['tujuan']."','".$_POST['sopir']."','".$_POST['petugas']."','".$_POST['jamx']."','".$_POST['jamy']."','".$_POST['kmx']."','".$_POST['kmy']."') ");

	##echo "data telah disimpan"
?>



</body>
</html>
