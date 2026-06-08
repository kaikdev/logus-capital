<div class="scroll-text animate" data-animate="top">
    <div class="scroll-content" >
        <span><?php echo e(__('main.scroll_text.palavra_1')); ?></span>
        <span><?php echo e(__('main.scroll_text.palavra_2')); ?></span>
        <span><?php echo e(__('main.scroll_text.palavra_3')); ?></span>
        <span><?php echo e(__('main.scroll_text.palavra_4')); ?></span>

        <span><?php echo e(__('main.scroll_text.palavra_1')); ?></span>
        <span><?php echo e(__('main.scroll_text.palavra_2')); ?></span>
        <span><?php echo e(__('main.scroll_text.palavra_3')); ?></span>
        <span><?php echo e(__('main.scroll_text.palavra_4')); ?></span>
    </div>
</div>

<header id="header">
    <div class="content">
        <div class="left animate" data-animate="left">
            <a href="<?php echo e(route_lang('home')); ?>" class="logo">
                <img src="<?php echo e(asset('img/logo-global-silver.webp')); ?>" alt="Logo Global Silver" width="252" height="90">
            </a>
        </div>

        <div class="right">
            <ul class="navigation-links">
                <?php
                    $path = request()->path();
                    $path = preg_replace('/^(pt_BR|en|es)/', '', $path);
                ?>

                <div class="area-idiomas mobile">
                    <a href="<?php echo e(url('pt_BR' . $path)); ?>" title="Português">
                        <img src="<?php echo e(asset('img/flag-br.webp')); ?>" alt="Português" width="30" height="20">
                    </a>

                    <a href="<?php echo e(url('en' . $path)); ?>" title="English">
                        <img src="<?php echo e(asset('img/flag-eua.webp')); ?>" alt="English" width="30" height="20">
                    </a>

                    <a href="<?php echo e(url('es' . $path)); ?>" title="Español">
                        <img src="<?php echo e(asset('img/flag-esp.webp')); ?>" alt="Español" width="30" height="20">
                    </a>
                </div>

                <li class="animate" data-animate="top">
                    <a href="<?php echo e(route_lang('empresa')); ?>" class="<?php echo e(Route::is('empresa*') ? 'active' : ''); ?>">
                        <?php echo e(__('main.header.link_1')); ?>

                    </a>
                </li>

                <li class="produtos animate" data-animate="top">
                    <a href="#" class="<?php echo e(Route::is('produtos*') ? 'active' : ''); ?>">
                        <?php echo e(__('main.header.link_2')); ?>

                    </a>

                    <div class="drop">
                            <a href="<?php echo e(route_lang('produtos.tp-056e')); ?>" class="<?php echo e(Route::is('produtos.tp-056e') ? 'active' : ''); ?>">
                                TP-056E
                            </a>    
                            <a href="<?php echo e(route_lang('produtos.ad-035')); ?>" class="<?php echo e(Route::is('produtos.ad-035') ? 'active' : ''); ?>">
                                AD-035
                            </a>    
                    </div>
                </li>

                <li class="animate" data-animate="top">
                    <a href="<?php echo e(route_lang('areas-de-atuacao')); ?>" class="<?php echo e(Route::is('areas-de-atuacao*') ? 'active' : ''); ?>">
                        <?php echo e(__('main.header.link_3')); ?>

                    </a>
                </li>
                
                <li class="animate" data-animate="bottom">
                    <a href="<?php echo e(route_lang('contato')); ?>" class="<?php echo e(Route::is('contato*') ? 'active' : ''); ?>">
                        <?php echo e(__('main.header.link_4')); ?>

                    </a>
                </li>
            </ul>

            <div class="btnMobile animate" data-animate="bottom">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="area-idiomas desktop">
            <a href="<?php echo e(url('pt_BR' . $path)); ?>" title="Português">
                <img src="<?php echo e(asset('img/flag-br.webp')); ?>" alt="Português" width="30" height="20">
            </a>

            <a href="<?php echo e(url('en' . $path)); ?>" title="English">
                <img src="<?php echo e(asset('img/flag-eua.webp')); ?>" alt="English" width="30" height="20">
            </a>

            <a href="<?php echo e(url('es' . $path)); ?>" title="Español">
                <img src="<?php echo e(asset('img/flag-esp.webp')); ?>" alt="Español" width="30" height="20">
            </a>
        </div>
    </div>
</header>

<script>
    const menu = document.getElementById('header');
    const offset = menu.offsetTop;

    window.addEventListener('scroll', () => {
        if (window.scrollY >= offset) {
            menu.classList.add('fixed');
        } else {
            menu.classList.remove('fixed');
        }
    });

    const menuProduto = document.querySelector('.produtos');
    const linkProduto = menuProduto.querySelector('a');

    linkProduto.addEventListener('click', function(e){
        e.preventDefault();
        menuProduto.classList.toggle('open');
    });

    document.addEventListener('click', function(e){
        if(!menuProduto.contains(e.target)){
            menuProduto.classList.remove('open');
        }
    });
</script><?php /**PATH C:\Users\kaikg\Downloads\logus-capital\resources\views/includes/header.blade.php ENDPATH**/ ?>