<?php
	//$sql_cari=query('SELECT COUNT(*) FROM siswa WHERE nis="'.$_GET['nis'].'"')->queryScalar();
	//if($sql_cari>0)
	{
		$tampil_data=query('SELECT * FROM siswa WHERE nis="'.$_GET['nis'].'"')->queryRow();
		$data=array(
			'status' =>"data_ok",
			'nama' =>$tampil_data['nama'],
			'nis' =>$tampil_data['nis'],
			'ttl' =>$tampil_data['ttl'],
			'jeniskelamin' =>$tampil_data['jeniskelamin'],
			'alamat' =>$tampil_data['alamat'],



		);

	}
	else
	{
		$data=array(
			'status'=>'data_tidak_ada'
		);

	}
	echo json_encode($data);