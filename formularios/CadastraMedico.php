<?php

    include_once("conecta.php");

    $nome = $_POST['nome'];
    $crm = $_POST['CRM'];
    $dataNascimento = $_POST['dataNascimento'];

    $result = mysqli_query($conexao, "INSERT INTO medico (nome, crm, dataNascimento) VALUES ('$nome', '$crm', '$dataNascimento')");

    mysqli_close($conexao);
    header('location:../index.php');
?>