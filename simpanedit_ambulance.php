<?php
	$conn = new mysqli ("localhost", "root", "", "project" ) ;
	mysqli_connect_errno ();
	
	$id	= $_POST['id'];
	$kode	= $_POST['kode'];
	$nama	= $_POST['nama'];
	$noreg	= $_POST['noreg'];
	$alamat	= $_POST['alamat'];
	$norm	= $_POST['norm'];
	$dx	= $_POST['dx'];
	$kecamatan	= $_POST['kecamatan'];
	$tujuan	= $_POST['tujuan'];
	$sopir	= $_POST['sopir'];
	$petugas	= $_POST['petugas'];
	$jamx	= $_POST['jamx'];
	$jamy	= $_POST['jamy'];
	$kmx	= $_POST['kmx'];
	$kmy	= $_POST['kmy'];
	
	//echo $nama;
	
	$sql=$conn->query("update ambulance set kode='$kode',nama='$nama', noreg='$noreg' ,alamat='$alamat',
		norm='$norm',dx='$dx',kecamatan='$kecamatan',tujuan='$tujuan',sopir='$sopir',petugas='$petugas',jamx='$jamx',jamy='$jamy' ,kmx='$kmx',kmy='$kmy'
		where id=$id ");
	echo $id_nama;
	
	header ("location:tampil1.php")
?>	

