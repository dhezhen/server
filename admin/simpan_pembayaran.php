<?php
include "koneksi.php";
extract($_POST);

if(isset($bayar))
{
		$query = "UPDATE pbb SET statusbayar='Lunas' , tgl_byr='$tanggal' WHERE no_persil='$no_persil'";
		$b = mysql_query($query);

		if($b)
		{
			echo "<script> alert('Pembayaran Pajak Berhasil'); 
							window.location.href='home.php?m=tbyr';
				  </script>";     
		}
		else
		{
			echo "<script> alert('Pembayaran Pajak Gagal'); </script>";     
		}
}
?>