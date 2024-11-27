<?php
    // Definir o charset como UTF-8
    header('Content-Type: text/html; charset=utf-8');

    // Definições de conexão com o banco
    $dbHost = 'database-1.c3sqmko0m3om.us-east-2.rds.amazonaws.com';
    $dbUser = 'admin';
    $dbPassword = 'HdSBH3012';
    $dbName = 'tec_bd';

    // Estabelecer conexão com o banco
    $conexaoBD = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

    // Definir charset da conexão
    if (!$conexaoBD->set_charset("utf8")) {
        echo "Erro ao definir charset utf8: " . $conexaoBD->error;
    }

    // Verificar conexão
    if ($conexaoBD->connect_errno) {
        echo "ERRO AO CONECTAR COM O BANCO DE DADOS: " . $conexaoBD->connect_error;
    }
?>
