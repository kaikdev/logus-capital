<?php $__env->startSection('title', __('main.header.link_0')); ?>
<?php $__env->startSection('description-seo', $metatag->description ?? getItem('client')); ?>

<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="banner">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <video src="<?php echo e(asset('video/video-home.mp4')); ?>" autoplay muted loop></video>

                    <h1 class="title-banner-swipper">
                        <?php echo __('home.banner'); ?>

                    </h1>
                </div>

                <div class="swiper-slide">
                    <video src="<?php echo e(asset('video/video-home.mp4')); ?>" autoplay muted loop></video>

                    <h1 class="title-banner-swipper">
                        <?php echo __('home.banner2'); ?>

                    </h1>
                </div>
            </div>
        </div>
    </section>

    <main>
        <div class="content">
            <div class="proposito">
                <div class="title-default animate" data-animate="fade">
                    <h1>
                        <?php echo __('home.title1'); ?>

                    </h1>

                    <h2>
                        <?php echo __('home.subtitle1'); ?>

                    </h2>
                </div>

                <div class="conteudo animate" data-animate="left">
                    <div class="left">
                        <p>
                            <?php echo __('home.text1'); ?>

                        </p>

                        <p>
                            <?php echo __('home.text2'); ?>

                        </p>

                        <a href="<?php echo e(route_lang('quem-somos')); ?>" class="link">
                            <?php echo __('home.link1'); ?>

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                        </a>
                    </div>

                    <video autoplay muted loop playsinline>
                        <source src="<?php echo e(asset('video/home-quem-somos.mp4')); ?>" type="video/mp4">
                        Seu navegador não suporta vídeo HTML5.
                    </video>
                </div>
            </div>

            <div class="diferenciais">
                <div class="title-default animate" data-animate="fade">
                    <h1>
                        <?php echo __('home.title2'); ?>

                    </h1>

                    <h2>
                        <?php echo __('home.subtitle2'); ?>

                    </h2>
                </div>

                <div class="conteudo animate" data-animate="fade">
                    <div class="top">
                        <a href="<?php echo e(route_lang('diferenciais')); ?>" class="item">
                            <img src="<?php echo e(asset('img/home/diferenciais-1-ajuste.png')); ?>" alt="Imagem Diferenciais">

                            <p>
                                <?php echo __('home.diferenciais1'); ?>

                            </p>
                        </a>

                        <a href="<?php echo e(route_lang('diferenciais')); ?>" class="item">
                            <img src="<?php echo e(asset('img/home/diferenciais-2-ajuste.png')); ?>" alt="Imagem Diferenciais">

                            <p>
                                <?php echo __('home.diferenciais2'); ?>

                            </p>
                        </a>
                    </div>

                    <div class="bottom">
                        <a href="<?php echo e(route_lang('diferenciais')); ?>" class="item">
                            <img src="<?php echo e(asset('img/home/diferenciais-3-ajuste.png')); ?>" alt="Imagem Diferenciais">

                            <p>
                                <?php echo __('home.diferenciais3'); ?>

                            </p>
                        </a>

                        <a href="<?php echo e(route_lang('diferenciais')); ?>" class="item">
                            <img src="<?php echo e(asset('img/home/diferenciais-4-ajuste.png')); ?>" alt="Imagem Diferenciais">

                            <p>
                                <?php echo __('home.diferenciais4'); ?>

                            </p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="atuacao">
                <div class="title-default animate" data-animate="fade">
                    <h1>
                        <?php echo __('home.title3'); ?>

                    </h1>

                    <h2>
                        <?php echo __('home.subtitle3'); ?>

                    </h2>
                </div>

                <div class="conteudo animate" data-animate="left">
                    <p>
                        <?php echo __('home.text3'); ?>

                    </p>

                    <p>
                        <?php echo __('home.text4'); ?>

                    </p>

                    <a href="<?php echo e(route_lang('atuacao')); ?>" class="link">
                        <?php echo __('home.link2'); ?>

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                    </a>
                </div>
            </div>

            <div class="decisoes">
                <div class="title-default animate" data-animate="fade">
                    <h1>
                        <?php echo __('home.title4'); ?>

                    </h1>

                    <h2>
                        <?php echo __('home.subtitle4'); ?>

                    </h2>
                </div>

                <div class="conteudo animate" data-animate="top">
                    <div class="left">
                        <p>
                            <?php echo __('home.text5'); ?>

                        </p>

                        <a href="<?php echo e(route_lang('decisao')); ?>" class="link">
                            <?php echo __('home.link3'); ?>

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                        </a>
                    </div>

                    <img src="<?php echo e(asset('img/home/decisoes.webp')); ?>" alt="Decisões" loading="lazy">
                </div>
            </div>

            <div class="visao">
                <div class="title-default animate" data-animate="fade">
                    <h1>
                        <?php echo __('home.title5'); ?>

                    </h1>

                    <h2>
                        <?php echo __('home.subtitle5'); ?>

                    </h2>
                </div>

                <div class="conteudo animate" data-animate="top">
                    <img src="<?php echo e(asset('img/home/visao.webp')); ?>" alt="Visão" loading="lazy">

                    <p>
                        <?php echo __('home.text6'); ?>

                    </p>

                    <p>
                        <?php echo __('home.text7'); ?>

                    </p>

                    <p>
                        <?php echo __('home.text8'); ?>

                    </p>

                    <a href="<?php echo e(route_lang('visao')); ?>?visao=1">
                        <span>
                            <?php echo __('home.link4'); ?>

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                        </span>

                        <?php echo __('home.sublink4'); ?>

                    </a>
                </div>
            </div>
        </div>
    </main>

    <?php echo $__env->make('includes.lead', [
        'title' => __('leads.lead.title'),
        'subtitle' => __('leads.lead.subtitle'),
        'botao' => __('leads.lead.botao'),
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {

            const swiper = new Swiper(".banner .swiper", {
                loop: true,
                rewind: true,
                effect: "fade",
                autoplay: {
                    delay: 5000,
                },
                speed: 1500,
            });
        });

        document.addEventListener('DOMContentLoaded', () => {
            console.log('DOM carregado');

            const title = document.querySelector('.title-banner-swipper');

            console.log(title);

            if (!title) return;

            const html = title.innerHTML;
            const parts = html.split(/(<br\s*\/?>)/i);

            let delay = 0;

            title.innerHTML = parts.map(part => {
                if (part.match(/<br\s*\/?>/i)) {
                    return part;
                }

                return part
                    .trim()
                    .split(/\s+/)
                    .map(word => {
                        const span = `<span class="word" style="animation-delay:${delay}s">${word}</span>`;
                        delay += 0.15;
                        return span;
                    })
                    .join(' ');
            }).join('');
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\kaikg\Downloads\logus-capital\resources\views/pages/index.blade.php ENDPATH**/ ?>