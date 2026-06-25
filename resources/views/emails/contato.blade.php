<html>
<body>
    <h2>Novo contato recebido {{ getItem('client') }}</h2>

    <p><strong>Nome:</strong> {{ filled($dados['name']) ? $dados['name'] : 'Não informou' }}</p>

    <p><strong>Telefone:</strong> {{ filled($dados['phone']) ? $dados['phone'] : 'Não informou' }}</p>

    <p><strong>E-mail:</strong> {{ filled($dados['email']) ? $dados['email'] : 'Não informou' }}</p>

    <p>
        <strong>Mensagem:</strong><br>
        {{ $dados['message'] }}
    </p>
</body>
</html>