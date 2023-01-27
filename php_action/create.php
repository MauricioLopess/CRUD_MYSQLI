<?php
session_start();
require_once("db_connect.php");

if(isset($_POST['btn-cadastrar'])){
    $nome = mysqli_escape_string($conn, $_POST['nome']);
    $sobrenome = mysqli_escape_string($conn, $_POST['sobrenome']);
    $email = mysqli_escape_string($conn, $_POST['email']);
    $idade = mysqli_escape_string($conn, $_POST['idade']);

    $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade');";

    if(mysqli_query($conn, $sql)){
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header("Location: ../index.php");
    }else{
        $_SESSION['mensagem'] = "Erro ao cadastrar";
        header("Location: ../index.php");
    }
}
