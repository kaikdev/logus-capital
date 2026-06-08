<?php if (! $__env->hasRenderedOnce('941c3ed3-17bf-4cd0-a2f9-e2a052ef0a93')): $__env->markAsRenderedOnce('941c3ed3-17bf-4cd0-a2f9-e2a052ef0a93'); ?>
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
                <div class="item-input">
                    <label for="name">
                        <?php echo e(__('leads.lead.label_1')); ?>

                    </label>
                    <input type="text" id="name" name="name" placeholder="<?php echo e(__('leads.lead.placeholder')); ?>" required>
                </div>

                <div class="item-input">
                    <label for="email">
                        <?php echo e(__('leads.lead.label_2')); ?>

                    </label>
                    <input type="email" id="email" name="email" placeholder="<?php echo e(__('leads.lead.placeholder')); ?>" required>
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

    <div class="bg-effect-default left"></div>
    <div class="bg-effect-default right"></div>
</section>
<?php /**PATH C:\Users\kaikg\Downloads\logus-capital\resources\views/includes/lead.blade.php ENDPATH**/ ?>