<?php
include ("config.php");
$peca=$_POST["peca"];
$quantidade=$_POST["quantidade"];
$cliente=$_POST["cliente"];
$preco_final=$_POST["preco_final"];
$tamanho=$_POST["tamanho"];
$excluir=$_POST["excluir"];

$res = $pdo -> prepare("INSERT INTO pedidos(quantidade, codigo_peca, tamanho, cliente, preco_total) VALUES (:quantidade, :codigo_peca, :tamanho, :cliente, :preco_total) ");
 
    $res->bindValue(":quantidade",$quantidade);
    $res->bindValue(":codigo_peca",$peca);
    $res->bindValue(":tamanho",$tamanho);
    $res->bindValue(":cliente",$cliente);
    $res->bindValue(":preco_total",$preco_final);
   
    $res->execute();
   
?>
    <script>
      window.open("lancamento_pedido.php?email=<?php echo($cliente); ?>","_self");
      
    </script>
