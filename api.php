<?php
// error_reporting(0);
$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
if($request[0]==""){
    //echo "Hello";
    echo "<meta http-equiv='refresh' content='0;url=https://atapotomatis.000webhostapp.com /'>";

}
$input = json_decode(file_get_contents('php://input'),true);
include 'koneksi.php';
mysqli_set_charset($conn,'utf8');
$data = array_shift($request);
if (strcmp($data, 'insert') ==0) {
 switch ($method) {
 case 'GET':
//  $id = array_shift($request);
//  $sql = "SELECT * FROM kartu WHERE uid='$id'";
$cahaya = array_shift($request);
$hujan= array_shift($request);
$atap=array_shift($request);
date_default_timezone_set('Asia/Jakarta');
$tanggal= date('Y-m-d');
$waktu= date('H:i:s');
$sql = "INSERT INTO atapotomatis (tanggal, waktu, cahaya, hujan, atap) VALUES ('$tanggal','$waktu','$cahaya','$hujan','$atap')";
  break;
 }
 $result = mysqli_query($conn,$sql);
 $hasil=array();
 if ($result) {
   $hasil["status"]="Sukses";
   echo json_encode(array($hasil));
}
}else{
 $hasil1 = array('status' => false, 'message' => 'Access Denied');
 echo json_encode($hasil1);
}

mysqli_close($conn);
 ?>