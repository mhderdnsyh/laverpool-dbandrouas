<?php 
include_once 'koneksi.php';


// @var $koneksi PDO

$query = "SELECT * FROM laverpool;";
$statement = $dbConnection->query($query);
$statement->setFetchMode(PDO::FETCH_);
$result = $statement->fetchAll(); 

header('Content-type: application/json');
echo json_encode($result);




?>