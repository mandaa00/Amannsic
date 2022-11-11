<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Pedidos</title>
    <style>
    body{
        background-color:rgb(255, 235, 228);
    }
    h1{
        color: rgb(121, 1, 45);
        text-align: center;
        font-size: 40px;
    }
    .vinho{
        margin: 10px;
        height: 30%;
        background-color: rgb(222, 182, 168 );
        display: flex;
        flex-direction: column;
        justify-content: center;
        border-radius: 10px;
        text-align: center;
        color: rgb(121, 1, 45);
        word-spacing: 80px;
        font-weight: bold;
        /*
        border-color: rgb(121, 1, 45);
        height: 50px;
        width: 89%;
        color: rgb(121, 1, 45);
        font-size: 27px;
        padding-top: 15px;
        text-align: center;
        word-spacing: 100px;*/
    }
    .vinho2{
        /*margin: 10px;
        height: 50%;
        background-color: rgb(222, 182, 168 );
        height: 50px;
        width: 89%;
        color: rgb(121, 1, 45);
        font-size: 27px;
        padding-top: 15px;
        text-align: center;
        word-spacing: 100px;*/
    }
    .centro{
        height: 15vh;
        width: 95%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background-color: rgb(121, 1, 45);
        border-radius: 10px;
        margin: 5%;
        margin-left: 3%;
    
    }
    .fundinho{
        display: flex;
        justify-content: center;
        width: 91%;
        height: 2700px;
        border-radius: 15px;
        background-color:rgb(222, 182, 168 );
        margin-left: 55px;
        border-radius: 10px;
        padding: 20px;
    }
    #select{
        height: 100%;
        text-align: center;
        font-size: 100%;
        font-weight: bold;
        background-color: rgb(222, 182, 168 );
        border-radius: 10px;
        color: rgb(121, 1, 45);
    }
    #aj{
        text-align: center;
        display: flex;
    }
    .fundo{
        width: 100%;
        background-color: rgb(255, 235, 228);
        border-radius: 10px;   
        height: 2700px;
    }
    .lancprod{
        color: rgb(121, 1, 45);
        font-size: 18px;
        text-align: center;
        text-decoration: underline;
        margin-top: -5%;
    }
    </style>
</head>
<body>
        <nav class="navbar navbar-expand-lg" style="background-color: rgba(232, 207, 193, 1)">
                <a class="navbar-brand ps-5 " style="color:rgba(82, 62, 39, 1);">Amannsic Addiction</a>
                    <div class="container">
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                          <a class="nav-link active ms-5" style="color:rgba(82, 62, 39, 1);" aria-current="page" href="catalogo.php">Catálogo</a>
                          <a class="nav-link active ms-3" style="color:rgba(82, 62, 39, 1);" aria-current="page" href="pedido.html">Pedidos</a>
                          <a class="nav-link active ms-3" style="color:rgba(82, 62, 39, 1);" aria-current="page" href="perfil.html">Prefil</a>
                        </div>
                      </div>
                    </div>
                  </nav>
    <h1> Pedidos: </h1>
<div class="centro">
<div class="vinho">
            <select id="select">    
                    <option value="ano0" id="aj">2017</option>
                    <option value="ano1" id="aj">2018</option>
                    <option value="ano2" id="aj">2019</option>
                    <option value="ano3" id="aj">2020</option>
                    <option value="ano4" id="aj">2021</option>
                    <option value="ano5" id="aj">2022</option>
                  </select>
</div>
<div class="vinho">
   JAN
   FEV
   MAR
   ABR
   MAIO
   JUN
   JUL
   AGO
   SET
   OUT
   NOV
   DEZ

</div>
</div>
<br><br>
<a href="lancamento_pedido.php"><div class="lancprod"> lançar novo pedido </div> </a>
<br><br>
<div class="fundinho">
    <div class="fundo">
            <table class="table">
                    <tbody>
                        <?php
                        include("listagem_pedidos.php");
                        
                        if (!empty($lista_produtos)) {
                          
                            foreach ($lista_produtos as $linha) {?>
                                <tr class="tr">
                                <td class="td"> <?php echo '<img height="90px" width="90px" src="' .$linha['img']. '">'; ?>  </td>
                                <td class="td"> <?php echo $linha['codigo_peca']; ?>  </td>
                                <td class="td"> <?php echo $linha['num_pedido']; ?>  </td>
                                <td class="td"> <?php echo $linha['tamanho']; ?>  </td>
                                <td class="td"> <?php echo $linha['preco_total']; ?>  </td>
                                </tr>
                            <?php }
                        }
                        ?>
                    </tbody>
    </div>
</div>

<<<<<<< HEAD:pedido.php
<div class="rodape">
    <div class="menu">
    </div>
    <a href="catalogo.php"><img src="camisaa.png" width="70px" height="60px"></a>
    <a href="pedido.php"><img src="lista.png" width="65px" height="60px"></a>
    <a href="perfil.html"><img src="perfill.png" width="60px" height="60px"></a>
    </div>


=======
>>>>>>> 052fba555a02d0727e9a0daacb4a7d441e93706c:pedido.html
</body>
</html>