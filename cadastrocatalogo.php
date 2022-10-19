<?php
include ("config.php");
$preco=$_POST["preco"];
$nome=$_POST["nome"];
$tecido=$_POST["tecido"];
$descricao=$_POST["descricao"];
$referencia=$_POST["referencia"];
 
$comando = $pdo->prepare("INSERT INTO catalogo(preco,nome_peca,tecido,descricao,referencia) VALUES (:preco,:nome,:tecido,:descricao,:referencia)" );
 
    $comando->bindValue(":preco",$preco);
    $comando->bindValue(":nome",$nome);
    $comando->bindValue(":tecido",$tecido);
    $comando->bindValue(":descricao",$descricao);
    $comando->bindValue(":referencia",$referencia);
   
    $comando->execute();
    
?>
    <script>
       window.open("catalogo.html","_self");
    </script>