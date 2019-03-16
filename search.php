<?php
require_once('dbConnect.php');
if($_SERVER['REQUEST_METHOD']=='POST') {
  $search = $_POST['search'];
  $sql = "SELECT * FROM datahalal where nama_produk LIKE '%$search%' ORDER BY nama_produk ASC";
  $res = mysqli_query($con,$sql);
  $result = array();
  while($row = mysqli_fetch_array($res)){
    array_push($result, array('no_sertifikat'=>$row[0],'nama_produk'=>$row[1],'jenis'=>$row[2],
	'nama_perusahaan'=>$row[3], 'tgl_buat'=>$row[4], 'exp_date'=>$row[5],'tgl_kadaluarsa'=>$row[6],));
  }
  echo json_encode(array("value"=>1,"result"=>$result));
  mysqli_close($con);
}