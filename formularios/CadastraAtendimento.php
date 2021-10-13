<?php

    include_once("conecta.php");

    $beneficiarioId = $_POST['beneficiario'];
    $especialidadeId = $_POST['especialidade'];
    $medicoId = $_POST['medico'];
    $localId = $_POST['local'];
    $procedimentoId = $_POST['procedimento'];
    $data = $_POST['data'];
        
    $result = mysqli_query($conexao, "INSERT INTO atendimento (beneficiarioId, especialidadeId, medicoId, localId, procedimentoId, data ) VALUES ('$beneficiarioId', '$especialidadeId', '$medicoId', '$localId', '$procedimentoId', '$data')");

    mysqli_close($conexao);
    header('location:../index.php');
?>