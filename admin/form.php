<?php
$konek=mysql_connect("localhost", "root", "");
$konek_db=mysql_select_db("contoh");
?>

<h1>Form Pengambilan Matakuliah</h1>

<form method="post" action="submit.php">
Masukkan NIM <input type="text" name="nim" /><br />
Daftar Matakuliah <br />
<?php
$query = "SELECT * FROM mk";
$hasil = mysql_query($query);
$no = 1;
while ($data = mysql_fetch_array($hasil))
{
  echo "<input type='checkbox' value='".$data['kodeMK']."' name='mk".$no."' /> ".$data['namaMK']."<br />";
  $no++;
}
?>
<input type="submit" name="submit" value="Submit" />
</form>