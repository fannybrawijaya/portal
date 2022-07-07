<?php
	$conn = new mysqli ("localhost", "root", "", "project" ) ;
	mysqli_connect_errno ();
	
	$id_nama   = $_GET['id'];
	$sql=$conn->query ("insert into pasien where Id='$id_nama' ");
	//echo $id_nama;
	header ("location:tampil.php")
?>	