<?php
extract($_POST);
session_start();

include "koneksi.php";
	if(isset($_POST['login']))
	{
		
		$kueri = mysql_query("select * from admin where username='$user' AND password='$password'");
		$a=mysql_num_rows($kueri);
		if (empty($a))
	{
?>
		<script language="javascript">
		alert("Username / Password Anda Salah.");
		document.location="index.php";
		</script>
<?php
	}
	else
	{
		while ($row=mysql_fetch_array($kueri))
		{
			$_SESSION['nama_admin'] = $row[0];
		}
		echo "<script>document.location.href='home.php'; </script>";
	}
}
?>