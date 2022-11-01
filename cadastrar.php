<?php
<<<<<<< Updated upstream
include("conecta.php");
=======
include ("config.php");
$nome=$_POST["nome"];
$telefone=$_POST["telefone"];
$email=$_POST["email"];
$senha=$_POST["senha"];

$comando = $pdo->prepare("INSERT INTO cadastro(nome, telefone, email, senha) VALUES(:nome,:telefone,:email,:senha) ");

    $comando->bindValue(":nome",$nome);
    $comando->bindValue(":telefone",$telefone);
    $comando->bindValue(":email",$email);
    $comando->bindValue(":senha",$senha);
   
    $comando->execute();
    
    header("Location:catalogo.html");
    unset($comando);
    unset($pdo);
?>
   
  


>>>>>>> Stashed changes

$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$comando = $pdo->prepare("INSERT INTO funcionarios(nome_func, telefone,  email, senha) VALUES(:nome,:telefone,:email,:senha)");

$comando->bindValue(":nome",$nome);
$comando->bindValue(":telefone",$telefone);
$comando->bindValue(":email",$email);
$comando->bindValue(":senha",$senha);

$resultado = $comando->execute();
?>
    <script>
      window.open("catalogo.html","_self");
    </script>