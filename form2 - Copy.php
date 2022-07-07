
<html>
<head>
<link rel="shortcut icon" href="x.png"> 
	<title>Sistem Informasi menejemen ** Kamar Perawatan </title>
		
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
		
		li a:hover {
  background-color: #111;
}
		.active {
  background-color: #4CAF50;
}		.active2 {
  background-color: #dd4b39;
}

	</style>
	
</head>
<body>
<ul>
  <li><a href="formkamar.php">Dashboard Kamar</a></li>
  <li><a>&nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp </a></li>
  <li><a>&nbsp;&nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp </a></li>
  <li><a> &nbsp;&nbsp&nbsp;&nbsp </a></li>
  <li><a>&nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp </a></li>
  <li><a>&nbsp;&nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp </a></li>
  <li><a> &nbsp;&nbsp&nbsp;&nbsp</a></li>
  <li><a>&nbsp;&nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp </a></li>
  <li><a> &nbsp;&nbsp&nbsp;&nbsp </a></li>
  <li><a>&nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp </a></li>
  <li><a>&nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp </a></li>
  <li><a href="index.php">HOME</a></li>
  <li><a href="http://192.168.1.254/"> SIMRS  </a></li>
  <li><a href="https://sisrute.kemkes.go.id/baru/index.php"> SISRUTE</a></li>
</ul>

<div class="content">
	<header>
		<center> <h3 class="deskripsi"> JADWAL KAMAR OPERASI RSIA FATIMAH</h3> </center>
	</header>
 
 


 
	<div  class="menu">
		
			<a style="font-size:150%;" > <font face="verdana"> TAMBAH  JADWAL </font> </a>
		
	</div>
 
	
</div>


<?php
	$conn = new mysqli ("localhost", "root","","project");
	mysqli_connect_errno ();
?>



<form method="post" action="simpan2.php">
<font face="verdana" >
<table  width="400" style="background-color:#eee;"  border='1'>
	<tr>
	
		<td> NO RM</td>  <td> <input type="text" name="kode"><br> </td> 
	</tr>
	


	<tr> 
		<td> Nama Ruang</td> <td> <input type="text" name="nama"><br> </td>
	</tr>
	<tr>
		<td> Kapasitas </td> <td> <input type="text" name="kapasitas"><br> </td>

	</tr>
	
	
	<tr>
		<td> Tersedia </td> <td> <input type="text" name="tersedia"><br> </td>
	</tr>
	
	
	<tr>
		<td> Bersalin </td> <td> <input type="text" name="bersalin"><br> </td>
	</tr>
	
	<tr>
		<td> Anak </td> <td> <input type="text" name="anak"><br> </td>
	</tr>
	<tr>
		<td> Tanggal & Waktu Hari ini </td> <td> <input type="text" name="jam"><br> </td>
	</tr>
	
	
	
	<input type="submit" class="active" value=" &nbsp;&nbsp;&nbsp Simpan &nbsp;&nbsp;&nbsp">
</form>


	
</body>
</html>
