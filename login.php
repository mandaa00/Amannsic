<?php

include("config.php");

$email = $_POST["email"];
$set_senha = $_POST["senha"];
echo($email);
echo($set_senha);
$comando = $pdo->prepare("SELECT email, senha FROM funcionarios WHERE email = :email");


$comando->bindValue(":email", $email);


$comando->execute();


if ($comando->rowCount() == 1){
    
    $resultado = $comando->fetch();
    
    if ($resultado['senha'] == $set_senha) {
        
        session_start();

        
        $_SESSION['codigo_func'] = $resultado['idcliente'];
        $_SESSION['senha'] = $resultado['senha'];
        $_SESSION['loggedin'] = true;

       
        header("Location:catalogo.html");
    }else {
        alert ("Email ou Senha Inválida!");
    }
    
}else{
    alert ("Email ou Senha Inválida!");
}

unset($comando);
unset($pdo);
?>