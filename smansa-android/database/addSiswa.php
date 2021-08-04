<?php
	include('koneksi.php');

	$nis = $_POST['nis'];
	$nama = $_POST['nama'];
	$ttl = $_POST['ttl'];
	$jeniskelamin = $_POST['jeniskelamin'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];

	$sql = "INSERT INTO siswa (nis,nama,ttl,jeniskelamin,alamat,email,password) VALUES ('$nis','$nama','$ttl','$jeniskelamin','$alamat','$email','$pass')";
	$query = mysqli_query($con,$sql);

	if($query){
		include "phpqrcode/qrlib.php"; 

		$tempdir = "temp/";
		if (!file_exists($tempdir))
		mkdir($tempdir);

		$codeContents = $nis;
		$namaFile=$nis.".png";
		$level=QR_ECLEVEL_H;
		$UkuranPixel=10;
		$UkuranFrame=4;

		QRcode::png($codeContents, $tempdir.$namaFile, $level, $UkuranPixel, $UkuranFrame); 

		echo 'Berhasil Menambahkan';
	}else{
		echo 'Gagal Menambahkan';
	}

	mysqli_close($con);

?>