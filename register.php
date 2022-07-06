<?php 
require_once 'koneksi.php';
header("Content-Type: application/json; charset=UTF-8");

$id_users = $_POST['id_users'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


$query = "INSERT INTO `users`(`id_users`, `username`, `email`, `password`) VALUES ('$id_users','$username','$email', '$password')";


$execute = mysqli_query($dbConnection,$query);
$response =[];


if ($execute) {
   $response['status']='succcess';
   $response['message']='Berhasil mendaftar account';
   
}
else {
   $response['status']='failed';
   $response['message']='Gagal mendaftar account'; 

}
$json = json_encode($response,JSON_PRETTY_PRINT);
echo $json;
?>
