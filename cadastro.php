<?php require 'conexao.php'; 

$nome = @$_POST['nome'];
$login = @$_POST['login'];
$password = @$_POST['password'];

$sql = "INSERT INTO usuarios (nome, login, password)
VALUES ('$nome', '$login', '$password')";

$conn->exec($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="cadastro.php" method="POST">
        <h1>Cadastro</h1>
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="login" placeholder="Login">
        <input type="password" name="password" placeholder="Senha">
        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>