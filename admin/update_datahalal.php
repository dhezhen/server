<?php
include "koneksi.php";
extract($_POST);

if(isset($no_sertifikat_baru))
{

		$query="update datahalal set no_sertifikat='$no_sertifikat_baru',nama_produk='$nama_produk',jenis='$jenis',nama_perusahaan='$nama_perusahaan',tgl_buat='$tgl_buat',exp_date='$exp_date',tgl_kadaluarsa='$tgl_kadaluarsa' where no_sertifikat='$no_sertifikat_lama'";
		$b = mysql_query($query);

		if($b)
		{
			echo "<script> alert('Data $no_sertifikat_lama Berhasil Diperbaharui'); 
							window.location.href='home.php?m=td';
				  </script>";     
		}
		else
		{
			echo "<script> alert('Data $no_sertifikat_lama Gagal Diperbaharui'); 
					window.location.href='home.php?m=td';
					
					</script>";     
		}
}
?>