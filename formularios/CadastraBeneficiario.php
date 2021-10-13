<?php

    include_once("conecta.php");

    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $dataNascimento = $_POST['dataNascimento'];

    $result = mysqli_query($conexao, "INSERT INTO beneficiario (nome, dataNascimento, sexo) VALUES ('$nome','$dataNascimento','$sexo')");

    mysqli_close($conexao);
    header('location:../index.php');
?>