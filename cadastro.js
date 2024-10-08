document.getElementById('cadastroForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita o envio padrão do formulário

    // Coleta os dados do formulário
    var nome = document.getElementById('nome').value;
    var email = document.getElementById('email').value;
    var senha = document.getElementById('senha').value;
    var tipo = document.getElementById('tipo').value;

    // Cria um objeto com os dados
    var dados = {
        nome: nome,
        email: email,
        senha: senha,
        tipo: tipo
    };

    // Envia os dados para o script PHP usando Fetch API
    fetch('cadastro.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(dados)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Cadastro realizado com sucesso!');
            window.location.href = 'login.html'; // Redireciona para a página de login
        } else {
            alert('Erro ao cadastrar: ' + data.message);
        }
    })
    .catch(error => {
        console.error('Erro:', error);
    });
});
