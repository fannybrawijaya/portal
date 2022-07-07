
<html>
<head>
	<title>jakops</title>
		
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
<body  bgcolor="	#00BFFF">

<div class="content">
	<header>
		<center> <h1 class="judul">Jadwal Kamar Operasi</h1> </center>
	</header>
 
 


 
	<div class="menu">
		<ul>
			<li><a href="form2.php"> TAMBAH DATA </a></li>
			<li><a href="kamar.php"> LIHAT DATA </a></li>
			<li><a href="index.php">HOME</a></li>
		</ul>
	</div>
 
	
</div>


<?php
	$conn = new mysqli ("localhost", "root", "", "project" ) ;
	mysqli_connect_errno ();
	
	$conn->query ("insert into kamar_ok (norm,noka,nama,tanggal,tindakan,poli)
		values ('".$_POST['norm']."','".$_POST['noka']."','".$_POST['nama']."','".$_POST['tanggal']."','".$_POST['tindakan']."','".$_POST['poli']."') ");
		
	
	echo "data telah disimpan"
	
?>


	
</body>
</html>
