<?php
    //variáveis de conexão
    $dbHost = 'estoquepro-estacio.c1eiug8i6wfp.us-east-1.rds.amazonaws.com';
    $dbUser = 'admin';
    $dbPassword = '6EQAMjuwKHShMotG0MAv';
    $dbName = 'estoque';

    //variável de conexão
    $connectionDb = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

    //estrutura condicional
    if($connectionDb->connect_errno) {
        echo "FALHA NA CONEXÃO COM O BANCO DE DADOS!";
    } else {
        echo "CONEXÃO FEITA COM SUCESSO!";
    }


?>