<!--
<footer>
    <div class="content">
        <div class="left">
            <div class="sobre animate" data-animate="top">
                <h4>
                    <?php echo e(__('main.sobre.title')); ?>

                </h4>

                <p>
                    <a href="<?php echo e(route_lang('empresa')); ?>">
                        <?php echo e(__('main.sobre.text')); ?>

                    </a>
                </p>
            </div>

            <div class="explorar animate" data-animate="left">
                <h4>
                    <?php echo e(__('main.footer.title')); ?>

                </h4>

                <ul>
                    <li>
                        <a href="<?php echo e(route_lang('home')); ?>" class="<?php echo e(Route::is('home*') ? 'active' : ''); ?>">
                            <?php echo e(__('main.footer.link_1')); ?>

                        </a>
                    </li>

                    <li>
                        <a href="<?php echo e(route_lang('empresa')); ?>" class="<?php echo e(Route::is('empresa*') ? 'active' : ''); ?>">
                            <?php echo e(__('main.footer.link_2')); ?>

                        </a>
                    </li>

                    <li>
                        <a href="<?php echo e(route_lang('produtos.tp-056e')); ?>" class="<?php echo e(Route::is('produtos.tp-056e') ? 'active' : ''); ?>">
                            <?php echo e(__('main.footer.link_3')); ?>

                        </a>
                    </li>

                    <li>
                        <a href="<?php echo e(route_lang('areas-de-atuacao')); ?>" class="<?php echo e(Route::is('areas-de-atuacao*') ? 'active' : ''); ?>">
                            <?php echo e(__('main.footer.link_4')); ?>

                        </a>
                    </li>
                    
                    
                    
                    <li>
                        <a href="<?php echo e(route_lang('contato')); ?>" class="<?php echo e(Route::is('contato*') ? 'active' : ''); ?>">
                            <?php echo e(__('main.footer.link_5')); ?>

                        </a>
                    </li>
                </ul>
            </div>

            <div class="contato animate" data-animate="right">
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
                    
                    <li class="phone">
                        <a href="<?php echo e(getItem('link-phone2')); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M224.2 89C216.3 70.1 195.7 60.1 176.1 65.4L170.6 66.9C106 84.5 50.8 147.1 66.9 223.3C104 398.3 241.7 536 416.7 573.1C493 589.3 555.5 534 573.1 469.4L574.6 463.9C580 444.2 569.9 423.6 551.1 415.8L453.8 375.3C437.3 368.4 418.2 373.2 406.8 387.1L368.2 434.3C297.9 399.4 241.3 341 208.8 269.3L253 233.3C266.9 222 271.6 202.9 264.8 186.3L224.2 89z"/></svg>
                            <?php echo e(__('main.contato.phone_2')); ?>

                        </a>
                    </li>

                    <li>
                        <a href="<?php echo e(getItem('link-whats1')); ?>" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg>
                            <?php echo e(__('main.contato.whats_1')); ?>

                        </a>
                    </li>

                    <li>
                        <a href="<?php echo e(getItem('link-address')); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M128 252.6C128 148.4 214 64 320 64C426 64 512 148.4 512 252.6C512 371.9 391.8 514.9 341.6 569.4C329.8 582.2 310.1 582.2 298.3 569.4C248.1 514.9 127.9 371.9 127.9 252.6zM320 320C355.3 320 384 291.3 384 256C384 220.7 355.3 192 320 192C284.7 192 256 220.7 256 256C256 291.3 284.7 320 320 320z"/></svg>
                            <?php echo __('main.contato.endereco'); ?>

                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="right">
            <a href="<?php echo e(route_lang('home')); ?>" class="logo">
                <img src="<?php echo e(asset('img/logo-global-silver.webp')); ?>" class="animate" data-animate="top" alt="Logo Global Silver" width="100%" height="auto">
            </a>
        </div>
    </div>
</footer>

<div class="by-engenho">
    <a href="https://www.engenhodeimagens.com.br/" target="_blank" rel="noopener noreferrer">
        <img src="<?php echo e(asset('img/by-engenho.webp')); ?>" alt="Engenho de Imagens" width="272" height="19">
    </a>
</div>
--><?php /**PATH C:\Users\kaikg\Downloads\logus-capital\resources\views/includes/footer.blade.php ENDPATH**/ ?>