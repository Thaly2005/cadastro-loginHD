<?php
session_start();


// Verifica se o usuário está logado e é empresarial
if (!isset($_SESSION['id_usuario']) || $_SESSION['tipo'] !== 'empresarial') {
    header("Location: login.html");
    exit();
}

$nome_produto = $_POST['nome_produto'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$localizacao = $_POST['localizacao'];
$id_usuario = $_SESSION['id_usuario']; // ID do usuário logado

// Inserção do produto no banco de dados
$query = "INSERT INTO Produtos (nome_produto, descricao, preco, quantidade, id_usuario) VALUES (?, ?, ?, ?, ?)";
$stmt = $mysqli->prepare($query);
$stmt->bind_param('ssdii', $nome_produto, $descricao, $preco, $quantidade, $id_usuario);

if ($stmt->execute()) {
    echo "Produto cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar produto: " . $mysqli->error;
}

$stmt->close();
$mysqli->close();

header("Location: pesquisa.php");
?>
