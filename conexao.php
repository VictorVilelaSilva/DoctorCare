<?php
// Configurações de conexão com o banco de dados
$host = "localhost"; // Endereço do servidor do banco de dados
$dbname = "dweb"; // Nome do banco de dados
$username = "root"; // Nome de usuário do banco de dados
$password = ""; // Senha do banco de dados

// Criação da instância mysqli para conexão
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar se houve algum erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Configuração do conjunto de caracteres para UTF-8
$conn->set_charset("utf8");
?>