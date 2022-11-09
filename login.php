<?php
    include("conecta.php");

    //atribuindo valores dos campos a variaveis.
    $email = $_POST["email"];
    $set_senha = $_POST["senha"];

    //comando sql.
    $comando = $pdo->prepare("SELECT codigo_func, senha, is_admin FROM funcionarios WHERE email = :email");

    //insere valores das variaveis no comando sql.
    $comando->bindValue(":email", $email);

    //executa a consulta no banco de dados.
    $comando->execute();

    //Se a consulta retornar uma única linha significa que o email inserido existe.
    if ($comando->rowCount() == 1) {
        //o fetch() transforma o retorno em um array (use apenas se o retorno for apenas um registro, ou seja, uma única linha da tabela).
        $resultado = $comando->fetch();

        //Comparar senha informada com a senha armazenado no banco de dados.
        if ($resultado['senha'] == ($set_senha)) {
            //inicia uma sessão.
            session_start();

            //insere informações na sessão.
            $_SESSION['codigo_func'] = $resultado['codigo_func'];
            $_SESSION['senha'] = $resultado['senha'];
            $_SESSION['is_admin'] = $resultado['is_admin'];
            $_SESSION['loggedin'] = true;

            //redireciona para a pagina informada.
            header("Location:catalogo.php");
        } 
    } else {
        echo ("Email ou Senha Inválida!");
    }
    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);
?>