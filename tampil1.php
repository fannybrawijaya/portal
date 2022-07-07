<html>
<head>
<link rel="shortcut icon" href="x.png"> 
	<title>Sistem Informasi menejemen *** Ambulance </title>
		
	
<style>

body {
  font-size: 20px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 10px 9px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>
	
</head>
<body bgcolor="	#0b821e"> 
<//font face="verdana" >
</font>


<div class="content">
	<header>
		<center> <h1 class="judul"> <font face="verdana" color="#FFFFF0" > RSIA	FATIMAH </font></h1> </center> 
		<center> <h3 class="deskripsi"> <font face="verdana" color="#FFFFF0" > Form Ambulance </h3> </center>
	</header>
 
 


 
	<div class="menu">
		<ul>
			<li><a href="form1.php"> TAMBAH DATA </a></li>
			<li><a class="active" href="tampil1.php"> LIHAT DATA </a></li>
			<li><a href="index.php">HOME</a></li>
			<li><a class="active" href="http://192.168.1.254/">SIMRS</a></li>
			<li><a href="https://sisrute.kemkes.go.id/baru/index.php">SISRUTE</a></li>
		</ul>
	</div>
 
	
</div>


<form action="" method="POST">
    <input type="text" name="query" placeholder="Cari Berdasarkan NORM" />
    <input type="submit" name="cari" value="search" />
</form>



<?php
	$conn = new mysqli ("localhost", "root","","project");
	mysqli_connect_errno ();
?>	
	<table  align="center" style="background-color:#FFFFF0;" border='1'>
	<tr  style="background-color:#4CAF50;">
		<td>kode</td>
		<td>nama</td>
		<td>NoReg Surat Jalan</td>
		<td>alamat</td>
		<td>norm</td>
		<td>tgl_Rujuk</td>
		<td>Diagnosa</td>
		<td>Tujuan Rujuk</td>
		<td>Sopir</td>
		<td>Petugas Rujuk</td>
		<td>Jam Awal</td>
		<td>Km Awal</td>
		
		
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
<?php

	if(isset($_POST['query'])){
		$query=$_POST['query'];
		$sql=$conn->query("select * from ambulance where norm LIKE '%".$query."%' OR nama LIKE '%".$query."%' OR kode LIKE '%".$query."%' order by id desc");
		
		
	}else{ 
		$sql=$conn->query("select * from ambulance order by id desc");
	}
	while ($rs=$sql->fetch_object () ) {
?>
	<tr>
		<td><?php echo $rs->kode;?></td>
		<td><?php echo $rs->nama?></td>
		<td><?php echo $rs->noreg?></td>
		<td><?php echo $rs->alamat?></td>
		<td><?php echo $rs->norm?></td>
		<td><?php echo $rs->tglrjk?></td>
		<td><?php echo $rs->dx?></td>
		<td><?php echo $rs->tujuan?></td>
		<td><?php echo $rs->sopir?></td>
		<td><?php echo $rs->petugas?></td>
		<td><?php echo $rs->jamx?></td>
		<td><?php echo $rs->kmx?></td>
		
		<td><a href="formedit_ambulance.php?id=<?php echo $rs->id; ?>">Edit</a></td>
		<td><a href="hapus1.php?id=<?php echo $rs->id; ?>">X</a></td>
		</tr>

<?php
	}	
?>
	</table>
	
	
	
	
	
</body>
</html>
