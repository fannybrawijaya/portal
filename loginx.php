<?php
	session_start();
	
	$conn = new mysqli ("localhost", "root", "", "project" ) ;
	mysqli_connect_errno ();
	if($_SESSION['http://localhost/portal/index.php']==""){ header("location:formlogin.php"); } else { 
	$user = $_POST['user'];
	$password = $_POST['password'];
	
	$sql=$conn->query ("select * from signin where user='$user' and password='$password'") ;


	$cek = $sql->num_rows; 
	echo $cek;
	
	 if ($cek>0) {
		echo "masuk" ;
		 $_SESSION['index']="";
		 header("location:http://localhost/index.php");
	 }else {
		echo "gagal login";
		header("location:http://localhost/portal/gagal.php");
	}
	?>