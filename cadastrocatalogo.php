<?php
include ("config.php");
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$tecido = $_POST["tecido"];
$descricao = $_POST["descricao"];
$imagem = $_FILES['imagem']; 
$extensao = $imagem['type'];
$conteudo = file_get_contents($imagem['tmp_name']);
$base64 = "data:".$extensao.";base64,".base64_encode($conteudo);
 
$comando = $pdo->prepare("INSERT INTO catalogo(preco,nome_peca,tecido,descricao,img) VALUES (:preco,:nome,:tecido,:descricao, :conteudo)");
 
<<<<<<< HEAD
$comando->bindValue(":preco",$preco);
$comando->bindValue(":nome",$nome);
$comando->bindValue(":tecido",$tecido);
$comando->bindValue(":descricao",$descricao);
$comando->bindValue(":conteudo", $base64);
=======
    $comando->bindValue(":preco",$preco);
    $comando->bindValue(":nome",$nome);
    $comando->bindValue(":tecido",$tecido);
    $comando->bindValue(":descricao",$descricao);
    $comando->bindValue(":conteudo", $base64);
>>>>>>> 052fba555a02d0727e9a0daacb4a7d441e93706c
   
$comando->execute();
    
?>
    <script>
       window.open("cadastrocatalogo.html","_self");
    </script>