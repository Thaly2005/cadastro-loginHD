document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('nav ul');

    menuToggle.addEventListener('click', () => {
        nav.classList.toggle('showing');
    });

    const pesquisaForm = document.getElementById('pesquisa-form');
    const listaResultados = document.getElementById('lista-resultados');

    if (pesquisaForm) {
        pesquisaForm.addEventListener('submit', function(event) {
            event.preventDefault();

            // Simulando os resultados da pesquisa
            const resultados = [
                { nome: 'Produto A', preco: 'R$100', localizacao: 'Loja X' },
                { nome: 'Produto B', preco: 'R$150', localizacao: 'Loja Y' },
                { nome: 'Produto C', preco: 'R$200', localizacao: 'Loja Z' },
            ];

            listaResultados.innerHTML = '';
            resultados.forEach(resultado => {
                const li = document.createElement('li');
                li.textContent = `${resultado.nome} - ${resultado.preco} - ${resultado.localizacao}`;
                listaResultados.appendChild(li);
            });
        });
    }

    const registerForm = document.getElementById('registerForm');
    const loginForm = document.getElementById('loginForm');

    if (registerForm) {
        registerForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            const users = JSON.parse(localStorage.getItem('users')) || [];
            const userExists = users.some(user => user.email === email);

            if (userExists) {
                alert('Email já cadastrado!');
            } else {
                users.push({ name, email, password });
                localStorage.setItem('users', JSON.stringify(users));
                alert('Cadastro realizado com sucesso!');
                window.location.href = 'login.html';
            }
        });
    }

    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            const users = JSON.parse(localStorage.getItem('users')) || [];
            const user = users.find(user => user.email === email && user.password === password);

            if (user) {
                alert('Login realizado com sucesso!');
                // Redirecionar para a página inicial ou dashboard
                window.location.href = 'index.php';
            } else {
                alert('Email ou senha incorretos!');
            }
        });
    }
});
