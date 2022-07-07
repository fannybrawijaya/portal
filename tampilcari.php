


<html>
<head>
	<title>SURAT KONTROL</title>
		
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
		<center> <h1 class="judul">RSIA	FATIMAH</h1> </center>
		<center> <h3 class="deskripsi"> SISTEM INFORMASI MENEJEMEN - SURAT KONTROL</h3> </center>
	</header>
 
 


 
	<div class="menu">
		<ul>
			<li><a href="form.php"> TAMBAH DATA </a></li>
			<li><a href="tampil.php"> LIHAT DATA </a></li>
			<li><a href="index.php">HOME</a></li>
		</ul>
	</div>
 
	
</div>



<form action="tampilcari.php" method="post">
    <input class="search" type="text" name="cari" placeholder="Cari..." required>
    <input class="button" type="submit" name="btncari" value="Cari">
	
	<button type="submit" name="cari">Cari </button>
</form>


<?php
	$conn = new mysqli ("localhost", "root","","project");
	mysqli_connect_errno ();
?>	
	<table border='1'>
	<tr>
		<td>kode</td>
		<td>nama</td>
		<td>alamat</td>
		<td>Nomor Surat</td>
		<td>norm</td>
		<td>tgl_KRS</td>
		<td>Diagnosa</td>
		<td>BPJS</td>
		<td>UMUM</td>
		<td>TANGGAL Kontrol</td>
		<td>NUMERIK/SPRI</td>
		<td>KETERANGAN</td>
		
		
		<td>&nbsp;</td>
	</tr>
<?php
	if(isset($_POST['btncari]){
		$cari = $_POST['cari'];

	$sql=$conn->query ("select * from pasien where='$cari' ");
	
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
		
		<td><a href="hapus.php?id=<?php echo $rs->Id; ?>">hapus</a></td>
		</tr>

<?php
	}	}
?>
	</table>
	
	
	
	
	
</body>
</html>
