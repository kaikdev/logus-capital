<html>
    <h2>Email recebido de Lead {{ $url }}</h2>
    <hr>

    <p>
        O usuário <strong>{{ $name }}</strong>
        com o e-mail <strong>{{ $email ?: 'Não informou' }}</strong>
        e número <strong>{{ $whatsapp ?: 'Não informou' }}</strong>
        deseja receber os informativos da <strong>{{ getItem('client') }}</strong>.
    </p>
</html>