<?php
require_once 'conexao.php'; // Incluindo o arquivo de conexão

// Verifica se o termo de pesquisa foi fornecido
$termo_pesquisado = $_GET['termo'] ?? '';

// Consulta os produtos que correspondem ao termo pesquisado
$query = "SELECT * FROM Produtos WHERE nome_produto LIKE ? OR descricao LIKE ?";
$stmt = $mysqli->prepare($query);

// Adiciona '%' ao redor do termo para busca parcial
$termo = '%' . $termo_pesquisado . '%';
$stmt->bind_param('ss', $termo, $termo);
$stmt->execute();
$result = $stmt->get_result();

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa de Produtos</title>
    <link rel="stylesheet" href="_css/style.css"> <!-- Inclua o CSS que você estiver usando -->
</head>
<body>
<header>
        <div class="container">
            <a href="index.php"><img src="_img/logo.png"width="25%"></a>
            
            <nav>
                <ul>
                    <li><a href="index.php">Início</a></li>
                    <li><a href="pesquisa.php">Pesquisa de Preço</a></li>
                    <li><a href="consultoria.html">Consultoria</a></li>
                    <li><a href="contato.html">Contato</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="register.html">Cadastro</a></li>
                    <li><a href="cadastro_produto.php">Cadastrar Produto</a></li>
                </ul>
            </nav>
            <div class="menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <main class="container">
        <h1>Resultados da Pesquisa</h1>

        <?php if ($result->num_rows > 0): ?>
            <div class="produtos">
                <?php while ($produto = $result->fetch_assoc()): ?>
                    <div class="produto">
                        <h2><?php echo htmlspecialchars($produto['nome_produto']); ?></h2>
                        <p><?php echo htmlspecialchars($produto['descricao']); ?></p>
                        <p>Preço: R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
                        <p>Localização: <?php echo htmlspecialchars($produto['id_localizacao']); ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else: ?>
            <p>Nenhum produto encontrado.</p>
        <?php endif; ?>

        <?php
        $stmt->close();
        $mysqli->close();
        ?>
    </main>

    <footer>
        <p>&copy; 2024 Home Digital. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
