


<?php $__env->startSection('title', __('main.header.link_1')); ?>
<?php $__env->startSection('description-seo', $metatag->description ?? getItem('client')); ?>

<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/quem-somos.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main>
        <div class="content">
            <div class="proposito">
                <div class="title-default">
                    <h1>
                        <?php echo __('home.title1'); ?>

                    </h1>

                    <h2>
                        <?php echo __('home.subtitle1'); ?>

                    </h2>
                </div>

                <div class="conteudo">
                    <div class="left">
                        <p>
                            <?php echo __('home.text1'); ?>

                        </p>

                        <p>
                            <?php echo __('home.text2'); ?>

                        </p>
                    </div>

                    <img src="<?php echo e(asset('img/home/proposito.webp')); ?>" alt="Propósito" loading="lazy">
                </div>
            </div>

        </div>
    </main>


    <?php echo $__env->make('includes.saiba-mais', [
        'title' => __('quem-somos.saiba.title'),
        'subtitle' => __('quem-somos.saiba.subtitle'),
        'route' => __('quem-somos.saiba.route'),
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->make('includes.lead', [
        'title' => __('leads.lead.title'),
        'subtitle' => __('leads.lead.subtitle'),
        'botao' => __('leads.lead.botao'),
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\kaikg\Downloads\logus-capital\resources\views/pages/quem-somos.blade.php ENDPATH**/ ?>