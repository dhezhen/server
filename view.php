<?php
require_once('dbConnect.php');
if($_SERVER['REQUEST_METHOD']=='GET') {
  $sql = "SELECT * FROM datahalal ORDER BY nama_produk ASC";
  $res = mysqli_query($con,$sql);
  $result = array();
  while($row = mysqli_fetch_array($res)){
    array_push($result, array('no_sertifikat'=>$row[0],'jenis'=>$row[1],'nama_produk'=>$row[2],
	'nama_perusahaan'=>$row[3], 'tgl_buat'=>$row[4], 'exp_date'=>$row[5],'tgl_kadaluarsa'=>$row[6],));
	//array_push($result, array('nama_produk'=>$row[0],'jenis'=>$row[1], 'nama_perusahaan'=>$row[2], 'tgl_buat'=>$row[3], 'exp_date'=>$row[4],'sesi'=>$row[5]));
  }
  echo json_encode(array("value"=>1,"result"=>$result));
  mysqli_close($con);
}