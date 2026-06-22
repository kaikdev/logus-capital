


<?php $__env->startSection('title', __('main.header.link_1')); ?>
<?php $__env->startSection('description-seo', $metatag->description ?? getItem('client')); ?>

<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/quem-somos.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main>
        <div class="content">
            <div class="quem-somos">
                <div class="title-default animate" data-animate="fade">
                    <h1>
                        <?php echo __('quem-somos.title1'); ?>

                    </h1>

                    <h2>
                        <?php echo __('quem-somos.subtitle1'); ?>

                    </h2>
                </div>

                <div class="conteudo">
                    <p class="animate" data-animate="left">
                        <?php echo __('quem-somos.text1'); ?>

                    </p>

                    <p class="animate" data-animate="left">
                        <?php echo __('quem-somos.text2'); ?>

                    </p>

                    <div class="area-videos">
                        <iframe class="animate" data-animate="top" width="560" height="315" src="https://www.youtube.com/embed/WWEt1EOje68?si=iZuJBz9rAsMo_oG4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                        <iframe class="animate" data-animate="top" width="560" height="315" src="https://www.youtube.com/embed/WWEt1EOje68?si=iZuJBz9rAsMo_oG4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                        <iframe class="animate" data-animate="top" width="560" height="315" src="https://www.youtube.com/embed/WWEt1EOje68?si=iZuJBz9rAsMo_oG4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>

                    <p class="animate" data-animate="left">
                        <?php echo __('quem-somos.text3'); ?>

                    </p>

                    <p class="animate" data-animate="left">
                        <?php echo __('quem-somos.text4'); ?>

                    </p>

                    <div class="servico">
                        <div class="left">
                            <p class="animate" data-animate="left">
                                <?php echo __('quem-somos.service1'); ?>

                            </p>

                            <p class="animate" data-animate="top">
                                <?php echo __('quem-somos.service2'); ?>

                            </p>
                        </div>

                        <div class="img animate" data-animate="scale">
                            <img src="<?php echo e(asset('img/icone-logus-capital.webp')); ?>" alt="Logus Capital" width="100" height="115">
                        </div>

                        <div class="right animate" data-animate="top">
                            <p>
                                <?php echo __('quem-somos.service3'); ?>

                            </p>
                        </div>
                    </div>
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
<?php echo $__env->make('layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home2/logus670/public_html/novo/resources/views/pages/quem-somos.blade.php ENDPATH**/ ?>