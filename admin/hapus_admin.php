<?php
include "koneksi.php";
extract($_GET);

if(isset($id))
{
		$query = "delete from admin where id_admin='$id'";
		$b = mysql_query($query);

		if($b)
		{
			echo "<script> alert('Data Berhasil Dihapus'); 
							window.location.href='home.php?m=ta';
				  </script>";     
		}
		else
		{
			echo "<script> alert('Data Gagal Dihapus'); 
					window.location.href='home.php?m=ta';	
					</script>";     
		}
}
?>