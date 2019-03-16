<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Data HALAL</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>	        
	<script type="text/javascript" src="../jquery.js"></script>
    <link href="../css/bootstrap.min.css" rel="stylesheet"/>
     
	<script type="text/javascript" src="../assets/DataTables/media/js/jquery.dataTables.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/DataTables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="../assets/DataTables/media/css/dataTables.bootstrap.css">
        
	<script type="text/javascript" src="../assets/DataTables/media/js/dataTable.bootstrap.min.js"></script>
	<script type="text/javascript" src="../assets/DataTables/media/js/dataTable.bootstrap.js"></script>
	<script type="text/javascript" src="../assets/DataTables/media/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/DataTables/media/js/jquery.dataTables.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/DataTables/media/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/DataTables/media/css/dataTables.bootstrap.min.css">
             
<script type="text/javascript" language="javascript">
$(document).ready(function() {
$('#datatable').DataTable();
});


 function generate_qrcode(sample){
 $.ajax({
 type: 'post',
 url: 'generator.php',
 data : {sample:sample},
 success: function(code){
 $('#result').html(code);
 }
 });
 }

 
function fungsiku() {
    return confirm("apakah anda akan menghapus data ini ? ");
	if (confirm == false)
	{
	return false;
	}
}

</script>
</head>					
<br>
<body>

<table id="datatable"  class="table table-striped table-bordered table-hover table-condensed" border=3>
<thead>
    <tr class="info" width=100>
		<th align=center>No Sertifikat</th>
		<th align=center>Hasil Enskripsi</th>
	<th align=center>Jenis</th>
	<th align=center>Nama Produk</th>
			<th align=center>Nama Perusahaan</th>
		<th align=center>Tgl Regis Sertifikat</th>
		<th align=center>Tgl Berakhir Sertifikat</th>
		<th align=center>Tgl Kadaluarsa </th>
		<th align=center>Qr Code (Enskripsi)</th>
		<th align=center><a href='home.php?m=id'><button type='button' class='btn btn-primary btn-sm'><span class='glyphicon glyphicon-plus'></span> Tambah Data </button></a></th>

</th>
    </tr>
</thead>
<tbody>
<?php
include "koneksi.php";
include "phpqrcode/qrlib.php";
include 'AESOld.php';
$query = "select * from datahalal";
$a = mysql_query($query);

while($b = mysql_fetch_array($a))
{
$tempdir = "temp/"; 
if (!file_exists($tempdir))
    mkdir($tempdir);
$no_sertifikat = "$b[no_sertifikat]";
$namafile = "$b[no_sertifikat].png";
$quality = 'H'; 
$ukuran = 3; 
$padding = 2;
 
$inputKey = "1234567890abcdef";
$blockSize = 128;
$aes = new AES($no_sertifikat,$inputKey, $blockSize);
$enc = $aes->encrypt();
$aes->setData($enc);


QRCode::png($enc,$tempdir.$namafile,$quality,$ukuran,$padding);
    echo "<tr>
                <td> $b[no_sertifikat] </td>
                <td> $enc </td>
                <td> $b[jenis] </td>
				<td> $b[nama_produk]</td>
                 <td> $b[nama_perusahaan]</td>
				<td> $b[tgl_buat] </td>
				<td> $b[exp_date] </td>
				<td> $b[tgl_kadaluarsa] </td>
				<td><img src='/Halal/admin/temp/$b[no_sertifikat].png'></td>				
					
				
				<td><a href='home.php?m=ed&id=$b[no_sertifikat]' onclick='fungsiku()' ><button type='button' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-edit'></span> Update</button></a>
				<a href='home.php?m=hd&id=$b[no_sertifikat]'  onclick='fungsiku()' ><button type='button' class='btn btn-danger btn-sm'><span class='glyphicon glyphicon-trash'></span> Hapus</button></a>
				<a href='print_laporan.php?m=pl&id=$b[no_sertifikat]'><button type='button' class='btn btn-primary btn-sm'><span class='glyphicon glyphicon-print'></span> Print</button></a>
								</td>
          </tr>" ;
		  
		  

}




?>
</table>






</body>
</html>