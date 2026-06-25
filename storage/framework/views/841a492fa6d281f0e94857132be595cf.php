<html>
<body>
    <h2>Novo contato recebido <?php echo e(getItem('client')); ?></h2>

    <p><strong>Nome:</strong> <?php echo e(filled($dados['name']) ? $dados['name'] : 'Não informou'); ?></p>

    <p><strong>Telefone:</strong> <?php echo e(filled($dados['phone']) ? $dados['phone'] : 'Não informou'); ?></p>

    <p><strong>E-mail:</strong> <?php echo e(filled($dados['email']) ? $dados['email'] : 'Não informou'); ?></p>

    <p>
        <strong>Mensagem:</strong><br>
        <?php echo e($dados['message']); ?>

    </p>
</body>
</html><?php /**PATH C:\Users\kaikg\Downloads\logus-capital\resources\views/emails/contato.blade.php ENDPATH**/ ?>