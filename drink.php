<?php 
include_once 'koneksi.php';

header("Content-Type: application/json; charset=UTF-8");

$id_drink = $_POST['id_drink'];

$sql = "SELECT * FROM `drink` WHERE id_drink = $id_drink;";
$execute = $dbConnection->query($sql);
$response = [];

if ($execute) {
  $response['status'] = 'sukses';
  $response['message'] = 'drink berhasil dipesan';
} else {
  $response['status'] = 'gagal';
  $response['message']= 'drink gagal dipesan';
}
$json = json_encode($response,JSON_PRETTY_PRINT);
echo $json;


?>