<html>
<head>
<link rel="shortcut icon" href="x.png"> 
	<title> Nomor Rekam Medis</title>
		
	
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

table {
  border-collapse: collapse;
  width: 100%;
}
th, td {
  padding: 0.25rem;
  text-align: left;
  border: 1px solid #c2c2c2;
}
tbody tr:nth-child(odd) {
  background: #d3d3d3;
}

</style>
	
</head>
<body  bgcolor="	#0b821e"> 
<//font face="verdana" >
<ul>
  <li><a class="active" href="form.php">Kode</a></li>
  <li><a class="active" href="form.php">No</a></li>
  <li><a class="active" href="form.php">TGL</a></li>
  <li><a class="active" href="form.php">Norm Baru</a></li>
  <li><a class="active" href="form.php">Norm Lama</a></li>
  <li><a href="index.php">&nbsp;&nbsp;&nbsp Nama &nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp </a></li>
  <li><a class="active" href="tampil.php">&nbsp;&nbsp;&nbsp &nbsp;&nbsp Alamat &nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp </a></li>
  <li><a> Nomor Surat&nbsp;&nbsp&nbsp;&nbsp</a></li>
  <li><a class="active" >Norm</a></li>
  <li><a>Tgl_KRS</a></li>
  <li><a class="active" > Diagnosa  &nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp &nbsp </a></li>
  <li><a>Bpjs</a></li>
  <li><a class="active"> Umum </a></li>
  <li><a>Tgl Kontrol</a></li>
  <li><a class="active"> SPRI </a></li>
  <li><a>Keterangan</a></li>
</ul>
</font>


<div class="content">
	<header>
		<center> <h3 class="deskripsi"> <font face="verdana" color="#FFFFF0" >Nomor Rekam Medis</h3> </center>
	</header>
 
 


 
	<div class="menu">
		<ul>
			<li><a href="form.php"> TAMBAH DATA </a></li>
			<li><a class="active"href="\portal\index.php">HOME</a></li>
		</ul>
	</div>
 
	
</div>


<form action="" method="POST">
    <input type="text" name="query"  placeholder="Cari Berdasarkan NORM" />
    <input type="submit" name="cari" class="active" value="CARI" />
</form>



<?php
	$conn = new mysqli ("localhost", "root","","project");
	mysqli_connect_errno ();
?>	


	<table align="center" width="800" style="background-color:#FFFFF0;" border='1'>
	<tr style="background-color:#4CAF50;">
		<td>id</td>
		<td>No</td>
		<td>TGL</td>
		<td>Rm Baru</td>
		<td>Rm Lama</td>
		<td>Nama</td>
		<td>Umur</td>
		<td>Jenis Kelamin</td>
		<td>Alamat</td>
		<td>No Hp</td>
		<td>Rawat Jalan Poli</td>
		<td>Norm</td>
		<td>Tgl_KRS</td>
		<td>Diagnosa</td>
		<td>BPJS</td>
		<td>UMUM</td>
		<td>Tgl_Kontrol</td>
		<td>NUMERIK/SPRI</td>
		<td>Keterangan</td>
		
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
	
	
	
<?php

	if(isset($_POST['query'])){
		$query=$_POST['query'];
		$sql=$conn->query("select * from norm where norm LIKE '%".$query."%' OR nama LIKE '%".$query."%' OR spri LIKE '%".$query."%' order by spri desc");
		
		
	}else{ 
		$sql=$conn->query("select * from norm order by spri desc");
	}
	while ($rs=$sql->fetch_object () ) {
?>
	<tr>
		<td><?php echo $rs->kode;?></td>
		<td><?php echo $rs->nama?></td>
		<td><?php echo $rs->alamat?></td>
		<td><?php echo $rs->nomor_surat?></td>
		<td><?php echo $rs->norm?></td>
		<td><?php echo $rs->tglkrs?></td>
		<td><?php echo $rs->dx?></td>
		<td><?php echo $rs->bpjs?></td>
		<td><?php echo $rs->umum?></td>
		<td><?php echo $rs->tgl_ktrl?></td>
		<td><?php echo $rs->spri?></td>
		<td><?php echo $rs->keterangan?></td>
		
		
		<td><a href="formedit.php?id=<?php echo $rs->id; ?>">edit</a></td>
		<td><a href="hapus.php?id=<?php echo $rs->id; ?>">X</a></td>
		</tr>
		

<?php
	}	
?>
	</table>
	
	
	
	
	
</body>
</html>
