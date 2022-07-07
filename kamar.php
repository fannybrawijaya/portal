
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
  background-color: #4CAF50;
}		.active2 {
  background-color: #dd4b39;
}


table {
  border-collapse: collapse;
  width: 100%;
}
th, td {
  padding: 0.25rem;
  text-align: left;
  border: 1px solid #ccc;
}
tbody tr:nth-child(odd) {
  background: #eee;
}



	</style>
	
</head>
<body>
<div class="content">

<ul>
  <li><a href="formkamar.php">Dashboard Kamar Operasi</a></li>
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
		<header>
		<center> <h3 class="deskripsi">  <font face="verdana" > Jadwal Kamar Operasi RSIA FATIMAH </font> </h3> </center>
	</header>
	</header>
 
 



 
	
</div>
 
	

<?php
	$conn = new mysqli ("localhost", "root","","project");
	mysqli_connect_errno ();
?>
	<table align="center"  border='2' >
	<tr  style="background-color:#00BFFF";">
		<td>#</td>
		<td> No Rm</td>
		<td> Nomor Kartu</td>
		<td> Nama Peserta </td>
		<td> Tanggal Operasi </td>
		<td> Jenis Tindakan </td>
		<td> Nama Poli </td>
		
		<td>&nbsp;</td>
	</tr>
<?php
	$sql=$conn->query ("select * from kamar_ok");
	while ($rs=$sql->fetch_object () ) {
?>

	
	<tr> 
		<td><?php echo $rs->id;?></td>
		<td><?php echo $rs->norm;?></td>
		<td><?php echo $rs->noka?></td>
		<td><?php echo $rs->nama?></td>
		<td><?php echo $rs->tanggal?></td>
		<td><?php echo $rs->tindakan?></td>
		<td><?php echo $rs->poli?></td>
		<td><a href="editkamar_ok.php?id=<?php echo $rs->id; ?>">Update</a></td>
		

<?php
	}	
?>

</table>


</body>
</html>
