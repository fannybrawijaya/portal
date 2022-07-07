<?php
	$conn = new mysqli ("localhost", "root", "", "project" ) ;
	mysqli_connect_errno ();

	$id	= $_POST['id'];
	$kode			= $_POST['kode'];
	$nama			= $_POST['nama'];
	$alamat			= $_POST['alamat'];
	$norm			= $_POST['norm'];
	$nomor_surat	= $_POST['nomor_surat'];
	$tglkrs			= $_POST['tglkrs'];
	$dx				= $_POST['dx'];
	$bpjs			= $_POST['bpjs'];
	$umum			= $_POST['umum'];
	$tgl_ktrl		= $_POST['tgl_ktrl'];
	$spri			= $_POST['spri'];
	$keterangan		= $_POST['keterangan'];
	
		
	##echo $kode;
	
	$sql=$conn->query  ("update pasien set kode='$kode' , nama='$nama' , alamat='$alamat' , norm='$norm' , nomor_surat='$nomor_surat', tglkrs='$tglkrs', 
	dx='$dx', bpjs='$bpjs' , umum='$umum' , tgl_ktrl='$tgl_ktrl' , spri='$spri' , keterangan='$keterangan'
	where id=$id " );
	
	header ("location:tampil.php")
?>