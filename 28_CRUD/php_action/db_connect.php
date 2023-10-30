<?php
// Conexão com o banco de dados

$servername = "localhost";
$username = "root";
$password = "";
$database = "crud";

$connect = mysqli_connect($servername, $username, $password, $database);
mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}