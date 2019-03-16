<?php
include "koneksi.php";
extract($_POST);

if(isset($simpan))
{
		$query = "INSERT into admin values('$id_admin','$nama_admin','$username','$password')";
		$b = mysql_query($query);

		if($b)
		{
			echo "<script> alert('Data $nama_admin Berhasil Disimpan'); 
							window.location.href='home.php?m=ta';
				  </script>";     
		}
		else
		{
			echo "<script> alert('Data $nama_admin Gagal Disimpan'); </script>";     
		}
}
?>