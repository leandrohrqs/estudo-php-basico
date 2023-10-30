<?php
// Conexão
require_once 'db_connect.php';
// Sessão
session_start();

// Verificação

if (!isset($_SESSION['logado'])):
    header('Location: index.php');
endif;

// Dados
$id = $_SESSION['id_user'];
$sql = "SELECT * FROM users WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página Restrita</title>
</head>
<body>
<h1>Olá <?php echo $dados['name']; ?></h1>
<a href="logout.php">Sair</a>
</body>
</html>