
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
	$sql=$conn->query("select * from kamar_ok where id='$id'");
	
	while ($rs=$sql->fetch_object() ) {
			$norm=$rs->norm;
			$noka=$rs->noka;
			$nama=$rs->nama;
			$tanggal=$rs->tanggal;
			$tindakan=$rs->tindakan;
			$poli=$rs->poli;

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

<?php echo $id; ?>
<form method="post" action="update_ok.php">
<input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
<font face="verdana" >
<table  width="400" style="background-color:#eee;"  border='1'>
	<tr>
	
		<td> No Rm</td>  <td> <input type="text" name="norm"  value="<?php echo $norm; ?>"><br> </td> 
	</tr>
	


	<tr> 
		<td> Nomor Kartu</td> <td> <input type="text" name="noka" value="<?php echo $noka; ?>" ><br> </td>
	</tr>
	<tr>
		<td> Nama Peserta </td> <td> <input type="text" name="nama" value="<?php echo $nama; ?>" ><br> </td>

	</tr>
	
	
	<tr>
		<td> Tanggal Operasi </td> <td> <input type="text" name="tanggal" value="<?php echo $tanggal; ?>" ><br> </td>
	</tr>
	
	
	<tr>
		<td> Jenis Tindakan </td> <td> <input type="text" name="tindakan" value="<?php echo $tindakan; ?>"><br> </td>
	</tr>
	
	<tr>
		<td> Nama Poli </td> <td> <input type="text" name="poli" value="<?php echo $poli; ?>" ><br> </td>
	</tr>


	</font>





	<input type="submit" class="active" value=" &nbsp;&nbsp;&nbsp Update &nbsp;&nbsp;&nbsp">
</form>



</body>
</html>
