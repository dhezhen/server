<html>
<head>
<title></title>
<link href="../css/bootstrap.min.css" rel="stylesheet" />
<?php
	include "koneksi.php";
	extract($_GET);
	$query = "select * from datahalal where no_sertifikat='$id'";
	$a = mysql_query($query);
	$b = mysql_fetch_array($a);
	
echo"
<form name=form_edit_sertifikat method=post action=home.php?m=ud>
 <div class='container' >
       <div class='panel panel-info'>
        <div class='panel-heading'><center><label>EDIT DATA SERTIFIKASI</label></center></div>
        <div class='panel-body'>
            <div class='form-group'>
	
        <div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>NO SERTIFIKAT</label>
                <div class='col-sm-4'>
						<input type=text name=no_sertifikat_baru READONLY class='form-control' value='$b[no_sertifikat]'>
											<input name=no_sertifikat_lama type=text value=$b[no_sertifikat] hidden>
                </div>
            </div>
        </div>    
		
		<div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>JENIS PRODUK</label>
                <div class='col-sm-4'>
						<select name='jenis'   class='form-control' >
						<option name='MAKANAN'>MAKANAN</option>
						<option name='MINUMAN'>MINUMAN</option>
						<option name='OBAT-OBATAN'>OBAT - OBATAN</option>
						<option name='KOSMETIK'>KOSMETIK</option>
						</select>
                </div>
            </div>
        </div>



		<div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>NAMA PRODUK</label>
                <div class='col-sm-4'>
						<input type=text name=nama_produk class='form-control' value='$b[nama_produk]'>
                </div>
            </div>
        </div>
		
		
		<div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>NAMA PERUSAHAAN</label>
                <div class='col-sm-4'>
						<input type=text name=nama_perusahaan class='form-control' value='$b[nama_perusahaan]'>
                </div>
            </div>
        </div>	
		
		<div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>TANGGAL REGISTRASI</label>
                <div class='col-sm-4'>
						<input type=date name=tgl_buat class='form-control' value='$b[tgl_buat]'>
                </div>
            </div>
        </div> 
		
		
		<div class='panel-body'>
		
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>TANGGAL BERAKHIR</label>
                <div class='col-sm-4'>
						<input type=date name=exp_date class='form-control' value='$b[exp_date]'>
                </div>
            </div>
        </div>
		
		<div class='panel-body'>
		 <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>TANGGAL KADALUARSA</label>
                <div class='col-sm-4'>
						<input type=date name=tgl_kadaluarsa class='form-control' value='$b[tgl_kadaluarsa]'>
                </div>
            </div>
        </div>
		
		
		
		
		<div class='panel-body'>
		        <div class='form-group'>  
			<div class='col-sm-offset-2 col-sm-10'>
				<button type='submit' class='btn btn-success' name='update'>Edit</button>
				<button type='reset' class='btn btn-danger' name='batal' onclick='history.back();'>Batal</button>
            </div>
        </div>
		</div>
	
		</div>
	</div>
</div>
</form>";
?>