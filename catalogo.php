<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Catálogo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    html{
        scroll-behavior: smooth;
    }
    body{
        background-color:rgba(255, 235, 228, 1);
    }
    .vinho{
        width: 89%;
        font-size: 15px;
        padding-top: 15px;
        text-align: center;
        word-spacing: 100px;
    }
    .centro{
        height: 25vh;
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        margin-top: 150px;
    }
    /* .fundinho{
        width: 90%;
        height: 2800px;
        border-radius: 15px;
        background-color: rgb(222, 182, 168 );
        margin-left: 65px;
        font-size: 27px;
        color: rgb(121, 1, 45);
        text-align: center;
    } */
    .rodape{
    background-color: rgba(232, 207, 193, 1);
    width: 100%;
    height: 80px;
    position:absolute;
    bottom: auto;
    left: 0px;
    right: 0px;
    top: 0px;
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
    }
    .rodape a:hover{
        color:rgba(82, 62, 39, 1);
    }
    a{
        text-decoration: none;
        color: rgb(34, 23, 10);
        font-size:x-large;
    }
    hr{
        height: 2px;
        background-color:rgba(82, 62, 39, 1);
        border-radius: 10px;
        border-color: rgba(82, 62, 39, 1);
        border-style: solid;
        width: 90%;
        margin-top:10px;
        margin-bottom: 10px;
    }
    .cadprod{
        text-align: center;
    }
    </style>
</head>
<body>
    <div class="rodape">
        <a href="catalogo.html">Catálogo</a>
        <a href="pedido.php">Pedidos</a>
        <a href="perfil.html">Perfil</a>
    </div>
<div class="centro">
    <div class="vinho">
        <hr>
        <a href="#camisas">Camisas</a>
        <a href="#calcas">Calças</a>
        <a href="#bermudas">Bermudas</a>
        <a href="#saias">Saias</a>
        <a href="#shorts">Shorts</a>
        <a href="#regatas">Regatas</a>
        <hr>
    </div>
</div>
<a href="cadastrocatalogo.html"><div class="cadprod"> cadastrar novo produto </div> </a>
<br><br>
<div class="fundinho ">
    <div class="container p-5 " style="background-color: rgb(222, 182, 168 ); height: 2800px">
        <?php  // listar produtos, um por um.
                include("listacatalogo.php");
                if (!empty($listaItens)) {
                    foreach ($listaItens as $linha) { ?>
            <div class="p-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 d-flex align-items-stretche">
        
          <a href="inserir_favoritos.php?id_produto=<?php echo $linha[
              "id_produto"
          ]; ?>" class="position-absolute right-0 p-2 text-danger">
            
          </a>
        <?php
              //}
              ?>
          <a style="text-decoration:none;" href="Produto.php?id_produto=<?php echo $linha[
              "id_produto"
          ]; ?>">
          <?php echo '<div class=""><img height="100%" width="100%"  class="border border-white card-img-top" src="' .
              $linha["img"] .
              '"></div>'; ?>
          
          <div class="text-start card-header">
          <h5 class="text-muted"><?php echo $linha["nome_peca"]; ?></h5>
          
          <h6 class="text-success"> FRETE GRATIS</h6>
          </a> 
          <h4 class="card-title"><?php echo "R$" .
              $linha["preco"] .
              ",00"; ?></h4>
          </div>
        </div> 
                         
      </div>

        <?php }} ?>


        
    </div>
</body>
</html>