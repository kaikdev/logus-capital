<?php $__env->startSection('title', __('main.header.link_8')); ?>
<?php $__env->startSection('description-seo', $metatag->description ?? getItem('client')); ?>

<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/contato.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main>
        <div class="content">
            <div class="contato">
                <div class="title-default">
                    <h1>
                        <?php echo __('contato.title1'); ?>

                    </h1>

                    <h2>
                        <?php echo __('contato.subtitle1'); ?>

                    </h2>
                </div>

                <div class="conteudo">
                    <div class="left">
                        <form class="form-contato" action="<?php echo e(route('contato.enviar')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            
                            
                            <input type="text" name="website" value="" style="display:none">
                            
                            
                            <input type="hidden" name="form_time" value="<?php echo e(now()->timestamp); ?>">

                            <div class="item-input">
                                <label for="name">
                                    <?php echo e(__('contato.label_1')); ?>

                                </label>

                                <input class="animate" data-animate="left" type="text" id="name" name="name" required>
                            </div>
                            
                            <div class="item-input">
                                <label for="phone">
                                    <?php echo e(__('contato.label_2')); ?>

                                </label>

                                <input class="animate" data-animate="top" type="text" id="phone" name="phone" oninput="this.value = formatPhone(this.value)" maxlength="15" required>
                            </div>

                            <div class="item-input">
                                <label for="email">
                                    <?php echo e(__('contato.label_3')); ?>

                                </label>

                                <input class="animate" data-animate="left" type="email" id="email" name="email" required>
                            </div>

                            <div class="item-input">
                                <label for="message">
                                    <?php echo e(__('contato.label_4')); ?>

                                </label>

                                <textarea class="animate" data-animate="top" type="text" rows="5" id="message" name="message" required></textarea>
                            </div>

                            <div class="area-termos">
                                <input id="termos" name="checkbox" type="checkbox" required>

                                <label for="termos"><?php echo e(__('leads.lead.inicio_termos')); ?> <a href="<?php echo e(route_lang('termos')); ?>"><?php echo e(__('leads.lead.termos_1')); ?></a> <?php echo e(__('leads.lead.meio_termos')); ?> <a href="<?php echo e(route_lang('termos')); ?>"><?php echo e(__('leads.lead.termos_2')); ?></a> <?php echo e(__('leads.lead.final_termos')); ?></label>
                            </div>

                            <button class="btn-default animate" data-animate="bottom" type="submit">
                                <?php echo e(__('contato.botao')); ?>

                            </button>
                        </form>
                    </div>

                    <div class="right">
                        <div class="area-img">
                            <img src="<?php echo e(asset('img/contato/contato-1.webp')); ?>" alt="Imagem contato">
                        </div>

                        <div class="area-img">
                            <img src="<?php echo e(asset('img/contato/contato-2.webp')); ?>" alt="Imagem contato">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php echo $__env->make('includes.saiba-mais', [
        'title' => __('contato.saiba.title'),
        'subtitle' => __('contato.saiba.subtitle'),
        'route' => __('contato.saiba.route'),
    ], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
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
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\kaikg\Downloads\logus-capital\resources\views/pages/contato.blade.php ENDPATH**/ ?>