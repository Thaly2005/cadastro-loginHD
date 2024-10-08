<?php
require_once 'conexao.php';

// Recebe os dados JSON do JavaScript
$data = json_decode(file_get_contents('php://input'), true);

$nome = $data['nome'];
$email = $data['email'];
$senha = password_hash($data['senha'], PASSWORD_DEFAULT); // Criptografa a senha
$tipo = $data['tipo'];

// Prepara a query para inserção
$sql = "INSERT INTO Usuarios (nome, email, senha, tipo, data_cadastro) VALUES (?, ?, ?, ?, NOW())";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ssss", $nome, $email, $senha, $tipo);

// Executa a query e verifica se a inserção foi bem-da
if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => $mysqli->error]);
}

$stmt->close();
$mysqli->close();
?>
