


<?php $__env->startSection('title', __('main.header.link_3')); ?>
<?php $__env->startSection('description-seo', $metatag->description ?? getItem('client')); ?>

<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/atuacao.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main>
        <div class="content">
            <div class="atuacao">
                <div class="title-default animate" data-animate="fade">
                    <h1>
                        <?php echo __('atuacao.title1'); ?>

                    </h1>

                    <h2>
                        <?php echo __('atuacao.subtitle1'); ?>

                    </h2>
                </div>

                <div class="conteudo">
                    <p class="animate" data-animate="top">
                        <?php echo __('atuacao.text1'); ?>

                    </p>

                    <p class="animate" data-animate="top">
                        <?php echo __('atuacao.text2'); ?>

                    </p>

                    <div class="polygon-img">
                        <div class="left">
                            <p class="animate" data-animate="top">
                                <?php echo __('atuacao.word1'); ?>

                            </p>

                            <p class="animate" data-animate="right">
                                <?php echo __('atuacao.word3'); ?>

                            </p>

                            <p class="animate" data-animate="bottom">
                                <?php echo __('atuacao.word5'); ?>

                            </p>
                        </div>

                        <div class="area-img">
                            <img src="<?php echo e(asset('img/icone-logus-capital.webp')); ?>" alt="Logus Capital" width="150" height="auto">
                        </div>

                        <div class="right">
                            <p class="animate" data-animate="bottom">
                                <?php echo __('atuacao.word2'); ?>

                            </p>

                            <p class="animate" data-animate="left">
                                <?php echo __('atuacao.word4'); ?>

                            </p>

                            <p class="animate" data-animate="top">
                                <?php echo __('atuacao.word6'); ?>

                            </p>
                        </div>
                    </div>

                    <h3 class="animate" data-animate="fade">
                        <?php echo __('atuacao.title-text'); ?>

                    </h3>

                    <p class="animate" data-animate="left">
                        <?php echo __('atuacao.text3'); ?>

                    </p>

                    <p class="animate" data-animate="left">
                        <?php echo __('atuacao.text4'); ?>

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
<?php echo $__env->make('layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home2/logus670/public_html/novo/resources/views/pages/atuacao.blade.php ENDPATH**/ ?>