<?php $__env->startSection('title', __('lgpd.title')); ?>
<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/LGPD/style.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="page-terms">
        <div class="content">
            <div class="top-info">
                <h1><?php echo e(__('lgpd.title')); ?></h1>

                <h3>
                    <?php echo e(__('lgpd.updated')); ?> 
                    <span>18/06/2026</span>
                </h3>
            </div>

            <ul class="menu">
                <a href="#section_1" class="section_1"><?php echo e(__('lgpd.menu.privacidade')); ?></a>
                <a href="#section_2" class="section_2"><?php echo e(__('lgpd.menu.termos')); ?></a>
                <a href="#section_3" class="section_3"><?php echo e(__('lgpd.menu.cookies')); ?></a>
                <a href="#section_4" class="section_4"><?php echo e(__('lgpd.menu.cancelar')); ?></a>
            </ul>

            <main>
                <div class="content">
                    <div class="wrapper">

                        
                        <article id="section_1">
                            <?php echo __('lgpd.section_1', [
                                'client' => getItem('client'),
                                'link' => getItem('link-whats1')
                            ]); ?>

                        </article>

                        
                        <article id="section_2">
                            <?php echo __('lgpd.section_2', [
                                'client' => getItem('client')
                            ]); ?>

                        </article>

                        
                        <article id="section_3">
                            <?php echo __('lgpd.section_3', [
                                'client' => getItem('client')
                            ]); ?>

                        </article>

                        
                        <article id="section_4">
                            <h1><?php echo e(__('lgpd.section_4.title')); ?></h1>
                            <p><?php echo e(__('lgpd.section_4.subtitle')); ?></p>

                            <form action="<?php echo e(route('lgpd.destroy')); ?>" method="POST">
                                <?php echo csrf_field(); ?>

                                <div class="col-2">
                                    <div class="group-input">
                                        <label for="nome-terms">
                                            <?php echo e(__('lgpd.section_4.labels.nome')); ?>

                                        </label>
                                        <input id="nome-terms" type="text" name="nome" value="<?php echo e(old('nome')); ?>">
                                    </div>
                                </div>

                                <div class="group-input">
                                    <label for="email-terms">
                                        <?php echo e(__('lgpd.section_4.labels.email')); ?>

                                    </label>
                                    <input id="email-terms" type="email" name="email" value="<?php echo e(old('email')); ?>" required>
                                </div>

                                <div class="group-input">
                                    <label for="telephone-terms">
                                        <?php echo e(__('lgpd.section_4.labels.telefone')); ?>

                                    </label>
                                    <input class="input-whatsapp"
                                        id="telephone-terms"
                                        type="text"
                                        name="telephone"
                                        maxlength="15"
                                        oninput="this.value = formatPhone(this.value)"
                                        value="<?php echo e(old('telephone')); ?>"
                                        required>
                                </div>

                                <input type="hidden" name="form_type" value="whatsapp">

                                <div class="group-button">
                                    <button type="submit">
                                        <?php echo e(__('lgpd.section_4.button')); ?>

                                    </button>
                                </div>
                            </form>
                        </article>

                    </div>
                </div>
            </main>
        </div>
    
        <div class="backToTop">
            <p>
                <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m11.998 21.995c5.517 0 9.997-4.48 9.997-9.997 0-5.518-4.48-9.998-9.997-9.998-5.518 0-9.998 4.48-9.998 9.998 0 5.517 4.48 9.997 9.998 9.997zm0-1.5c-4.69 0-8.498-3.807-8.498-8.497s3.808-8.498 8.498-8.498 8.497 3.808 8.497 8.498-3.807 8.497-8.497 8.497zm4.845-6.711c.108.141.157.3.157.456 0 .389-.306.755-.749.755h-8.501c-.445 0-.75-.367-.75-.755 0-.157.05-.316.159-.457 1.203-1.554 3.252-4.199 4.258-5.498.142-.184.36-.29.592-.29.23 0 .449.107.591.291zm-7.564-.289h5.446l-2.718-3.522z" fill-rule="nonzero"/></svg>
                <span>TOPO</span>
            </p>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        const sections = document.querySelectorAll('article');
        const menuLinks = document.querySelectorAll('section.page-terms .menu a');
        let isScrolling = false;

        function updateActiveSection() {
            if (isScrolling) return;

            let currentSection = sections[0]; // SEMPRE começa pelo primeiro

            sections.forEach(section => {
                if (window.scrollY >= section.offsetTop - 150) {
                    currentSection = section;
                }
            });

            sections.forEach(section => section.classList.remove('active'));
            menuLinks.forEach(link => link.classList.remove('active'));

            currentSection.classList.add('active');

            const activeLink = document.querySelector(
                `section.page-terms .menu a.${currentSection.id}`
            );

            if (activeLink) {
                activeLink.classList.add('active');
            }
        }

        document.addEventListener('scroll', updateActiveSection);

        menuLinks.forEach(link => {
            link.addEventListener('click', e => {
                e.preventDefault();

                const targetId = link.getAttribute('href').replace('#', '');
                const targetSection = document.getElementById(targetId);

                if (!targetSection) return;

                isScrolling = true;

                targetSection.scrollIntoView({ behavior: 'smooth' });

                sections.forEach(section => section.classList.remove('active'));
                menuLinks.forEach(l => l.classList.remove('active'));

                targetSection.classList.add('active');
                link.classList.add('active');

                setTimeout(() => {
                    isScrolling = false;
                }, 600);
            });
        });
        
        window.addEventListener('load', updateActiveSection);
    </script>

    <script>
        const btn_scroll_top = document.querySelector('.backToTop');
        const top_section = document.querySelector('section.page-terms');
        
        btn_scroll_top.addEventListener('click', function(){
            top_section.scrollIntoView({ behavior: 'smooth' });
        })
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home2/logus670/public_html/novo/resources/views/LGPD/termos.blade.php ENDPATH**/ ?>