<?php
require_once('dbConnect.php');
include 'AES.php';
//include '/admin2/tampil_datahalal.php';
if($_SERVER['REQUEST_METHOD']=='POST') {
  
$scan = $_POST['scan'];
$inputKey = "halal";
$blockSize = 128;
//$aes = new AES($scan,$inputKey, $blockSize);
//$enc = $aes->encrypt();//memanggi enceryp
$aes->setData($scan,$inputKey,$blockSize);
//$aes = new AES($scan1, $inputKey, $blockSize);
$dec=$aes->decrypt();
  echo "$dec";
  
  $sql = "SELECT * FROM datahalal where no_sertifikat='.$dec.' ORDER BY nama_produk ASC";
  $res = mysqli_query($con,$sql);
  $result = array();
  while($row = mysqli_fetch_array($res)){
    array_push($result, array('no_sertifikat'=>$row[0],'jenis'=>$row[1],'nama_produk'=>$row[2],
	'nama_perusahaan'=>$row[3], 'tgl_buat'=>$row[4], 'exp_date'=>$row[5]));
  }
  echo json_encode(array("value"=>1,"result"=>$result));
  mysqli_close($con);
} 
?>