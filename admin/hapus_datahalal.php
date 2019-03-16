<?php
include "koneksi.php";
extract($_GET);

if(isset($id))
{




		$query = "delete from datahalal where no_sertifikat='$id'";
		$b = mysql_query($query);

		if($b)
		{
			echo "<script> alert('Data Berhasil Dihapus'); 
							window.location.href='home.php?m=td';
				  </script>";     
		}
		else
		{
			echo "<script> alert('Data Gagal Dihapus'); 
					window.location.href='home.php?m=td';	
					</script>";     
		}
}
?>