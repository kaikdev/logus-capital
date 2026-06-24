<header id="header">
    <div class="content">
        <div class="left animate" data-animate="left">
            <a href="<?php echo e(route_lang('home')); ?>" class="logo">
                <img src="<?php echo e(asset('img/logus-capital.png')); ?>" alt="Logus Capital" width="250" height="73">
            </a>
        </div>

        <div class="right">
            <?php
                $path = request()->path();
                $path = preg_replace('/^(pt_br|en)/', '', $path);
            ?>

            

            <ul class="navigation-links">
                <div class="top-head">
                    <div class="left">
                        <a href="<?php echo e(url('pt_br' . $path)); ?>" title="Português">
                            PT
                        </a>
                        
                        <span>|</span>

                        <a href="<?php echo e(url('en' . $path)); ?>" title="English">
                            ENG
                        </a>
                    </div>

                    <div class="parceiros">
                        <a href="https://cliente.loguscapital.com/home" target="_blank">
                            <?php echo e(__('main.header.link_9')); ?>

                        </a>

                        <span>|</span>
                        
                        <a href="https://cliente.loguscapital.com/home" target="_blank">
                            <?php echo e(__('main.header.link_10')); ?>

                        </a>
                    </div>  
                </div>

                <div class="ul">  
                    <li class="animate" data-animate="top">
                        <a href="<?php echo e(route_lang('quem-somos')); ?>" class="<?php echo e(Route::is('quem-somos*') ? 'active' : ''); ?>">
                            <?php echo e(__('main.header.link_1')); ?>

                        </a>
                    </li>
                    
                    <li class="animate" data-animate="top">
                        <a href="<?php echo e(route_lang('diferenciais')); ?>" class="<?php echo e(Route::is('diferenciais*') ? 'active' : ''); ?>">
                            <?php echo e(__('main.header.link_2')); ?>

                        </a>
                    </li>

                    <li class="animate" data-animate="top">
                        <a href="<?php echo e(route_lang('atuacao')); ?>" class="<?php echo e(Route::is('atuacao*') ? 'active' : ''); ?>">
                            <?php echo e(__('main.header.link_3')); ?>

                        </a>
                    </li>
                    
                    <li class="animate" data-animate="bottom">
                        <a href="<?php echo e(route_lang('decisao')); ?>" class="<?php echo e(Route::is('decisao*') ? 'active' : ''); ?>">
                            <?php echo e(__('main.header.link_4')); ?>

                        </a>
                    </li>

                    <li class="animate" data-animate="bottom">
                        <a href="<?php echo e(route_lang('visao')); ?>" class="<?php echo e(Route::is('visao*') ? 'active' : ''); ?>">
                            <?php echo e(__('main.header.link_5')); ?>

                        </a>
                    </li>

                    <li class="animate" data-animate="bottom">
                        <a href="<?php echo e(route_lang('time')); ?>" class="<?php echo e(Route::is('time*') ? 'active' : ''); ?>">
                            <?php echo e(__('main.header.link_6')); ?>

                        </a>
                    </li>

                    <li class="animate" data-animate="bottom">
                        <a href="<?php echo e(route_lang('faq')); ?>" class="<?php echo e(Route::is('faq*') ? 'active' : ''); ?>">
                            <?php echo e(__('main.header.link_7')); ?>

                        </a>
                    </li>

                    <li class="animate" data-animate="bottom">
                        <a href="<?php echo e(route_lang('contato')); ?>" class="<?php echo e(Route::is('contato*') ? 'active' : ''); ?>">
                            <?php echo e(__('main.header.link_8')); ?>

                        </a>
                    </li>
                </div>
            </ul>

            <div class="btnMobile animate" data-animate="bottom">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header><?php /**PATH /home2/logus670/public_html/novo/resources/views/includes/header.blade.php ENDPATH**/ ?>