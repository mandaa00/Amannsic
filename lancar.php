<?php
include ("config.php");
$peca=$_POST["peca"];
$quantidade=$_POST["quantidade"];
$cliente=$_POST["cliente"];
$preco_final=$_POST["preco_final"];
 
$res = $pdo -> prepare("INSERT INTO cadastro(nome, telefone, email, senha) VALUES (:nome,:telefone,:email,:senha) ");
 
    $res->bindValue(":nome",$nome);
    $res->bindValue(":telefone",$telefone);
    $res->bindValue(":email",$email);
    $res->bindValue(":senha",$senha);
   
    $res->execute();
    echo($codigo);
?>
    <script>
       window.open("pedidos.html","_self");
    </script>
