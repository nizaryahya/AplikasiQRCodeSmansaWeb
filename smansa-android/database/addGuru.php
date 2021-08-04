<?php
	include('koneksi.php');

	$nip = $_POST['nip'];
	$nama = $_POST['nama'];
	$jabatan = $_POST['jabatan'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];

	$sql = "INSERT INTO guru (nip,nama,jabatan,email,password) VALUES ('$nip','$nama','$jabatan','$email','$pass')";
	$query = mysqli_query($con,$sql);

	if($query){
		echo 'Berhasil Menambahkan';
	}else{
		echo 'Gagal Menambahkan';
	}

	mysqli_close($con);

?>