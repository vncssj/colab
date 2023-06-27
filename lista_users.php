<?php
require 'conexao.php';

$sql = "SELECT * FROM usuarios";
$usuarios = $conn->query($sql);
$usuarios = $usuarios->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>

<body>
    <table>
        <tr>
            <td>nome</td>
            <td>login</td>
        </tr>
        <?php foreach ($usuarios as $user) :?>
            <tr>
                <td><?= $user ['nome'] ?></td>
                <td><?= $user ['login'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>