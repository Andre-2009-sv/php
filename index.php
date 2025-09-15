<?php
include "conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>André</title>
</head>
<body>
    <div class="formulario">  
        <form>
            <h3>Cadastro</h3>
            <input type="text" placeholder="Login" id="login" class="login">
            <input type="password" placeholder="Senha" id="senha">
            <input type="email" placeholder="Email" id="email">
            <input type="tel" placeholder="Número de telefone" id="telefone">
            <input type="submit" onclick="logar(); return false">
        </form>
        </div>
</body>
</html>