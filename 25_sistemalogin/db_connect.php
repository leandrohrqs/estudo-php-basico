<?php
// Conexão com o DB
$servername = "localhost";
$username = "sistemaloginadmin";
$password = "loginsistema";
$database = "sistemalogin";

$connect = mysqli_connect($servername, $username, $password, $database);
if (mysqli_connect_error()):
    echo "Falha na conexão: " . mysqli_connect_error();
endif;
?>

