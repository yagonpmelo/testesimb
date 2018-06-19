<?php 
include 'conexao.php';

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$numero = $_POST['numero'];
$login = $_POST['login'];
$senha = $_POST['senha'];


$consulta = $conn->prepare("INSERT INTO usuarios(nome,sobrenome,numero,login,senha) VALUES(?,?,?,?,?)");
$consulta->bindParam(1,$nome);
$consulta->bindParam(2,$sobrenome);
$consulta->bindParam(3,$numero);
$consulta->bindParam(4,$login);
$consulta->bindParam(5,$senha);
$consulta->execute();

$consulta = $conn->prepare("SELECT * FROM usuarios WHERE login = '$login'");
$consulta->execute();
$res = $consulta->fetch(PDO::FETCH_ASSOC);
$id = $res['id'];
header('location:mapa.php?id=' . $id);



?>