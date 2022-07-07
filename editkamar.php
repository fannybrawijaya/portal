
<html>
<head>
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
  background-color: #00BFFF;
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
		<center> <h3 class="deskripsi"> Kapasitas Ruangan RSIA FATIMAH</h3> </center>
	</header>
 
 


 
	<div  class="menu">
		
			<a style="font-size:150%;" > <font face="verdana"> UPDATE  KAMAR </font> </a> 
	</div>
 
	
</div>

<?php
	$conn = new mysqli ("localhost", "root","","project");
	mysqli_connect_errno ();
	
	$id   = $_GET['id'];
	$sql=$conn->query("select * from ruangan where id='$id'");
	
	while ($rs=$sql->fetch_object() ) {
			$kode=$rs->kode;
			$nama=$rs->nama;
			$kapasitas=$rs->kapasitas;
			$tersedia=$rs->tersedia;
			$bersalin=$rs->bersalin;
			$anak=$rs->anak;
			$jam=$rs->jam;

	}
?>	










<//?php
	$id  		 = $_POST['id'];
	$kode  		 = $_POST['kode'];
	$nama	  	= $_POST['nama'];
	$kapasitas  = $_POST['kapasitas'];
	$tersedia  	 = $_POST['tersedia'];
	$bersalin  		 = $_POST['bersalin'];
	$anak  		 = $_POST['anak'];
	$jam  		 = $_POST['jam'];

?>

<?php echo $kode; ?>
<form method="post" action="update.php">
<input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
<font face="verdana" >
<table  width="400" style="background-color:#eee;"  border='1'>
	<tr>
	
		<td> Kode Kelas</td>  <td> <input type="text" name="kode"  value="<?php echo $kode; ?>"><br> </td> 
	</tr>
	


	<tr> 
		<td> Nama Ruang</td> <td> <input type="text" name="nama" value="<?php echo $nama; ?>" ><br> </td>
	</tr>
	<tr>
		<td> Kapasitas </td> <td> <input type="text" name="kapasitas" value="<?php echo $kapasitas; ?>" ><br> </td>

	</tr>
	
	
	<tr>
		<td> Tersedia </td> <td> <input type="text" name="tersedia" value="<?php echo $tersedia; ?>" ><br> </td>
	</tr>
	
	
	<tr>
		<td> Bersalin </td> <td> <input type="text" name="bersalin" value="<?php echo $bersalin; ?>"><br> </td>
	</tr>
	
	<tr>
		<td> Anak </td> <td> <input type="text" name="anak" value="<?php echo $anak; ?>" ><br> </td>
	</tr>
	<tr>
		<td> Tanggal & Waktu Update </td> <td> <input type="text" name="jam" value="<?php echo $jam; ?>" ><br> </td>
	</tr>


	</font>





	<input type="submit" class="active" value=" &nbsp;&nbsp;&nbsp Update &nbsp;&nbsp;&nbsp">
</form>



</body>
</html>
