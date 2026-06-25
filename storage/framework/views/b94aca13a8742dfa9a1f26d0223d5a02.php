<html>
    <h2>Email recebido de Lead <?php echo e($url); ?></h2>
    <hr>

    <p>
        O usuário <strong><?php echo e($name); ?></strong>
        com o e-mail <strong><?php echo e($email ?: 'Não informou'); ?></strong>
        e número <strong><?php echo e($whatsapp ?: 'Não informou'); ?></strong>
        deseja receber os informativos da <strong><?php echo e(getItem('client')); ?></strong>.
    </p>
</html><?php /**PATH C:\Users\kaikg\Downloads\logus-capital\resources\views/emails/lead_recebido.blade.php ENDPATH**/ ?>