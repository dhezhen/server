<html>
<head>
<title></title>
<link href="../css/bootstrap.min.css" rel="stylesheet" />
<form name=form_input_admin method=post action=home.php?m=sa>
 <div class='container' >
       <div class='panel panel-info'>
        <div class='panel-heading'><center><label>INPUT DATA ADMIN</label></center></div>
		
        <div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>Id admin</label>
                <div class='col-sm-4'>
						<input name=id_admin type=text class='form-control'>
                </div>
            </div>
        </div>

        <div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>Nama admin</label>
                <div class='col-sm-4'>
						<input name=nama_admin type=text class='form-control'>
                </div>
            </div>
        </div>
		     <div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>Username</label>
                <div class='col-sm-4'>
						<input name=username type=text class='form-control'>
                </div>
            </div>
        </div>
		
		     <div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>Password</label>
                <div class='col-sm-4'>
						<input name=password type=password hint="masukan password" class='form-control'>
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