<?php
	include '../config/koneksi.php';
		
	$nis = $_POST["nis"];
	$password = $_POST["password"];
	
	if ((empty($nis)) || (empty($password))) { 
		$response["error"] = 0;
        $response["error_msg"] = "nis Atau Password Kosong";
        echo json_encode($response);
	}
	
	$query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nis='$nis' AND password='$password'");
	
	$row = mysqli_fetch_array($query);
	
	if ($row != false) {
        // user ditemukan
        $response["error"] = FALSE;
		//$response["error_msg"] = "Berhasil Login.";
        $response["nis"] = $row["nis"];
		$response["siswa"]["id_swa"] = $row["id_swa"];
		$response["siswa"]["nama"] = $row["nama"];
        $response["siswa"]["nis"] = $row["nis"];
        $response["siswa"]["password"] = $row["password"];
        $response["siswa"]["alamat"] = $row["alamat"];
        $response["siswa"]["email"] = $row["email"];
        $response["siswa"]["ttl"] = $row["ttl"];
        $response["siswa"]["jeniskelamin"] = $row["jeniskelamin"];
        echo json_encode($response);
		
	} else { 
		$response["error"] = TRUE;
        $response["error_msg"] = "nis Atau Password Salah";
        echo json_encode($response);
	}
	
	mysqli_close($koneksi);

?>