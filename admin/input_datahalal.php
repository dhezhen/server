<html>
<head>

<script>
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
</script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<title> </title>
<link href="../css/bootstrap.min.css" rel="stylesheet" />

<form name=form_input_datahalal method=post action=home.php?m=sd>
 <div class='container' >
       <div class='panel panel-info'>
        <div class='panel-heading'><center><label>INPUT DATA DATA SERTIFIKASI</label></center></div>
       
	   <div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>NO SERTIFIKAT</label>
                <div class='col-sm-4'>
						<input onkeyup='generate_qrcode(this.value)' name=no_sertifikat  max=17 hint="masukan no sertifikat" type=text class='form-control' cols="50" rows="10">
                </div>
				<div id="result">
            </div>
        </div>  
        
	   <div class='panel-body'>
                    </div>   
        <div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>NAMA PRODUK</label>
                <div class='col-sm-4'>
						<input name=nama_produk type=text class='form-control'>
                </div>
            </div>
        </div>    
		
        <div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>JENIS</label>
                <div class='col-sm-4'>
					<select name='jenis' lass='form-control' >
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
            <label for='id' class='col-sm-2 control-label'>NAMA PERUSAHAAN</label>
                <div class='col-sm-4'>
						<input name=nama_perusahaan type=text class='form-control'>
                </div>
            </div>
        </div>
		
		<div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>Tanggal Regis</label>
                <div class='col-sm-4'>
						<input name=tgl_buat type=date class='form-control'>
                </div>
            </div>
        </div>
		
		<div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>Masa Berlaku Sertifikat</label>
                <div class='col-sm-4'>
						<input name=exp_date type=date class='form-control'>
                </div>
            </div>
        </div>	
		<div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>Tanggal Kadaluarsa </label>
                <div class='col-sm-4'>
						<input name=tgl_kadaluarsa type=date class='form-control'>
                </div>
            </div>
        </div>	

		
		
		<div class='panel-body'>
        <div class='form-group'>  
			<div class='col-sm-offset-2 col-sm-10'>
				<button type='submit' class='btn btn-success' name='simpan'>Simpan</button>
				<button type='reset' class='btn btn-danger' name='batal' onclick='history.back();'>Batal</button>
            </div>
        </div>
		</div>
		
		
		</div>
	</div>
</div>
</form>