
<html>
<head>
<link rel="shortcut icon" href="x.png"> 
	<title>Sistem Informasi menejemen *** Ambulance</title>
		
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

	</style>
	
</head>
<body  bgcolor="	#0b821e">

<div class="content">
	<header>
		<center> <h1 class="judul"> <font face="verdana" color="#FFFFF0" >   FORM AMBULANCE</h1> </center>
	</header>
 
 


 
	<div class="menu">
		<ul>
			<li><a class="active" href="index.php">HOME</a></li>
			<li><a href="tampil1.php">LIHAT DATA </a></li>
		</ul>
	</div>
 
	
</div>




<form method="post" action="simpan1.php">
<font face="verdana" >
<table  width="400" style="background-color:#eee;"  border='5'>
	<tr>
	
		<td> Kode </td>  <td> <input type="text" name="kode"><br> </td> 
	</tr>
	
	<tr> 
		<td> Nama </td> <td> <input type="text" name="nama"><br> </td>
	</tr>
	<tr>
		<td> NoReg Surat Jalan </td> <td> <input type="text" name="noreg"><br> </td>

	</tr>
	
	
	<tr>
		<td> Alamat </td> <td> <input type="text" name="alamat"><br> </td>
	</tr>
	
	
	<tr>
		<td> Norm </td> <td> <input type="text" name="norm"><br> </td>
	</tr>
	
	<tr>
		<td> Tgl Rujuk </td> <td> <input type="text" name="tglrjk"><br> </td>
	</tr>
	
	<tr>
	
		<td> Diagnosa </td> <td> <input type="text" name="dx"><br> </td>
	</tr>
			
	<tr>
	
		<td> Tujuan Rujuk </td> <td> <input type="text" name="tujuan"><br> </td>
	</tr>

	
		<tr>
	
		<td> Sopir </td> <td> <input type="text" name="sopir"><br> </td>
	</tr>

	<tr>
	
		<td>Petugas Rujuk</td> <td> <input type="text" name="petugas"><br> </td>
	</tr>
	
	
	<tr>
	
		<td>Jam Awal</td> <td> <input type="text" name="jamx"><br> </td>
	</tr>
		
	<tr>
	
		<td>KM Awal</td> <td> <input type="text" name="kmx"><br> </td>
	</tr>
		
	<input type="submit" value="simpan">
</form>


	
</body>
</html>
