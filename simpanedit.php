<?php
	$conn = new mysqli ("localhost", "root", "", "project" ) ;
	mysqli_connect_errno ();
	
	$id	= $_POST['id'];
	$kode	= $_POST['kode1'];
	$nama	= $_POST['nama'];
	$nomorsurat	= $_POST['nomor_surat'];
	$alamat	= $_POST['alamat'];
	$norm	= $_POST['norm'];
	$tglkrs	= $_POST['tglkrs'];
	$dx	= $_POST['dx'];
	$bpjs	= $_POST['bpjs'];
	$umum	= $_POST['umum'];
	$tglktrl	= $_POST['tgl_ktrl'];
	$spri	= $_POST['spri'];
	$keterangan	= $_POST['keterangan'];
	
	//echo $nama;
	
	$sql=$conn->query("update pasien set kode='$kode',nama='$nama',nomor_surat='$nomorsurat',alamat='$alamat',
		norm='$norm',tglkrs='$tglkrs',dx='$dx',bpjs='$bpjs',umum='$umum',tgl_ktrl='$tglktrl',spri='$spri',keterangan='$keterangan'
		where id=$id ");
	echo $id_nama;
	
	header ("location:tampil.php")
?>	

