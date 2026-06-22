


<?php $__env->startSection('title', __('main.header.link_5')); ?>
<?php $__env->startSection('description-seo', $metatag->description ?? getItem('client')); ?>

<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/visao.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main>
        <div class="content">
            <div class="visao">
                <div class="title-default animate" data-animate="fade">
                    <h1>
                        <?php echo __('visao.title1'); ?>

                    </h1>

                    <h2>
                        <?php echo __('visao.subtitle1'); ?>

                    </h2>
                </div>

                <div class="conteudo">
                    <div class="area-top">
                        <p class="animate" data-animate="top">
                            <?php echo __('visao.text1'); ?>

                        </p>

                        <div class="coluna-texto">
                            <p class="mid animate" data-animate="left">
                                <?php echo __('visao.text2'); ?>

                            </p>

                            <p class="animate" data-animate="left">
                                <?php echo __('visao.text3'); ?>

                            </p>

                            <div class="area-link animate" data-animate="top">
                                <a href="#visao" class="link" id="btn-visao">
                                    <span>
                                        <?php echo __('visao.link'); ?>

                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                                    </span>

                                    <?php echo __('visao.sublink'); ?>

                                </a>
                            </div>
                        </div>

                        <div class="area-video animate" data-animate="bottom">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/WWEt1EOje68?si=iZuJBz9rAsMo_oG4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                    
                    <div id="visao">
                        <h3 class="animate" data-animate="fade">
                            <?php echo __('visao.title-text'); ?>

                        </h3>

                        <p class="animate" data-animate="left">
                            <?php echo __('visao.text4'); ?>

                        </p>

                        <p class="animate" data-animate="left">
                            <?php echo __('visao.text5'); ?>

                        </p>

                        <p class="animate" data-animate="left">
                            <?php echo __('visao.text6'); ?>

                        </p>

                        <p class="animate" data-animate="left">
                            <?php echo __('visao.text7'); ?>

                        </p>

                        <p class="animate" data-animate="left">
                            <?php echo __('visao.text8'); ?>

                        </p>

                        <p class="animate" data-animate="left">
                            <?php echo __('visao.text9'); ?>

                        </p>

                        <img src="<?php echo e(asset('img/home/visao.webp')); ?>" class="img-end animate" data-animate="top" alt="Visão" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php echo $__env->make('includes.saiba-mais', [
        'title' => __('visao.saiba.title'),
        'subtitle' => __('visao.saiba.subtitle'),
        'route' => __('visao.saiba.route'),
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->make('includes.lead', [
        'title' => __('leads.lead.title'),
        'subtitle' => __('leads.lead.subtitle'),
        'botao' => __('leads.lead.botao'),
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const btn = document.getElementById('btn-visao');
            const visao = document.getElementById('visao');

            function abrirVisao() {
                visao.classList.add('active');
            }

            btn.addEventListener('click', (e) => {
                if (visao.classList.contains('active')) {
                    return;
                }

                e.preventDefault();
                abrirVisao();
            });

            const params = new URLSearchParams(window.location.search);

            if (
                params.get('visao') === '1' ||
                window.location.hash === '#visao'
            ) {
                abrirVisao();
            }
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home2/logus670/public_html/novo/resources/views/pages/visao.blade.php ENDPATH**/ ?>