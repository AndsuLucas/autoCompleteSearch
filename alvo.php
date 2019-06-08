<?php 
require_once "Conexao.php";

$banco = Conexao::connect();
$banco->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$query = "SELECT * FROM pessoa ;";
$select = $banco->prepare($query);
$select->execute();
$dados = json_encode($select->fetchAll());
print_r($dados);
























?>