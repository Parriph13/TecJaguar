<?php
    //Variáveis de conexão ao banco de dados
    $dbHost = 'estoquepro-estacio.c1eiug8i6wfp.us-east-1.rds.amazonaws.com';
    $dbUser = 'admin';
    $dbPassword = '6EQAMjuwKHShMotG0MAv';
    $dbName = 'estoque';

    //Variável de conexão
    $connectionDb = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

    //Estrutura condicional
    if($connectionDb->connect_errno) {
        echo "FALHA AO CONECTAR COM O BANCO DE DADOS";
    } else {
        echo "BANCO DE DADOS CONECTADO COM SUCESSO";
    }
?>
