<?php
$serverName = "localhost";
$user = "root";
$password = "28052018";
$db_name = "CRUD_MYSQL";

$conn = mysqli_connect($serverName, $user, $password, $db_name);
mysqli_set_charset($conn, "utf8");

if(mysqli_connect_error()){
    echo "Falha na conexão: " . mysqli_connect_error();
}