<?php
include_once 'koneksi.php';

header("Content-Type: application/json; charset=UTF-8");

$id_food = $_POST['id_food'];
$jumlah_food = $_POST['jumlah_food'];


$sql = "UPDATE food SET jumlah_food = '$jumlah_food' WHERE id_food = '$id_food';";
$execute = $dbConnection->query($sql);
$response = [];

if ($execute) {
  $response['status'] = 'sukses';
  $response['message'] = 'food berhasil dipesan';
} else {
  $response['status'] = 'gagal';
  $response['message']= 'food gagal dipesan';
}
$json = json_encode($response,JSON_PRETTY_PRINT);
echo $json;

?>