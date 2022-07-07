
<html>
<head>
<link rel="shortcut icon" href="x.png">
	<title>Sistem Informasi menejemen *** SURAT KONTROL</title>

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
		.active {
  background-color: #4CAF50;
}
		.active3 {
  background-color: #dd4b39;
}

	</style>

</head>
<body  bgcolor="#0b821e">

<div class="content">
	<header>
		<center> <h1 class="judul">RSIA	FATIMAH</h1> </center>
		<center> <h3 class="deskripsi"> SISTEM INFORMASI MENEJEMEN - SURAT KONTROL</h3> </center>
	</header>





	<div class="menu">
		<ul>
			<li><a class="active" href="form.php"> TAMBAH DATA </a></li>
			<li><a href="tampil1.php">LIHAT DATA </a></li>
			<li><a class="active" href="index.php">HOME</a></li>
			<li><a href="http://192.168.1.254/">SIMRS</a></li>
			<li><a class="active" href="https://sisrute.kemkes.go.id/baru/index.php">SISRUTE</a></li>
		</ul>
	</div>


</div>

<?php
	$conn = new mysqli ("localhost", "root","","project");
	mysqli_connect_errno ();
	
	$id		=$_GET['id'];
	$sql=$conn->query("select * from ambulance where id='$id'");
	
	while ($rs=$sql->fetch_object () )	{
			$kode=$rs->kode;
			$nama=$rs->nama;
			$noreg=$rs->noreg;
			$alamat=$rs->alamat;
			$norm=$rs->norm;
			$dx=$rs->dx;
			$kecamatan=$rs->kecamatan;
			$tujuan=$rs->tujuan;
			$sopir=$rs->sopir;
			$petugas=$rs->petugas;
			$jamx=$rs->jamx;
			$jamy=$rs->jamy;
			$kmx=$rs->kmx;
			$kmy=$rs->kmy;
			
	
	}
?>	

<form method="post" action="simpanedit_ambulance.php">
<input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
<font face="verdana" >
<table width="400" style="background-color:#eee;"  border='5'>
	<tr>

		<td> Kode </td>  <td> <input type="text" name="kode" value="<?php echo $kode; ?>" > <br> </td>
	</tr>

	<tr>
		<td> Nama </td> <td> <input type="text" name="nama" value="<?php echo $nama; ?>" ><br> </td>
	</tr>
	<tr>
		<td> noreg </td> <td> <input type="text" name="noreg" value="<?php echo $noreg; ?>" ><br> </td>

	</tr>


	<tr>
		<td> Alamat </td> <td> <input type="text" name="alamat" value="<?php echo $alamat; ?>" ><br> </td>
	</tr>


	<tr>
		<td> Norm </td> <td> <input type="text" name="norm" value="<?php echo $norm; ?>" ><br> </td>
	</tr>

	<tr>
		<td> dx </td> <td> <input type="text" name="dx" value="<?php echo $dx; ?>" ><br> </td>
	</tr>

	<tr>

		<td> kecamatan </td> <td> <input type="text" name="kecamatan" value="<?php echo $kecamatan; ?>" ><br> </td>
	</tr>
		<tr>

		<td> tujuan </td> <td> <input type="text" name="tujuan" value="<?php echo $tujuan; ?>" ><br> </td>
	</tr>

	<tr>

		<td> sopir </td> <td> <input type="text" name="sopir" value="<?php echo $sopir; ?>" ><br> </td>
	</tr>


		<tr>

		<td> petugas</td> <td> <input type="text" name="petugas" value="<?php echo $petugas; ?>" ><br> </td>
	</tr>

	<tr>

		<td> jamx </td> <td> <input type="text" name="jamx" value="<?php echo $jamx; ?>" ><br> </td>
	</tr>


	<tr>

		<td> jamy </td> <td> <input type="text" name="jamy" value="<?php echo $jamy; ?>" ><br> </td>
	</tr>
	<tr>

		<td> kmx </td> <td> <input type="text" name="kmx" value="<?php echo $kmx; ?>" ><br> </td>
	</tr>
		<tr>

		<td> kmy </td> <td> <input type="text" name="kmy" value="<?php echo $kmy; ?>" ><br> </td>
	</tr>
		
	

	</font>





	<input type="submit" class="active3" value="  &nbsp;&nbsp;&nbsp;  EDIT  &nbsp;&nbsp;&nbsp;  " >
</form>



</body>
</html>
