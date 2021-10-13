<?php

    include_once("conecta.php");

    $descricaoProcedimento = $_POST['descricaoProcedimento'];
    $tipoProcedimento = $_POST['tipoProcedimento'];
        
    $result = mysqli_query($conexao, "INSERT INTO procedimento (descricaoProcedimento, tipoProcedimento ) VALUES ('$descricaoProcedimento', '$tipoProcedimento')");

    mysqli_close($conexao);
    header('location:../index.php');
?>