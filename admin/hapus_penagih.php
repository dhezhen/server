<?php
include "koneksi.php";
extract($_GET);

if(isset($id))
{
		$query = "delete from penagih where id_penagih='$id'";
		$b = mysql_query($query);

		if($b)
		{
			echo "<script> alert('Data $id_penagih Berhasil Dihapus'); 
							window.location.href='home.php?m=tp';
				  </script>";     
		}
		else
		{
			echo "<script> alert('Data $id_penagih Gagal Dihapus'); </script>";     
		}
}
?>