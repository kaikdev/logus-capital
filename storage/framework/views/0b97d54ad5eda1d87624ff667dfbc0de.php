


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
                                <a href="#" class="open-modal"
                                data-title="<?php echo e(__('atuacao.word1')); ?>"
                                data-text1="<?php echo e(__('atuacao.textw1')); ?>">
                                    <?php echo __('atuacao.word1'); ?>

                                </a>
                            </p>

                            <p class="animate" data-animate="right">
                                <a href="#" class="open-modal"
                                data-title="<?php echo e(__('atuacao.word3')); ?>"
                                data-text1="<?php echo e(__('atuacao.textw3')); ?>">
                                    <?php echo __('atuacao.word3'); ?>

                                </a>
                            </p>

                            <p class="animate" data-animate="bottom">
                                <a href="#" class="open-modal"
                                data-title="<?php echo e(__('atuacao.word5-2')); ?>"
                                data-text1="<?php echo e(__('atuacao.textw5')); ?>">
                                    <?php echo __('atuacao.word5'); ?>

                                </a>
                            </p>
                        </div>

                        <div class="area-img animate" data-animate="fade">
                            <img src="<?php echo e(asset('img/icone-logus-capital.webp')); ?>" alt="Logus Capital" width="150" height="auto">
                        </div>

                        <div class="right">
                            <p class="animate" data-animate="bottom">
                                <a href="#" class="open-modal"
                                data-title="<?php echo e(__('atuacao.word2')); ?>"
                                data-text1="<?php echo e(__('atuacao.textw2')); ?>">
                                    <?php echo __('atuacao.word2'); ?>

                                </a>
                            </p>

                            <p class="animate" data-animate="left">
                                <a href="#" class="open-modal"
                                data-title="<?php echo e(__('atuacao.word4-2')); ?>"
                                data-text1="<?php echo e(__('atuacao.textw4')); ?>">
                                    <?php echo __('atuacao.word4'); ?>

                                </a>
                            </p>

                            <p class="animate" data-animate="top">
                                <a href="#" class="open-modal"
                                data-title="<?php echo e(__('atuacao.word6-2')); ?>"
                                data-text1="<?php echo e(__('atuacao.textw6')); ?>">
                                    <?php echo __('atuacao.word6'); ?>

                                </a>
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

    <div class="modal-overlay" id="modal">
        <div class="modal-content">
            <button class="close-modal" id="closeModal">
                ×
            </button>

            <h2 id="modalTitle"></h2>
            <p id="modalText1"></p>
        </div>
    </div>

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

<?php $__env->startSection('scripts'); ?>
    <script>
        const modal = document.getElementById('modal');
        const closeModal = document.getElementById('closeModal');

        const modalTitle = document.getElementById('modalTitle');
        const modalText1 = document.getElementById('modalText1');

        const items = document.querySelectorAll('.open-modal');

        function openModal(item) {
            const title = item.getAttribute('data-title');
            const text1 = item.getAttribute('data-text1');

            modalTitle.textContent = title;
            modalText1.textContent = text1;

            modal.classList.add('active');
        }

        function close() {
            modal.classList.remove('active');
        }

        closeModal.addEventListener('click', close);

        modal.addEventListener('click', (e) => {
            if (e.target === modal) close();
        });

        function setupEvents() {
            const isDesktop = window.matchMedia('(min-width: 1000px)').matches;

            items.forEach(item => {
                item.onmouseenter = null;
                item.onmouseleave = null;
                item.onclick = null;

                if (isDesktop) {
                    item.addEventListener('mouseenter', () => openModal(item));
                } 
                else {
                    item.addEventListener('click', (e) => {
                        e.preventDefault();
                        openModal(item);
                    });
                }
            });
        }

        window.addEventListener('DOMContentLoaded', setupEvents);
        window.addEventListener('resize', setupEvents);
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home2/logus670/public_html/novo/resources/views/pages/atuacao.blade.php ENDPATH**/ ?>