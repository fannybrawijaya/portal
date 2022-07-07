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
<body  bgcolor="	#0b821e">
<div class="content">
	<header>
		<center> <h1 class="judul"> <font face="verdana" color="#FFFFF0"  > RSIA	FATIMAH</h1> </center>
		<center> <h3 class="deskripsi"> SISTEM INFORMASI MENEJEMEN - Surat Rekom DPJP</h3> </center>
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
<form method="post" action="simpan.php">
<font face="verdana" >
<table  width="400" style="background-color:#eee;"  border='5'>
	<tr>
		<td> Kode </td>  <td> <input type="text" name="kode1"><br> </td>
	</tr>
	<tr>
		<td> Nama </td> <td> <input type="text" name="nama"><br> </td>
	</tr>
	<tr>
		<td> Nomor Rekom </td> <td> <input type="text" name="nomor_surat"><br> </td>
	</tr>
	<tr>
		<td> Alamat </td> <td> <input type="text" name="alamat"><br> </td>
	</tr>
	<tr>
		<td> Norm </td> <td> <input type="text" name="norm"><br> </td>
	</tr>
	<tr>
		<td> Diagnosa </td> <td> <input type="text" name="dx"><br> </td>
	</tr>
		<tr>
		<td> BPJS </td> <td> <input type="text" name="bpjs"><br> </td>
	</tr>
	<tr>
		<td> UMUM </td> <td> <input type="text" name="umum"><br> </td>
	</tr>
	
	</font>
	<input type="submit" class="active3"  value="  &nbsp;&nbsp;&nbsp;  SIMPAN &nbsp;&nbsp;&nbsp; ">
</form>
</body>
</html>