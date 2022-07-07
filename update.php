<?php
	$conn = new mysqli ("localhost", "root", "", "project" ) ;
	mysqli_connect_errno ();

	$id	= $_POST['id'];
	$kode	= $_POST['kode'];
	$nama	= $_POST['nama'];
	$kapasitas	= $_POST['kapasitas'];
	$tersedia	= $_POST['tersedia'];
	$bersalin	= $_POST['bersalin'];
	$anak	= $_POST['anak'];
	$jam	= $_POST['jam'];
	
	
	##echo $kode;
	
	$sql=$conn->query ("update ruangan set kode='$kode' , nama='$nama' , kapasitas='$kapasitas' , 
	tersedia='$tersedia' , bersalin='$bersalin' , anak='$anak' , jam='$jam'
	where id=$id " );
	
	
	header ("location:kamar.php")
?>