<html>
<body>
    <h2>Novo contato recebido {{ getItem('client') }}</h2>
    
    <p><strong>Nome:</strong> {{ $dados['name'] }}</p>
    <p><strong>Telefone:</strong> {{ $dados['phone'] }}</p>
    <p><strong>E-mail:</strong> {{ $dados['email'] }}</p>
    <p>
        <strong>Mensagem:</strong><br>
        {{ $dados['message'] }}
    </p>
</body>
</html>