<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>JSP Page</title>
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
</script>
</head>					

<center>
<body>
<table id="datatable"  class="table table-striped table-bordered table-hover table-condensed">
<thead>
    <tr class="info" width=100>
		<th align=center>Id Admin</th>
		<th align=center>Nama Admin</th>
		<th align=center>Username</th>
		<th align=center>Password</th>
		<th align=center><a href='home.php?m=ia'><button type='button' class='btn btn-primary btn-sm'><span class='glyphicon glyphicon-plus'></span> Tambah Admin </button></a></th>
    </tr>
</thead>
<tbody>
<?php
include "koneksi.php";
$query = "select * from admin";
$a = mysql_query($query);

while($b = mysql_fetch_array($a))
{
    echo "<tr>
                <td> $b[id_admin] </td>
                <td> $b[nama_admin] </td>
                <td> $b[username] </td>
                <td> $b[password] </td>
				<td><a href='home.php?m=ea&id=$b[id_admin]'><button type='button' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-edit'></span> Edit</button></a>
				<a href='home.php?m=ha&id=$b[id_admin]'><button type='button' class='btn btn-danger btn-sm'><span class='glyphicon glyphicon-trash'></span> Hapus</button></a>
				</td>
          </tr>";
}
?>

</tbody>
</table>