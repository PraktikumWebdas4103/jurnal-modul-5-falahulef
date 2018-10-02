<?php
include "koneksi.php";

if(isset($_POST['submit'])) {
	$nim 	= $_POST['nim'];
	$nama 	= $_POST['nama'];
	$email 	= $_POST['email'];

	$sql ="INSERT INTO profile (nim,nama,email) values ('$nim','$nama','$email')";
	if (mysqli_query($con,$sql)){
		echo "Berhasil Input Data";
	}else{
		echo "Gagal Input Data";
	}
	}

 ?>
