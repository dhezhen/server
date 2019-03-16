<?php
include "koneksi.php";
extract($_POST);

if(isset($id_admin_baru))
{
		$query="update admin set id_admin='$id_admin_baru',nama_admin='$nama_admin' where id_admin='$id_admin_lama'";
		$b = mysql_query($query);

		if($b)
		{
			echo "<script> alert('Data $id_admin_lama Berhasil Diperbaharui'); 
							window.location.href='home.php?m=ta';
				  </script>";     
		}
		else
		{
			echo "<script> alert('Data $id_admin_lama Gagal Diperbaharui'); 
					window.location.href='home.php?m=ta';
					
					</script>";     
		}
}
?>