<?php

	include 'koneksi.php';
	
	class usr{}
	
	$no_sertifikat = $_POST["no_sertifikat"];
	//$password = $_POST["password"];
	
	/* if ((empty($no_sertifikat)) ) { 
		$response = new usr();
		$response->success = 0;
		$response->message = "Kolom no_sertifikatak boleh kosong"; 
		die(json_encode($response));
	}
	 */
	$query = mysql_query("SELECT * FROM datahalal WHERE no_sertifikat='00100007301297' ");
	//$query = mysql_query("SELECT * FROM datahalal ");
	
	$row = mysql_fetch_array($query);
	
	if (!empty($row)){
		$response = new usr();
		///$response->success = 1;
		//$response->message = "Data Halal no_sertifikat ".$row['no_sertifikat'];
		$response->no_sertifikat = $row['no_sertifikat'];
		$response->jenis = $row['jenis'];
		$response->nama_produk = $row['nama_produk'];
		$response->nama_perusahaan = $row['nama_perusahaan'];
		$response->tgl_buat = $row['tgl_buat'];
		$response->exp_date = $row['exp_date'];
		die(json_encode($response));
		
	} else { 
		$response = new usr();
		$response->success = 0;
		$response->message = "Data Sertifikasi Tidak Valid";
		die(json_encode($response));
	}
	
	mysql_close();


	//=================== KALAU PAKAI MYSQLI YANG ATAS SEMUA DI REMARK, TERUS YANG INI RI UNREMARK ========
	// include_once "koneksi.php";

	// class usr{}
	
	// $no_sertifikat = $_POST["no_sertifikat"];
	// $password = $_POST["password"];
	
	// if ((empty($no_sertifikat)) || (empty($password))) { 
	// 	$response = new usr();
	// 	$response->success = 0;
	// 	$response->message = "Kolom tno_sertifikatak boleh kosong"; 
	// 	die(json_encode($response));
	// }
	
	// $query = mysqli_query($con, "SELECT * FROM users WHERE no_sertifikat='$no_sertifikat' AND password='$password'");
	
	// $row = mysqli_fetch_array($query);
	
	// if (!empty($row)){
	// 	$response = new usr();
	// 	$response->success = 1;
	// 	$response->message = "Selamat datang ".$row['no_sertifikat'];
	// 	$response->no_sertifikat = $row['no_sertifikat'];
	// 	$response->no_sertifikat = $row['no_sertifikat'];
	// 	die(json_encode($response));
		
	// } else { 
	// 	$response = new usr();
	// 	$response->success = 0;
	// 	$response->message = "no_sertifikat atau password salah";
	// 	die(json_encode($response));
	// }
	
	// mysqli_close($con);

?>