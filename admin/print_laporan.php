<html>
<head><title>cetak laporan</title>

<Script>
function cetak(){
window.print();}


</script>
</head>
<body>
<table align=center width="auto" border="0" height="auto">
  <tr>
    <td width="auto" scope="" align="left">
	<img src="../img/depag.png" width="200" height="200"> </td>
	    <td width="50%" align="center">
		<font size="4"style="bold" face="ARIAL"><br>
		KEMENTRIAN AGAMA  <br>
BADAN PENYELENGGARA JAMINAN PRODUK HALAL<br>
    REPUBLIK INDONESIA<br>
    <em>Jl. Veteran No 23 Jakarta Pusat</em><br>
	<hr border="10">
	</td>
  </tr>
  </font>
</table>




<?php
include "koneksi.php";
include "AESOld.php";
include "phpqrcode/qrlib.php";

	extract($_GET);
$kueri = mysql_query("select * from admin");
		$abc = mysql_fetch_array($kueri);

		echo "

  
<fieldset>
<legend>Data Petugas</legend>

  <table border='0'>
<tr width='50%'><td>ID Petugas</td><td> </td><td>:</td><td><td>$abc[nama_admin]</td></tr>
</table>

</fieldset> 

";




	include "koneksi.php";
	extract($_GET);
	$query = "select * from datahalal where no_sertifikat='$id'";
	$a = mysql_query($query);
	$b = mysql_fetch_array($a);
	
	$tempdir = "temp/"; 
if (!file_exists($tempdir))
    mkdir($tempdir);
$no_sertifikat = "$b[no_sertifikat]";
$namafile = "$b[no_sertifikat].png";
$quality = 'H'; 
$ukuran = 4; 
$padding = 2;
 
$inputKey = "1234567890abcdef";
$blockSize = 128;
$aes = new AES($no_sertifikat,$inputKey, $blockSize);
$enc = $aes->encrypt();
$aes->setData($enc);


QRCode::png($enc,$tempdir.$namafile,$quality,$ukuran,$padding);

	
	
echo"

<fieldset width='200px' height='50%'>
<legend width=50% border='0'  height='50%' >Data Sertifikasi Halal</legend>
  <table width=50% border='0'  height='50%'align=center>
  
<form name=form_input_pembayaran method=post action=home.php?m=td> 
	<font>
    <tr><font size='8'>
	<td> No. sertifikat </td><td>: $b[no_sertifikat]</td>
    </tr>
	<tr><font size='8'>
	<td> Data Enskripsi </td><td>: $enc</td>
    </tr>
	
     <tr >
      <td >Jenis  </td><td>: $b[jenis]</td>
  
    </tr>
	
	 <tr >
      <td>Nama Produk </td>
      <td > 
			 :$b[nama_produk]
      </td>
    </tr>
	<tr >
      <td>Nama Perusahaan </td>
      <td > 
			: $b[nama_perusahaan]
      </td>
    </tr>
	<tr >
      <td>Tanggal Registrasi </td>
      <td > 
			:$b[tgl_buat]
    </tr>
	<tr >
      <td>Masa Berlaku  </td>
      <td > 
			:$b[exp_date]
      </td>
    </tr>
	
	<tr>
	<td><img src='/Halal/admin/temp/$b[no_sertifikat].png '></td>
	
</tr>
	
<tr width='100%' align='right'>
<td align='' colspan='2'>
kuningan,....,.............20....
<br><br><br><br><br>
ttd<br>
Petugas<br>


</td>

</tr>
    <tr >
      <td colspan=2>
        <div align=center>

          <input type=submit value=Print onClick='cetak()'/>
         
          </div>
      </td>
    </tr>
	
  </table>
</fieldset>
  
</form>

";

?>

<body>
</html>