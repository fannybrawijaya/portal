<?php
	$conn = new mysqli ("localhost", "root", "", "project" ) ;
	mysqli_connect_errno ();

	$id	= $_POST['id'];
	$norm	= $_POST['norm'];
	$noka	= $_POST['noka'];
	$nama	= $_POST['nama'];
	$tanggal	= $_POST['tanggal'];
	$tindakan	= $_POST['tindakan'];
	$poli	= $_POST['poli'];
	
	##echo $kode;
	
	$sql=$conn->query ("update kamar_ok set norm='$norm' , noka='$noka' , nama='$nama' , 
	tanggal='$tanggal' , tindakan='$tindakan' , poli='$poli'
	where id=$id " );
	
	
	header ("location:kamar.php")
?>