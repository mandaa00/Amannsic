<?php
include ("config.php");
$peca=$_POST["peca"];
$quantidade=$_POST["quantidade"];
$cliente=$_POST["cliente"];
$preco_final=$_POST["preco_final"];
$tamanho=$_POST["tamanho"];
$imagem = $_FILES['imagem']; 
$extensao = $imagem['type'];
$conteudo = file_get_contents($imagem['tmp_name']);
$base64 = "data:".$extensao.";base64,".base64_encode($conteudo);


$res = $pdo -> prepare("INSERT INTO pedidos(quantidade, codigo_peca, tamanho, cliente, preco_total,img) VALUES (:quantidade, :codigo_peca, :tamanho, :cliente, :preco_total, :conteudo) ");
 
    $res->bindValue(":quantidade",$quantidade);
    $res->bindValue(":codigo_peca",$peca);
    $res->bindValue(":tamanho",$tamanho);
    $res->bindValue(":cliente",$cliente);
    $res->bindValue(":preco_total",$preco_final);
    $res->bindValue(":conteudo", $base64);
   
    $res->execute();
   
?>
    <script>
      window.open("lancamento_pedido.php?email=<?php echo($cliente); ?>","_self");
      
    </script>
