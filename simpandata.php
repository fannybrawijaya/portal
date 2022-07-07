
<html>
<head>
	<title>LOBY</title>
		
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
		<center> <h1 class="judul">LOBY</h1> </center>
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
	
	$conn->query ("insert into kepegawaian (kode,nama,kapasitas,tersedia,bersalin,anak,jam)
		values ('".$_POST['kode']."','".$_POST['nama']."','".$_POST['kapasitas']."','".$_POST['tersedia']."','".$_POST['bersalin']."','".$_POST['anak']."','".$_POST['jam']."') ");
		
	
	echo "data telah disimpan"
	
?>


	
</body>
</html>
