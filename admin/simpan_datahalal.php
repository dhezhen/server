<?php
include "koneksi.php";

$no_sertifikat = $_POST['no_sertifikat'];
$nama_produk = $_POST['nama_produk'];
$nama_perusahaan = $_POST['nama_perusahaan'];
$jenis = $_POST['jenis'];
$tgl_buat = $_POST['tgl_buat'];
$exp_date = $_POST['exp_date'];
$tgl_kadaluarsa = $_POST['tgl_kadaluarsa'];


// Set path folder tempat menyimpan fotonya



extract($_POST);

if(isset($simpan))
{
		$query = "INSERT into datahalal values('$no_sertifikat','$jenis','$nama_produk','$nama_perusahaan','$tgl_buat','$exp_date','$tgl_kadaluarsa')";
		$b = mysql_query($query);

		if($b)
		{
			echo "<script> alert('Data $nama_produk Berhasil Disimpan'); 
							window.location.href='home.php?m=td';
				  </script>";     
		}
		else
		{
			echo "<script> alert('Data $nama_produk Gagal Disimpan'); </script>";     
		}
}
?>