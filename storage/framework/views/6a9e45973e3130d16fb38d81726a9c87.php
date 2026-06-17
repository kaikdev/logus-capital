<?php $__env->startSection('title', __('contato.title')); ?>
<?php $__env->startSection('description-seo', !empty($metatag) ? $metatag->descricao : getItem('client')); ?>

<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('css/contato.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="banner">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php echo e(asset('img/contato/banner-1.webp')); ?>" alt="Banner">

                    <h1 class="title-banner-swipper">
                        <?php echo __('contato.banner'); ?>

                    </h1>
                </div>
            </div>
        </div>
    </section>

    <main class="contato">
        <div class="content">
            <div class="left">
                <h1 class="animate" data-animate="top">
                    <?php echo e(__('contato.title')); ?>

                </h1>

                <p class="animate" data-animate="left">
                    <?php echo e(__('contato.text')); ?>

                </p>

                <form class="form-contato" action="<?php echo e(route('contato.enviar')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    
                    
                    <input type="text" name="website" value="" style="display:none">
                    
                    
                    <input type="hidden" name="form_time" value="<?php echo e(now()->timestamp); ?>">
    
                    <input class="animate" data-animate="left" type="text" placeholder="<?php echo e(__('contato.label_1')); ?>" name="name" required>
                    
                    <div class="grid-input">
                        <input class="animate" data-animate="top" type="text" placeholder="<?php echo e(__('contato.label_2')); ?>" name="phone" oninput="this.value = formatPhone(this.value)" maxlength="15" required>

                        <input class="animate" data-animate="left" type="email" placeholder="<?php echo e(__('contato.label_3')); ?>" name="email" required>
                    </div>

                    <textarea class="animate" data-animate="top" type="text" rows="10" placeholder="<?php echo e(__('contato.label_4')); ?>" name="message" required></textarea>

                    <button class="animate" data-animate="bottom" type="submit">
                        <?php echo e(__('contato.label_5')); ?>

                    </button>
                </form>
            </div>
        </div>

        <h3 class="text-decoration">
            <?php echo e(__('contato.subtitle')); ?>

        </h3>
    </main>

    <?php echo $__env->make('includes.lead', [
        'title' => __('leads.lead.title'),
        'subtitle' => __('leads.lead.subtitle'),
        'botao' => __('leads.lead.botao'),
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    
    <?php echo $__env->make('includes.saiba-mais', [
        'title' => __('contato.saiba.title'),
        'subtitle' => __('contato.saiba.subtitle'),
        'route' => 'empresa'
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        const swiper = new Swiper(".banner .swiper", {
            loop: true,
            rewind: true,
            effect: "slide",
            autoplay: {
                delay: 4000,
            },
            speed: 2000,
        });


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
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\kaikg\Downloads\logus-capital\resources\views/pages/contato.blade.php ENDPATH**/ ?>