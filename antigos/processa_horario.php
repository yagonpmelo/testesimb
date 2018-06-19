<?php 
include 'conexao.php';
session_start();
$id = $_GET['id'];
$usuarios_id = $id;

$nome = $_POST['nome'];
$paradaorigem = $_POST['paradaorigem'];
$paradadestino = $_POST['paradadestino'];
$horario = $_POST['horario'];



$consulta = $conn->prepare("INSERT INTO tabela_horarios(nome,paradaorigem,paradadestino,horario,usuarios_id) VALUES(?,?,?,?,?)");
$consulta->bindParam(1,$nome);
$consulta->bindParam(2,$paradaorigem);
$consulta->bindParam(3,$paradadestino);
$consulta->bindParam(4,$horario);
$consulta->bindParam(5,$usuarios_id);
if ($consulta->execute()){
	header('location:tabelahorarios.php?id=' . $id);
}else{
	echo "Erro";
}
//header('location:tabelahorarios.php');
?>