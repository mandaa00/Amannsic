<?php
include ("config.php");
$nome=$_POST["nome"];
$telefone=$_POST["telefone"];
$email=$_POST["email"];
$senha=$_POST["senha"];

$res = $pdo->prepare("INSERT INTO cadastro(nome, telefone, email, senha) VALUES(:nome,:telefone,:email,:senha) ");

    $res->bindValue(":nome",$nome);
    $res->bindValue(":telefone",$telefone);
    $res->bindValue(":email",$email);
    $res->bindValue(":senha",$senha);
   
    $res->execute();
    echo($codigo);
?>
    <script>
       window.open("catalogo.html","_self");
    </script>

  






