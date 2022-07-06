<?php 
include_once 'koneksi.php';

header("Content-Type: application/json; charset=UTF-8");

$id_dessert = $_POST['id_dessert'];

$sql = "SELECT * FROM `dessert` WHERE id_dessert = $id_dessert;";
$execute = $dbConnection->query($sql);
$response = [];

if ($execute) {
  $response['status'] = 'sukses';
  $response['message'] = 'dessert berhasil dipesan';
} else {
  $response['status'] = 'gagal';
  $response['message']= 'dessert gagal dipesan';
}
$json = json_encode($response,JSON_PRETTY_PRINT);
echo $json;


?>