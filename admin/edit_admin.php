<html>
<head>
<title></title>
<link href="../css/bootstrap.min.css" rel="stylesheet" />
<?php
	include "koneksi.php";
	extract($_GET);
	$query = "select * from admin where id_admin='$id'";
	$a = mysql_query($query);
	$b = mysql_fetch_array($a);
	
echo"
<form name=form_edit_admin method=post action=home.php?m=ua>
 <div class='container' >
       <div class='panel panel-info'>
        <div class='panel-heading'><center><label>EDIT DATA ADMIN</label></center></div>
        <div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>ID ADMIN</label>
                <div class='col-sm-4'>
						<input name=id_admin_baru type=text class='form-control' value='$b[id_admin]'>
						<input name=id_admin_lama type=text value=$b[id_admin] hidden>
                </div>
            </div>
        </div>

        <div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>NAMA ADMIN</label>
                <div class='col-sm-4'>
						<input type=text name=nama_admin class='form-control' value='$b[nama_admin]'>
                </div>
            </div>
        </div>    
		
		<div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>USERNAME</label>
                <div class='col-sm-4'>
						<input type=text name=username class='form-control' value='$b[password]'>
                </div>
            </div>
        </div>
		<div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>PASSWORD</label>
                <div class='col-sm-4'>
						<input type=password name=password class='form-control' value='$b[password]'>
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