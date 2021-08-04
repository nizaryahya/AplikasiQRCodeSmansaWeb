<?php
	include('koneksi.php');

	$nip = $_POST['nip'];
	$nis = $_POST['nis'];
	$kls = $_POST['idkls'];

    $sql = "SELECT id_swa FROM siswa WHERE email = '$nis'";
     $query= mysqli_query($con,$sql);

    // $Sql_Query = "SELECT id_dsn FROM WHERE email = '$nip'";
    // $idDsn= mysqli_query($con,$Sql_Query);

    $sqls = "INSERT INTO session (id_swa,id_guru,waktu,id_kegiatan) VALUES ( '$nis', '$nip',now(),'$kls')";
	$querys = mysqli_query($con,$sqls);

	$sql = "INSERT INTO kehadiran (id_swa,id_guru,waktu,id_kegiatan) VALUES ( '$nis', '$nip',now(),'$kls')";
	$query = mysqli_query($con,$sql);

	if($query){
		echo 'Berhasil Menambahkan';
	}else{
		echo 'Gagal Menambahkan';
	}

	mysqli_close($con);

?>