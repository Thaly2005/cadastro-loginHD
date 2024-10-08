<?php
$host = '127.0.0.1'; // Endereço do servidor MySQL
$usuario = 'root'; // Usuário do MySQL
$senha = ''; // Senha do MySQL
$banco = 'HomeDigitalDB'; // Nome do banco de dados

// Criação da conexão
$mysqli = new mysqli($host, $usuario, $senha, $banco);

// Verificação da conexão
if ($mysqli->connect_error) {
    die('Erro de conexão (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
}

// Definir o charset como UTF-8
$mysqli->set_charset('utf8');
?>
