<?php
    //Variáveis de conexão ao banco de dados
    $dbHost = 'estoquepro-estacio.c1eiug8i6wfp.us-east-1.rds.amazonaws.com';
    $dbUser = 'admin';
    $dbPassword = '6EQAMjuwKHShMotG0MAv';
    $dbName = 'estoque';

    //Variável de conexão
    $connectionDb = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

    //Estrutura condicional
?>