<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lançamento de Pedidos</title>

    <style>
    body{
        background-color:rgb(255, 235, 228);
        width: 100%;
        max-height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        align-content: center;
    }
    h1{
        color: rgb(121, 1, 45);
        text-align: center;
        font-size: 30px;
    }
    .vinho{
        background-color: rgb(222, 182, 168 );
        border-style: solid;
        border-radius: 16px;
        border-width: 10px;
        border-color: rgb(121, 1, 45);
        width: 100%;
        color: rgb(121, 1, 45);
        font-size: 27px;
        padding-top: 10px;
        height: 300px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        justify-items: center;
    }
    .centro{
        width: 10   0%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        justify-items: center;
        align-items: center;
        align-content: center;
        height: 400px;
    }
    .rodape{
        background-color: rgb(121, 1, 45);
        width: 100%;
        height: 60px;
        position:fixed;
        bottom: 0px;
        left: 0px;
        right: 0px;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
    }
    .nome{
        background-color: rgb(255, 235, 228);
        text-align: left;
        border-radius: 10px;
        border-style: solid;
        border-color: rgb(255, 235, 228);
        margin-left: 1%;
        margin-right: 1%;
        word-spacing: 10px;
        width: 96%;
        margin-top: 10px;
        height: 11%;
    }
    #caixas{
        width: 98%;
        background-color: rgb(255, 235, 228);
        border-style:solid;
        border-bottom-color: rgb(121, 1, 45);
        border-left-color: rgb(255, 235, 228);   
        border-right-color: rgb(255, 235, 228);
        border-top-color: rgb(255, 235, 228);
        outline: none;
        font-size: 18px;
        color: rgb(121, 1, 45);
        height: 0%;
    }
    .botoes{
        display: flex;
        flex-direction: row;
        justify-content:space-evenly;
        position: absolute;
        margin-bottom: 50px;
        bottom: 40px;
    }
    #botao{
        background-color: rgb(121, 1, 45);
        border-radius: 15px;
        color: rgb(255, 235, 228);
        width: 190px;
        height: 30px;
        border-color: rgb(121, 1, 45);
        font-size: 16px;
        margin-left: 60px;
    }
    .tabela{
        margin-left: 100px;
        background-color: rgb(222, 182, 168 );
        border-style: solid;
        border-radius: 16px;
        border-width: 10px;
        border-color: rgb(121, 1, 45);
        width: 404px;
        color: rgb(121, 1, 45);
        font-size: 22px;
        text-align: center;
   
    }
    </style>
</head>
<body>
    <h1> Lançamento de Pedidos: </h1>
<div class="centro">
    <form  method="POST" id="formulario" action="lancar.php">
        <div class="vinho">
                    <div class="nome">
                        Peça:
                        <select id="id_peca" name="peca">
                            <option value="Camisas"> Camisas</option>
                            <option value="Calcas">Calças</option>
                            <option value="Bermudas"> Bermudas</option>
                            <option value="Saias"> Saias </option>
                            <option value="Shorts"> Shorts </option>
                            <option value="Regatas"> Regatas</option>
                        </select>
                    </div>
                    <div class="nome">
                        Tamanho:
                        <select id="tamanho" name="tamanho">
                                <option value="P"> P</option>
                                <option value="M"> M </option>
                                <option value="G"> G </option>
                                <option value="GG"> GG </option>
                        </select>    
                    </div>      

                    <div class="nome">
                        Quantidade:
                        <input type="number" id="quantidade" name="quantidade" onkeyup="calcular();">    
                    </div>      
                    <div class="nome">
                        Cliente:
                        <input type="text" id="cliente" name="cliente">    
                    </div>
                   

                    <div class="nome">
                        Preço final (R$):
                        <input type="text" id="preco_final" name="preco_final"  style="border:0;background-color: rgb(255, 235, 228);">    
                    </div>
                    <br>
        </div>
    </form>
    <div class="tabela">
        <table align="center" border="1">
            <tr>
                <td>
                    Cliente
                </td>
                <td>
                    Peça
                </td>
                <td>
                    Tamanho
                </td>
                <td>
                    Quantidade
                </td>
                <td>
                    Preço
                </td>
                <td>
                    Excluir
                </td>
            </tr>
    <?php
if(isset($_GET["email"]))
{
   $cliente = $_GET["email"];
   
     include ("config.php");
     $comando = $pdo -> prepare("SELECT * FROM PEDIDOS WHERE cliente='$cliente'");
     $comando->execute();


    $res = $comando->fetchAll(PDO::FETCH_ASSOC);
    foreach($res as $linha)
    {  
        $cliente = $linha["cliente"];
        $nome = $linha["codigo_peca"];
        $tamanho = $linha["tamanho"];
        $quantidade = $linha["quantidade"];
        $preco = $linha["preco_total"];
        $excluir=$_POST["excluir"];
        echo("<tr><td>$cliente</td><td>$nome</td><td>$tamanho</td><td>$quantidade</td><td>$preco</td><td>$excluir</td></tr>");
    }


   }
    ?>
        </table>
        </div>        
</div>

<div class="botoes">
    <input type="button" value="Adicionar ao carrinho" id="botao" onclick="lancar();">
    <input type="button" value="Excluir" id="botao">
    <input type="button" value="Atualizar" id="botao">
    <input type="button" value="Finalizar pedido" id="botao">
    </div>
 
<div class="rodape">
    <a href="catalogo.html"><img src="camisaa.png" width="50px" height="40px"></a>
    <a href="pedido.html"><img src="lista.png" width="45px" height="40px"></a>
    <a href="perfil.html"><img src="perfill.png" width="40px" height="40px"></a>
    </div>
 
</body>
 

  
<script>
    function lancar()
    {
        formulario.submit();
    }
    function calcular()
    {
        if(id_peca.value=="Camisas")
        {
            preco_final.value= 21*quantidade.value;
        }
        if(id_peca.value=="Calças")
        {
            preco_final.value= 35*quantidade.value;
        }
        if(id_peca.value=="Bermudas")
        {
            preco_final.value= 30*quantidade.value;
        }
        if(id_peca.value=="Saias")
        {
            preco_final.value= 27*quantidade.value;
        }
        if(id_peca.value=="Shorts")
        {
            preco_final.value= 24*quantidade.value;
        }
        if(id_peca.value=="Regatas")
        {
            preco_final.value= 19*quantidade.value;
        }
    }
</script>

 
 
</html>
