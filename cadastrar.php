<?php
include("conecta.php");
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$comando = $pdo->prepare("INSERT INTO funcionarios(nome_func, telefone,  email, senha) VALUES(:nome,:telefone,:email,:senha)");

$comando->bindValue(":nome",$nome);
$comando->bindValue(":telefone",$telefone);
$comando->bindValue(":email",$email);
$comando->bindValue(":senha",$senha);

$comando->execute();

header("Location:catalogo.php");

unset($comando);
unset($pdo);