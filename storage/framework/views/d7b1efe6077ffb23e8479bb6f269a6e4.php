<html>
    <h2>Email recebido de Lead <?php echo e($url); ?></h2>
    <hr>
    <p>
        O usuário <strong><?php echo e($name); ?></strong> com o e-mail 
        <strong><?php echo e($email); ?></strong> deseja receber os informativos da 
        <strong><?php echo e(getItem('client')); ?></strong>.
    </p>
</html><?php /**PATH /home2/logus670/public_html/novo/resources/views/emails/lead_recebido.blade.php ENDPATH**/ ?>