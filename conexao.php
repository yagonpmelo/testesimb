<?php
$username = "root";
$password = "";

$conn = new PDO('mysql:host=localhost;port=13306;dbname=simbora', $username, $password);

if(!$conn){
    die('Erro ao criar a conexão');
}

?>