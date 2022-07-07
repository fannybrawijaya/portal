
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
			<li><a href="tampil.php">LIHAT DATA </a></li>
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
	$sql=$conn->query("select * from pasien where id='$id'");
	
	while ($rs=$sql->fetch_object () )	{
			$kode=$rs->kode;
			$nama=$rs->nama;
			$alamat=$rs->alamat;
			$nomor=$rs->nomor_surat;
			$norm=$rs->norm;
			$tglkrs=$rs->tglkrs;
			$dx=$rs->dx;
			$bpjs=$rs->bpjs;
			$umum=$rs->umum;
			$tglktrl=$rs->tgl_ktrl;
			$spri=$rs->spri;
			$keterangan=$rs->keterangan;
			
	
	}
?>	

<form method="post" action="update_p.php">
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
		<td> Nomor Surat </td> <td> <input type="text" name="nomor_surat" value="<?php echo $nomor; ?>" ><br> </td>

	</tr>


	<tr>
		<td> Alamat </td> <td> <input type="text" name="alamat" value="<?php echo $alamat; ?>" ><br> </td>
	</tr>


	<tr>
		<td> Norm </td> <td> <input type="text" name="norm" value="<?php echo $norm; ?>" ><br> </td>
	</tr>

	<tr>
		<td> Tgl_KRS </td> <td> <input type="text" name="tglkrs" value="<?php echo $tglkrs; ?>" ><br> </td>
	</tr>

	<tr>

		<td> Diagnosa </td> <td> <input type="text" name="dx" value="<?php echo $dx; ?>" ><br> </td>
	</tr>
		<tr>

		<td> BPJS </td> <td> <input type="text" name="bpjs" value="<?php echo $bpjs; ?>" ><br> </td>
	</tr>

	<tr>

		<td> UMUM </td> <td> <input type="text" name="umum" value="<?php echo $umum; ?>" ><br> </td>
	</tr>


		<tr>

		<td> Tanggal Kontrol </td> <td> <input type="text" name="tgl_ktrl" value="<?php echo $tglktrl; ?>" ><br> </td>
	</tr>

	<tr>

		<td>NUMERIK/SPRI</td> <td> <input type="text" name="spri" value="<?php echo $spri; ?>" ><br> </td>
	</tr>


	<tr>

		<td>Keterangan</td> <td> <input type="text" name="keterangan" value="<?php echo $keterangan; ?>" ><br> </td>
	</tr>


	</font>





	<input type="submit" class="active3" value="  &nbsp;&nbsp;&nbsp;  EDIT  &nbsp;&nbsp;&nbsp;  " >
</form>



</body>
</html>
