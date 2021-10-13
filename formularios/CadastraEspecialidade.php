<?php

    include_once("conecta.php");

    $especialidade = $_POST['especialidade'];
    $cbos = $_POST['CBOS'];

    $result = mysqli_query($conexao, "INSERT INTO especialidade (especialidade, cbos) VALUES ('$especialidade', '$cbos')");

    mysqli_close($conexao);
    header('location:../index.php');
?>