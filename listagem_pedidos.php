<?php
include("config.php");

$comando = $pdo->prepare("SELECT quantidade,codigo_peca,num_pedido,tamanho,preco_total,img FROM pedidos");

$comando->execute();

if($comando->rowCount() >= 1){
    $lista_produtos = $comando->fetchAll();
}else {
    ECHO('Nenhum produto cadastrado');
}

unset($comando);
unset($pdo);
?>