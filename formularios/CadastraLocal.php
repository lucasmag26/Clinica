<?php

    include_once("conecta.php");

    $endereco = $_POST['endereco'];
    $medicoId = $_POST['medico'];
    $especialidadeId = $_POST['especialidade'];
        
    $result = mysqli_query($conexao, "INSERT INTO localatendimento (endereco, medicoId, especialidadeId ) VALUES ('$endereco', '$medicoId', '$especialidadeId')");

    mysqli_close($conexao);
    header('location:../index.php');
?>