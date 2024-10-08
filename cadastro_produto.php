<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
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
        <h1>Cadastrar Produto</h1>
        <form action="processa_cadastro_produto.php" method="post">
            <label for="nome_produto">Nome do Produto:</label>
            <input type="text" id="nome_produto" name="nome_produto" required>

            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao" required></textarea>

            <label for="preco">Preço:</label>
            <input type="number" id="preco" name="preco" step="0.01" required>

            <label for="quantidade">Quantidade:</label>
            <input type="number" id="quantidade" name="quantidade" required>

            <label for="endereco">Endereço:</label>
            <textarea id="endereco" name="endereco" required></textarea>


            <button type="submit">Cadastrar Produto</button>
        </form>
    </main>

    <footer>
        <p>&copy; 2024 Home Digital. Todos os direitos reservados.</p>
    </footer>

    
</body>
</html>
