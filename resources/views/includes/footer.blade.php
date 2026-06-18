<footer>
    <div class="content">
        <div class="left">
            <div class="explorar animate" data-animate="left">
                <h4>
                    {{ __('main.footer.title') }}
                </h4>

                <ul>
                    <li>
                        <a href="{{ route_lang('home') }}" class="{{ Route::is('home*') ? 'active' : '' }}">
                            {{ __('main.header.link_0') }}
                        </a>
                    </li>

                    <li>
                        <a href="{{ route_lang('quem-somos') }}" class="{{ Route::is('quem-somos*') ? 'active' : '' }}">
                            {{ __('main.header.link_1') }}
                        </a>
                    </li>

                    <li>
                        <a href="{{ route_lang('diferenciais') }}" class="{{ Route::is('diferenciais*') ? 'active' : '' }}">
                            {{ __('main.header.link_2') }}
                        </a>
                    </li>

                    <li>
                        <a href="{{ route_lang('atuacao') }}" class="{{ Route::is('atuacao*') ? 'active' : '' }}">
                            {{ __('main.header.link_3') }}
                        </a>
                    </li>

                    <li>
                        <a href="{{ route_lang('decisao') }}" class="{{ Route::is('decisao*') ? 'active' : '' }}">
                            {{ __('main.header.link_4') }}
                        </a>
                    </li>

                    <li>
                        <a href="{{ route_lang('visao') }}" class="{{ Route::is('visao*') ? 'active' : '' }}">
                            {{ __('main.header.link_5') }}
                        </a>
                    </li>

                    <li>
                        <a href="{{ route_lang('time') }}" class="{{ Route::is('time*') ? 'active' : '' }}">
                            {{ __('main.header.link_6') }}
                        </a>
                    </li>

                    <li>
                        <a href="{{ route_lang('faq') }}" class="{{ Route::is('faq*') ? 'active' : '' }}">
                            {{ __('main.header.link_7') }}
                        </a>
                    </li>

                    <li>
                        <a href="{{ route_lang('contato') }}" class="{{ Route::is('contato*') ? 'active' : '' }}">
                            {{ __('main.header.link_8') }}
                        </a>
                    </li>
                    
                    {{--
                    <li>
                        <a href="#">
                            {{ __('main.header.link_9') }}
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            {{ __('main.header.link_10') }}
                        </a>
                    </li>
                    --}}
                </ul>
            </div>

            <div class="contato animate" data-animate="left">
                <h4>
                    {{ __('main.contato.title') }}
                </h4>

                <ul>
                    <li class="phone">
                        <a href="{{ getItem('link-phone1') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M224.2 89C216.3 70.1 195.7 60.1 176.1 65.4L170.6 66.9C106 84.5 50.8 147.1 66.9 223.3C104 398.3 241.7 536 416.7 573.1C493 589.3 555.5 534 573.1 469.4L574.6 463.9C580 444.2 569.9 423.6 551.1 415.8L453.8 375.3C437.3 368.4 418.2 373.2 406.8 387.1L368.2 434.3C297.9 399.4 241.3 341 208.8 269.3L253 233.3C266.9 222 271.6 202.9 264.8 186.3L224.2 89z"/></svg>
                            {{ __('main.contato.phone_1') }}
                        </a>
                    </li>

                    <li>
                        <a href="{{ getItem('link-whats1') }}" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg>
                            {{ __('main.contato.whats_1') }}
                        </a>
                    </li>

                    <li>
                        <a href="{{ getItem('link-address') }}" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M128 252.6C128 148.4 214 64 320 64C426 64 512 148.4 512 252.6C512 371.9 391.8 514.9 341.6 569.4C329.8 582.2 310.1 582.2 298.3 569.4C248.1 514.9 127.9 371.9 127.9 252.6zM320 320C355.3 320 384 291.3 384 256C384 220.7 355.3 192 320 192C284.7 192 256 220.7 256 256C256 291.3 284.7 320 320 320z"/></svg>
                            {!! __('main.contato.endereco') !!}
                        </a>
                    </li>
                </ul>
            </div>

            <div class="siga animate" data-animate="left">
                <h4>
                    {{ __('main.siga.title') }}
                </h4>

                <div class="redes">
                    <li class="instagram">
                        <a href="{{ getItem('link-instagram1') }}" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M320.3 205C256.8 204.8 205.2 256.2 205 319.7C204.8 383.2 256.2 434.8 319.7 435C383.2 435.2 434.8 383.8 435 320.3C435.2 256.8 383.8 205.2 320.3 205zM319.7 245.4C360.9 245.2 394.4 278.5 394.6 319.7C394.8 360.9 361.5 394.4 320.3 394.6C279.1 394.8 245.6 361.5 245.4 320.3C245.2 279.1 278.5 245.6 319.7 245.4zM413.1 200.3C413.1 185.5 425.1 173.5 439.9 173.5C454.7 173.5 466.7 185.5 466.7 200.3C466.7 215.1 454.7 227.1 439.9 227.1C425.1 227.1 413.1 215.1 413.1 200.3zM542.8 227.5C541.1 191.6 532.9 159.8 506.6 133.6C480.4 107.4 448.6 99.2 412.7 97.4C375.7 95.3 264.8 95.3 227.8 97.4C192 99.1 160.2 107.3 133.9 133.5C107.6 159.7 99.5 191.5 97.7 227.4C95.6 264.4 95.6 375.3 97.7 412.3C99.4 448.2 107.6 480 133.9 506.2C160.2 532.4 191.9 540.6 227.8 542.4C264.8 544.5 375.7 544.5 412.7 542.4C448.6 540.7 480.4 532.5 506.6 506.2C532.8 480 541 448.2 542.8 412.3C544.9 375.3 544.9 264.5 542.8 227.5zM495 452C487.2 471.6 472.1 486.7 452.4 494.6C422.9 506.3 352.9 503.6 320.3 503.6C287.7 503.6 217.6 506.2 188.2 494.6C168.6 486.8 153.5 471.7 145.6 452C133.9 422.5 136.6 352.5 136.6 319.9C136.6 287.3 134 217.2 145.6 187.8C153.4 168.2 168.5 153.1 188.2 145.2C217.7 133.5 287.7 136.2 320.3 136.2C352.9 136.2 423 133.6 452.4 145.2C472 153 487.1 168.1 495 187.8C506.7 217.3 504 287.3 504 319.9C504 352.5 506.7 422.6 495 452z"/></svg>
                        </a>
                    </li>

                    <li class="linkedin">
                        <a href="{{ getItem('linkedin') }}" target="_blank">
                            <svg class="linkedin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M196.3 512L103.4 512L103.4 212.9L196.3 212.9L196.3 512zM149.8 172.1C120.1 172.1 96 147.5 96 117.8C96 103.5 101.7 89.9 111.8 79.8C121.9 69.7 135.6 64 149.8 64C164 64 177.7 69.7 187.8 79.8C197.9 89.9 203.6 103.6 203.6 117.8C203.6 147.5 179.5 172.1 149.8 172.1zM543.9 512L451.2 512L451.2 366.4C451.2 331.7 450.5 287.2 402.9 287.2C354.6 287.2 347.2 324.9 347.2 363.9L347.2 512L254.4 512L254.4 212.9L343.5 212.9L343.5 253.7L344.8 253.7C357.2 230.2 387.5 205.4 432.7 205.4C526.7 205.4 544 267.3 544 347.7L544 512L543.9 512z"/></svg>
                        </a>
                    </li>
                </div>

                <a href="#" class="store" target="_blank">
                    <img src="{{ asset('img/google-play.webp') }}" alt="Google Play">
                </a>

                <a href="#" class="store" target="_blank">
                    <img src="{{ asset('img/app-store.webp') }}" alt="App Store">
                </a>
            </div>
        </div>

        <div class="right">
            <a href="{{ route_lang('home') }}" class="logo">
                <img src="{{ asset('img/logus-capital.png') }}" class="animate" data-animate="top" alt="Logus Capital" width="300" height="auto">
            </a>
        </div>
    </div>
</footer>

<div class="by-engenho">
    <a href="https://www.engenhodeimagens.com.br/" target="_blank" rel="noopener noreferrer">
        <img src="{{ asset('img/by-engenho.webp') }}" alt="Engenho de Imagens" width="272" height="19">
    </a>
</div>