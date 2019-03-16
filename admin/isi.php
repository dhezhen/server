<?php
	extract($_GET);
	if(isset($m))
	{
		if($m=="halaman_utama") include "halaman_utama.php"; 		
		else if($m=="tdpbb") include "tampil_pbb.php";		
		else if($m=="cldhkp") include "pilih_laporan_pbb.php";
		
		//kelola data sertifikasi
		else if($m=="id") include "input_datahalal.php";
		else if($m=="sd") include "simpan_datahalal.php";
		else if($m=="td") include "tampil_datahalal.php";
		else if($m=="hd") include "hapus_datahalal.php";
		else if($m=="ud") include "update_datahalal.php";
		else if($m=="ed") include "edit_datahalal.php";
		
		//kelola data admin
		else if($m=="ta") include "tampil_admin.php";
		else if($m=="ia") include "input_admin.php";
		else if($m=="sa") include "simpan_admin.php";
		else if($m=="ha") include "hapus_admin.php";
		else if($m=="ea") include "edit_admin.php";
		else if($m=="ua") include "update_admin.php";
		
		
		else if($m=="tbyr") include "tampil_pembayaran.php";
		else if($m=="ibyr") include "input_pembayaran.php";
		else if($m=="sbyr") include "simpan_pembayaran.php";	
		
		else if($m=="laporan") include "cetak_laporan.php";
		else if($m=="about_us") include "about.php";
		else if($m=="pengertian") include "pengertian.php";
		else if($m=="hukum") include "hukum.php";
		else if($m=="objek") include "objek.php";
		else if($m=="subjek") include "subjek.php";		
		//else if($m=="ckwi") include "print_laporan.php";
		else if($m=="pl") include "print_laporan.php";
	}
	else
	{
		include "halaman_utama.php"; 
	}
?>