<?php $__env->startSection('title', __('main.footer.link_1')); ?>
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
            </div>
        </div>
    </section>

    <!-- 
    <?php echo $__env->make('includes.lead', [
        'title' => __('leads.lead.title'),
        'subtitle' => __('leads.lead.subtitle'),
        'botao' => __('leads.lead.botao'),
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>

    <script defer>
        document.addEventListener("DOMContentLoaded", function () {

            const swiper = new Swiper(".banner .swiper", {
                loop: true,
                rewind: true,
                effect: "slide",
                autoplay: {
                    delay: 5000,
                },
                speed: 1500,
            });
        });

        document.addEventListener('DOMContentLoaded', () => {
            const title = document.querySelector('.title-banner-swipper');

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