<?php if (! $__env->hasRenderedOnce('f50ae15f-c6ba-4f1e-9ede-7a76cc6dbcf5')): $__env->markAsRenderedOnce('f50ae15f-c6ba-4f1e-9ede-7a76cc6dbcf5'); ?>
    <?php $__env->startPush('styles'); ?>
        <link rel="stylesheet" href="<?php echo e(asset('css/lead.css')); ?>" media="print" onload="this.media='all'">
    <?php $__env->stopPush(); ?>
<?php endif; ?>

<section class="area-lead">
    <div class="content">
        <div class="box-lead animate" data-animate="left">
            <h2>
                <?php echo $title; ?>

                <span><?php echo $subtitle; ?></span>
            </h2>

            <form action="<?php echo e(route('lead-submit')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="area-inputs-lead">
                    <div class="item-input">
                        <input type="text" id="name" name="name" placeholder="<?php echo e(__('leads.lead.label_1')); ?>" required>
                    </div>

                    <div class="item-input">
                        <input placeholder="<?php echo e(__('leads.lead.label_2')); ?>" type="text" id="phone" name="phone" oninput="this.value = formatPhone(this.value)" maxlength="15" required>
                    </div>

                    <div class="item-input">
                        <input type="email" id="email" name="email" placeholder="<?php echo e(__('leads.lead.label_3')); ?>" required>
                    </div>
                </div>

                <div class="area-termos">
                    <input id="termos" name="checkbox" type="checkbox" required>

                    <label for="termos"><?php echo e(__('leads.lead.inicio_termos')); ?> <a href="<?php echo e(route_lang('termos')); ?>"><?php echo e(__('leads.lead.termos_1')); ?></a> <?php echo e(__('leads.lead.meio_termos')); ?> <a href="<?php echo e(route_lang('termos')); ?>"><?php echo e(__('leads.lead.termos_2')); ?></a> <?php echo e(__('leads.lead.final_termos')); ?></label>
                </div>

                <button class="btn-lead" type="submit">
                    <?php echo !empty($botao) ? $botao : 'Enviar'; ?>

                </button>
            </form>
        </div>
    </div>
</section>

<script>
    function formatPhone(value) {
        const numbers = value.replace(/\D/g, '');
            
        if (numbers.length <= 10) {
            return numbers.replace(/(\d{2})(\d{4})(\d{0,4})/, function(_, a, b, c) {
                return c ? `(${a}) ${b}-${c}` : `(${a}) ${b}`;
            });
        }
            
        return numbers.replace(/(\d{2})(\d{5})(\d{0,4})/, function(_, a, b, c) {
            return c ? `(${a}) ${b}-${c}` : `(${a}) ${b}`;
        });
    }
</script><?php /**PATH C:\Users\kaikg\Downloads\logus-capital\resources\views/includes/lead.blade.php ENDPATH**/ ?>