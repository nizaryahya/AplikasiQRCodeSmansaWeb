<?php 
 
	include('koneksi.php');
	
	//Membuat SQL Query
	$sql = "SELECT * FROM kegiatan";
	
	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);
	
	//Membuat Array Kosong 
	$result = array();

	while($row = mysqli_fetch_array($r)){
		
		array_push($result,array(
			"namakls"=>$row['nama_kegiatan'],
			"nokls"=>$row['jns_kegiatan'],
			"idkls"=>$row['id_kegiatan']
		));
	}
	
	//Menampilkan Array dalam Format JSON
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
?>