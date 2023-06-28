<?php require 'conexao.php';

$query = "SELECT * FROM usuarios";
$usuarios = $conn->query($query)->fetchAll();

$nome = @$_POST['nome'];
$descricao = @$_POST['descricao'];
$quantidade = @$_POST['quantidade'];
$valor = @$_POST['valor'];
$user_id = @$_POST['user_id'];

if ($nome !== null && $descricao !== null && $quantidade !== null && $valor != null && $user_id !== null) {

    $sql = "INSERT INTO produtos (nome, descricao, quantidade, valor, user_id) VALUES ('$nome', '$descricao', '$quantidade', '$valor', '$user_id')";
    $conn->exec($sql);
    echo "Produto Adicionado com sucesso!";
}
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
    <form action="produtos.php" method="POST">
        <h1>Cadastro de Produtos</h1>
        <input type="text" name="nome" placeholder="Nome">
        <textarea name="descricao" placeholder="Descrição"></textarea>
        <input type="number" name="quantidade" placeholder="Quantidade">
        <input type="number" min="0" step="any" name="valor" placeholder="Valor">
        <select name="user_id" id="">
            <option value="">Selecione o usuário</option>
            <?php foreach ($usuarios as $user) {
                echo "<option value='" . $user['id'] . "'>" . $user['nome'] . "</option>";
            }
            ?>
        </select>
        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>