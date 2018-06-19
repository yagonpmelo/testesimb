<?php 
include 'conexao.php';

$name = $_POST['name'];
$address = $_POST['address'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];
$type = $_POST['type'];
//$destino = $_POST['destino'];


$consulta = $conn->prepare("INSERT INTO markers(name,address,lat,lng,type) VALUES(?,?,?,?,?)");
$consulta->bindParam(1,$name);
$consulta->bindParam(2,$address);
$consulta->bindParam(3,$lat);
$consulta->bindParam(4,$lng);
$consulta->bindParam(5,$type);
//$consulta->bindParam(6,$destino);
$consulta->execute();


header('location:mapa.php?id=' . $id);


//header('location:mapa.php');


?>