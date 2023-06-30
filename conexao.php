<?php
// Configurações de conexão com o banco de dados
$host = "localhost"; // endereço do servidor do banco de dados
$dbname = "dweb"; // nome do banco de dados
$username = "root"; // nome de usuário do banco de dados
$password = ""; // senha do banco de dados

// Criação da instância mysqli para conexão
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar se houve algum erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Configuração do conjunto de caracteres para UTF-8
$conn->set_charset("utf8");
?>
