<footer>
    <div class="content">
        <div class="left">
            <div class="explorar animate" data-animate="left">
                <h4>
                    <?php echo e(__('main.footer.title')); ?>

                </h4>

                <ul>
                    <div class="colum1">
                        <li>
                            <a href="<?php echo e(route_lang('home')); ?>" class="<?php echo e(Route::is('home*') ? 'active' : ''); ?>">
                                <?php echo e(__('main.header.link_0')); ?>

                            </a>
                        </li>

                        <li>
                            <a href="<?php echo e(route_lang('quem-somos')); ?>" class="<?php echo e(Route::is('quem-somos*') ? 'active' : ''); ?>">
                                <?php echo e(__('main.header.link_1')); ?>

                            </a>
                        </li>

                        <li>
                            <a href="<?php echo e(route_lang('diferenciais')); ?>" class="<?php echo e(Route::is('diferenciais*') ? 'active' : ''); ?>">
                                <?php echo e(__('main.header.link_2')); ?>

                            </a>
                        </li>

                        <li>
                            <a href="<?php echo e(route_lang('atuacao')); ?>" class="<?php echo e(Route::is('atuacao*') ? 'active' : ''); ?>">
                                <?php echo e(__('main.header.link_3')); ?>

                            </a>
                        </li>

                        <li>
                            <a href="<?php echo e(route_lang('decisao')); ?>" class="<?php echo e(Route::is('decisao*') ? 'active' : ''); ?>">
                                <?php echo e(__('main.header.link_4')); ?>

                            </a>
                        </li>
                    </div>

                    <div class="colum2">
                        <li>
                            <a href="<?php echo e(route_lang('visao')); ?>" class="<?php echo e(Route::is('visao*') ? 'active' : ''); ?>">
                                <?php echo e(__('main.header.link_5')); ?>

                            </a>
                        </li>

                        <li>
                            <a href="<?php echo e(route_lang('time')); ?>" class="<?php echo e(Route::is('time*') ? 'active' : ''); ?>">
                                <?php echo e(__('main.header.link_6')); ?>

                            </a>
                        </li>

                        <li>
                            <a href="<?php echo e(route_lang('faq')); ?>" class="<?php echo e(Route::is('faq*') ? 'active' : ''); ?>">
                                <?php echo e(__('main.header.link_7')); ?>

                            </a>
                        </li>

                        <li>
                            <a href="<?php echo e(route_lang('contato')); ?>" class="<?php echo e(Route::is('contato*') ? 'active' : ''); ?>">
                                <?php echo e(__('main.header.link_8')); ?>

                            </a>
                        </li>
                    </div>
                </ul>
            </div>

            <div class="contato animate" data-animate="left">
                <h4>
                    <?php echo e(__('main.contato.title')); ?>

                </h4>

                <ul>
                    <li class="phone">
                        <a href="<?php echo e(getItem('link-phone1')); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M224.2 89C216.3 70.1 195.7 60.1 176.1 65.4L170.6 66.9C106 84.5 50.8 147.1 66.9 223.3C104 398.3 241.7 536 416.7 573.1C493 589.3 555.5 534 573.1 469.4L574.6 463.9C580 444.2 569.9 423.6 551.1 415.8L453.8 375.3C437.3 368.4 418.2 373.2 406.8 387.1L368.2 434.3C297.9 399.4 241.3 341 208.8 269.3L253 233.3C266.9 222 271.6 202.9 264.8 186.3L224.2 89z"/></svg>
                            <?php echo e(__('main.contato.phone_1')); ?>

                        </a>
                    </li>

                    <li>
                        <a href="mailto:<?php echo e(getItem('email-client')); ?>">
                            <svg class="email" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M112 128C85.5 128 64 149.5 64 176C64 191.1 71.1 205.3 83.2 214.4L291.2 370.4C308.3 383.2 331.7 383.2 348.8 370.4L556.8 214.4C568.9 205.3 576 191.1 576 176C576 149.5 554.5 128 528 128L112 128zM64 260L64 448C64 483.3 92.7 512 128 512L512 512C547.3 512 576 483.3 576 448L576 260L377.6 408.8C343.5 434.4 296.5 434.4 262.4 408.8L64 260z"/></svg>
                            <?php echo e(getItem('email-client')); ?>

                        </a>
                    </li>

                    <li>
                        <a href="<?php echo e(getItem('link-address')); ?>" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M128 252.6C128 148.4 214 64 320 64C426 64 512 148.4 512 252.6C512 371.9 391.8 514.9 341.6 569.4C329.8 582.2 310.1 582.2 298.3 569.4C248.1 514.9 127.9 371.9 127.9 252.6zM320 320C355.3 320 384 291.3 384 256C384 220.7 355.3 192 320 192C284.7 192 256 220.7 256 256C256 291.3 284.7 320 320 320z"/></svg>
                            <?php echo __('main.contato.endereco'); ?>

                        </a>
                    </li>
                </ul>
            </div>

            <div class="siga animate" data-animate="left">
                <h4>
                    <?php echo e(__('main.siga.title')); ?>

                </h4>

                <div class="redes">
                    <li class="instagram">
                        <a href="<?php echo e(getItem('link-instagram1')); ?>" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M320.3 205C256.8 204.8 205.2 256.2 205 319.7C204.8 383.2 256.2 434.8 319.7 435C383.2 435.2 434.8 383.8 435 320.3C435.2 256.8 383.8 205.2 320.3 205zM319.7 245.4C360.9 245.2 394.4 278.5 394.6 319.7C394.8 360.9 361.5 394.4 320.3 394.6C279.1 394.8 245.6 361.5 245.4 320.3C245.2 279.1 278.5 245.6 319.7 245.4zM413.1 200.3C413.1 185.5 425.1 173.5 439.9 173.5C454.7 173.5 466.7 185.5 466.7 200.3C466.7 215.1 454.7 227.1 439.9 227.1C425.1 227.1 413.1 215.1 413.1 200.3zM542.8 227.5C541.1 191.6 532.9 159.8 506.6 133.6C480.4 107.4 448.6 99.2 412.7 97.4C375.7 95.3 264.8 95.3 227.8 97.4C192 99.1 160.2 107.3 133.9 133.5C107.6 159.7 99.5 191.5 97.7 227.4C95.6 264.4 95.6 375.3 97.7 412.3C99.4 448.2 107.6 480 133.9 506.2C160.2 532.4 191.9 540.6 227.8 542.4C264.8 544.5 375.7 544.5 412.7 542.4C448.6 540.7 480.4 532.5 506.6 506.2C532.8 480 541 448.2 542.8 412.3C544.9 375.3 544.9 264.5 542.8 227.5zM495 452C487.2 471.6 472.1 486.7 452.4 494.6C422.9 506.3 352.9 503.6 320.3 503.6C287.7 503.6 217.6 506.2 188.2 494.6C168.6 486.8 153.5 471.7 145.6 452C133.9 422.5 136.6 352.5 136.6 319.9C136.6 287.3 134 217.2 145.6 187.8C153.4 168.2 168.5 153.1 188.2 145.2C217.7 133.5 287.7 136.2 320.3 136.2C352.9 136.2 423 133.6 452.4 145.2C472 153 487.1 168.1 495 187.8C506.7 217.3 504 287.3 504 319.9C504 352.5 506.7 422.6 495 452z"/></svg>
                        </a>
                    </li>

                    <li class="linkedin">
                        <a href="<?php echo e(getItem('linkedin')); ?>" target="_blank">
                            <svg class="linkedin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M196.3 512L103.4 512L103.4 212.9L196.3 212.9L196.3 512zM149.8 172.1C120.1 172.1 96 147.5 96 117.8C96 103.5 101.7 89.9 111.8 79.8C121.9 69.7 135.6 64 149.8 64C164 64 177.7 69.7 187.8 79.8C197.9 89.9 203.6 103.6 203.6 117.8C203.6 147.5 179.5 172.1 149.8 172.1zM543.9 512L451.2 512L451.2 366.4C451.2 331.7 450.5 287.2 402.9 287.2C354.6 287.2 347.2 324.9 347.2 363.9L347.2 512L254.4 512L254.4 212.9L343.5 212.9L343.5 253.7L344.8 253.7C357.2 230.2 387.5 205.4 432.7 205.4C526.7 205.4 544 267.3 544 347.7L544 512L543.9 512z"/></svg>
                        </a>
                    </li>
                </div>

                <a href="https://play.google.com/store/apps/details?id=com.logus.crm" class="store" target="_blank">
                    <img src="<?php echo e(asset('img/google-play.webp')); ?>" alt="Google Play">
                </a>

                <a href="https://apps.apple.com/us/app/logus-capital/id6761010977?l=pt-BR" class="store" target="_blank">
                    <img src="<?php echo e(asset('img/app-store.webp')); ?>" alt="App Store">
                </a>
            </div>
        </div>

        <div class="right">
            <a href="<?php echo e(route_lang('home')); ?>" class="logo">
                <img src="<?php echo e(asset('img/logus-capital.png')); ?>" class="animate" data-animate="top" alt="Logus Capital" width="300" height="auto">
            </a>
        </div>
    </div>
</footer>

<div class="by-engenho">
    <a href="https://www.engenhodeimagens.com.br/" target="_blank" rel="noopener noreferrer">
        <img src="<?php echo e(asset('img/by-engenho.webp')); ?>" alt="Engenho de Imagens" width="272" height="19">
    </a>
</div><?php /**PATH /home2/logus670/public_html/novo/resources/views/includes/footer.blade.php ENDPATH**/ ?>