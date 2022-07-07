<?php 
//disini kita akan mengkoneksikan database
$db_host='localhost'; //nama host
$db_user='root'; //nama user
$db_pass=''; //password
$db_db='project'; //database yang akan di hubungkan

$db_conn=mysql_connect($db_host,$db_user,$db_pass,$db_db) or die ('Tidak terhubung ke mysql');
$db_select=mysql_select_db($db_db) or die('Tidak terhubung ke database');
//kita akan menambahkan script export di sini
header("content-type:application/vnd-ms-exel");
//membuat file excel
$nmfile = "Data Pasien";
header("content-disposition:attachment;filename=".$nmfile.".xls");
//membuat nama file

?>
<h1>Data Pasien RSIA FATIMAH</h>
<br/>
<table border="1px">
	<tr align="center">
		<td>Kode</td>
		<td>Nama</td>
		<td>Alamat</td>
		<td>Nomor Surat</td>
		<td>Norm</td>
		<td>Tgl_KRS</td>
		<td>Diagnosa</td>
		<td>BPJS</td>
		<td>UMUM</td>
		<td>Tgl_Kontrol</td>
		<td>NUMERIK/SPRI (WAJIB 6 DIGIT)</td>
		<td>Keterangan</td>
	</tr>
	<?php
		$query=mysql_query("select * from pasien order by spri desc");

		$no=1;
		while($data=mysql_fetch_array($query)){
	 ?>
	<tr>
		<td><?php echo $data['kode']; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['alamat']; ?></td>
		<td><?php echo $data['nomor_surat']; ?></td>
		<td><?php echo $data['norm']; ?></td>
		<td><?php echo $data['tglkrs']; ?></td>
		<td><?php echo $data['dx']; ?></td>
		<td><?php echo $data['bpjs']; ?></td>
		<td><?php echo $data['umum']; ?></td>
		<td><?php echo $data['tgl_ktrl']; ?></td>
		<td><?php echo $data['spri']; ?></td>
		<td><?php echo $data['keterangan']; ?></td>
	</tr>
	<?php $no++; } ?>
</table>