<?php
session_start();
?>
<html>
<head>
<title>E- HALAL Server</title>
</head>
<body>
<table border="0" width="80%" height="100%" align="center">

<tr height="20%">
	<td align="center">
	<?php include "header.php"; ?>
	</td>
</tr>
<tr height="10%">
	<td align="center">
	<?php include "menu.php"; ?>
	<br><br>
	</td>
</tr>
<tr>	
	<td>Anda Login Sebagai
	<?php 
	include "koneksi.php";		
	$kueri = mysql_query("select * from admin");
	$arraykan = mysql_fetch_array($kueri);	
	echo $arraykan['id_admin'];
	echo " - ";
	echo $arraykan['nama_admin'];
	?>
	</td>
</tr>
<tr height="5%">
<td></td>
</tr>
<tr height="60%">
	<td> <?php include "isi.php"; 
	
	?></td>
</tr>
<tr height="5%">
	<td align="center">
	<?php include "footer.php"; ?>
	</td>
</tr>
</table>
</body>
</html>