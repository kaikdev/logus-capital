


<?php $__env->startSection('title', __('main.header.link_3')); ?>
<?php $__env->startSection('description-seo', $metatag->description ?? getItem('client')); ?>

<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/atuacao.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main>
        <div class="content">
            <div class="atuacao">
                <div class="title-default">
                    <h1>
                        <?php echo __('atuacao.title1'); ?>

                    </h1>

                    <h2>
                        <?php echo __('atuacao.subtitle1'); ?>

                    </h2>
                </div>

                <div class="conteudo">
                    <p>
                        <?php echo __('atuacao.text'); ?>

                    </p>
                </div>
            </div>
        </div>
    </main>


    <?php echo $__env->make('includes.saiba-mais', [
        'title' => __('atuacao.saiba.title'),
        'subtitle' => __('atuacao.saiba.subtitle'),
        'route' => __('atuacao.saiba.route'),
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->make('includes.lead', [
        'title' => __('leads.lead.title'),
        'subtitle' => __('leads.lead.subtitle'),
        'botao' => __('leads.lead.botao'),
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\kaikg\Downloads\logus-capital\resources\views/pages/atuacao.blade.php ENDPATH**/ ?>