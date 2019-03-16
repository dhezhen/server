<html>
<head>
<title></title>
<link href="../css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="../jquery-ui/jquery-ui.css" />
<script src="../jquery-ui/jquery-3.2.1.js"></script>
<script src="../jquery-ui/jquery-ui.js"></script>


<script type="text/javascript">
$(function() {
	$("#datepicker").datepicker({ dateFormat: 'yy-mm-dd'});
});
</script>

</head>

<body>
<?php
	include "koneksi.php";
	extract($_GET);
	$query = "select * from pbb where no_persil='$id'";
	$a = mysql_query($query);
	$b = mysql_fetch_array($a);
	
echo"
<form name=form_input_pembayaran method=post action=home.php?m=sbyr>
 <div class='container' >
       <div class='panel panel-info'>
        <div class='panel-heading'><center><label>INPUT DATA PEMBAYARAN</label></center></div>
        <div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>No Persil</label>
                <div class='col-sm-4'>
                        <input type='text' class='form-control' name='no_persil' value=$b[no_persil] readonly>
                </div>
            </div>
        </div>

		<div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>Nama Wajib Pajak</label>
                <div class='col-sm-4'>
                        <input name=nama_wp type=text class='form-control' value='$b[nama_wp]' readonly>
                </div>
            </div>
        </div>
		
		<div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>Alamat Objek Pajak</label>
                <div class='col-sm-4'>
                        <input type=text name=alamat_op class='form-control' value='$b[alamat_op]' readonly>
                </div>
            </div>
        </div>
		
		<div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>Alamat Wajib Pajak</label>
                <div class='col-sm-4'>";
							$query1 = mysql_query("select penagih.id_penagih,penagih.nama_penagih,dusun.nama_dusun FROM penagih JOIN dusun ON penagih.id_dusun = dusun.id_dusun WHERE id_penagih='$b[id_penagih]'");
							$c = mysql_fetch_array($query1);
							echo "<input type=text class='form-control' name=alamat_wp value='$c[nama_dusun]' readonly>";
						echo "
                </div>
            </div>
        </div>
		
		<div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>Luas Tanah</label>
                <div class='col-sm-4'>
                        <input name=luas_tnh type=text class='form-control' value='$b[luas_tnh]' readonly>
                </div>
            </div>
        </div>
		
		<div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>Luas Bangunan</label>
                <div class='col-sm-4'>
                        <input name=luas_bgn type=text class='form-control' value='$b[luas_bgn]' readonly>
                </div>
            </div>
        </div>
		
		<div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>Total Pajak</label>
                <div class='col-sm-4'>
                        <input name=jumlah type=text class='form-control' value='$b[jumlah]' readonly>
                </div>
            </div>
        </div>
		
		<div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>Alamat Wajib Pajak</label>
                <div class='col-sm-4'>";
							$query1 = mysql_query("select * FROM penagih WHERE id_penagih='$b[id_penagih]'");
							$c = mysql_fetch_array($query1);
							echo "<input type=text class='form-control' name=alamat_wp value='$c[nama_penagih]' readonly>";
						echo "
                </div>
            </div>
        </div>
		
		<div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>Tanggal Bayar</label>
                <div class='col-sm-4'>
                        <input type='text' class='form-control' id='datepicker' name='tanggal' />
                </div>
            </div>
        </div>
	
		
    <div class='panel-body'>
        <div class='form-group'>  
			<div class='col-sm-offset-2 col-sm-10'>
				<button type='submit' class='btn btn-primary' name='bayar'>Bayar</button>
				<button type='reset' class='btn btn-danger' name='batal' onclick='history.back();'>Batal</button>
            </div>
        </div>
    </div>
	
		</div>
	</div>
</div>
</form>";
?>

</body>
</html>