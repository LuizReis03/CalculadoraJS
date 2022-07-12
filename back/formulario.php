<?php

    $Nome = $_GET['nome'];
    $Sobrenome = $_GET['sobrenome'];
    $Cidade = $_GET['cidade'];
    $Mensagem = $_GET['mensagem'];
    $Sexo = $_GET['sexo'];

    if ($Sexo == 'M') {
        echo 'You hetero men?';
    }

?>