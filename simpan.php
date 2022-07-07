
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
		<center> <h3 class="deskripsi"> <font face="verdana" color="#FFFFF0" >  DATA TELAH DI SIMPAN</h3> </center>
	</header>




 
	<div class="menu">
		<ul>
			<li><a href="form.php"> TAMBAH DATA </a></li>
			<li><a href="tampil.php"> LIHAT DATA </a></li>
			<li><a href="index.php">HOME</a></li>
		</ul>
	</div>
 
	
</div>


<?php
	$conn = new mysqli ("localhost", "root", "", "project" ) ;
	mysqli_connect_errno ();
	
	$conn->query ("insert into pasien (kode,nama,alamat,nomor_surat,norm,tglkrs,dx,bpjs,umum,tgl_ktrl,spri,keterangan)
		values ('".$_POST['kode1']."','".$_POST['nama']."','".$_POST['alamat']."','".$_POST['nomor_surat']."','".$_POST['norm']."','".$_POST['tglkrs']."','".$_POST['dx']."','".$_POST['bpjs']."','".$_POST['umum']."','".$_POST['tgl_ktrl']."','".$_POST['spri']."','".$_POST['keterangan']."') ");
		
	
	##echo "data telah disimpan"
	
?>


	
</body>
</html>
