<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Candal&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>Home Digital</title>
</head>
<body>
    <header>
        <div class="container">
            <a href="index.php"><img src="_img/logo.png" width="25%"></a>
        
            <nav>
                <ul>
                    <li><a href="index.php">Início</a></li>
                    <li><a href="pesquisa.php">Pesquisa de Preço</a></li>
                    <li><a href="consultoria.html">Consultoria</a></li>
                    <li><a href="contato.html">Contato</a></li>
                    
                    <!-- Exibir opções com base no login -->
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <!-- Se o usuário estiver logado, mostrar Logout -->
                        <li><a href="logout.php">Sair</a></li>
                        <li><a href="perfil.php">Meu Perfil</a></li> <!-- Exemplo de um link para o perfil -->
                    <?php else: ?>
                        <!-- Se o usuário NÃO estiver logado, mostrar Login e Cadastro -->
                        <li><a href="login.html">Login</a></li>
                        <li><a href="register.html">Cadastro</a></li>
                    <?php endif; ?>
                    <li><a href="cadastro_produto.php"></a></li>
                </ul>
            </nav>
            <div class="menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <div class="hero-text">
                <h1>Design de Interiores Incrível</h1>
                <p>Transforme seu espaço com nossas ideias inovadoras e estilos modernos.</p>
                <a href="#" class="btn-primary">Saiba Mais</a>
            </div>
            <div class="hero-image">
                <img src="_img/casa.jpg" alt="Design de Interiores">
            </div>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <div class="feature-item">
                <i class="fas fa-paint-brush"></i>
                <h3>Design Criativo</h3>
                <p>Solucionamos suas necessidades com criatividade e inovação.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-couch"></i>
                <h3>Conforto</h3>
                <p>Nossos designs são focados no conforto e funcionalidade.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-leaf"></i>
                <h3>Sustentabilidade</h3>
                <p>Utilizamos materiais sustentáveis para um futuro melhor.</p>
            </div>
        </div>
    </section>

    <section class="portfolio">
        <div class="container">
            <h2>Nosso Portfólio</h2>
            <div class="portfolio-grid">
                <div class="portfolio-item">
                    <img src="_img/projeto1.jpg" alt="Projeto 1">
                    <div class="portfolio-overlay">
                        <h3>Projeto 1</h3>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="_img/projeto2.jpg" alt="Projeto 2">
                    <div class="portfolio-overlay">
                        <h3>Projeto 2</h3>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="_img/projeto3.jpg" alt="Projeto 3">
                    <div class="portfolio-overlay">
                        <h3>Projeto 3</h3>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="_img/projeto4.jpg" alt="Projeto 4">
                    <div class="portfolio-overlay">
                        <h3>Projeto 4</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="newsletter">
        <div class="container">
            <h2>Assine Nossa Newsletter</h2>
            
                <input type="email" placeholder="Seu email" required>
                <button type="submit" class="btn-primary">Inscrever-se</button>
            
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-about">
                <h3>Home Design</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel lacus at dui tempor auctor.</p>
            </div>
            <div class="footer-links">
                <h3>Links</h3>
                <ul>
                    <li><a href="#">Início</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#">Portfólio</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h3>Nos Contate</h3>
                <ul>
                    <li><p><i class="fas fa-phone"></i> +880 12345678</p></li>
                    <li><p><i class="fas fa-envelope"></i> email@empresa.com</p></li>
                    <li><p><i class="fas fa-map-marker-alt"></i> Brasil</p></li>
                </ul>
            </div>
            <div class="footer-social">
                <h3>Redes Sociais</h3>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
