<header id="header">
    <div class="content">
        <div class="left animate" data-animate="left">
            <a href="{{ route_lang('home') }}" class="logo">
                <img src="{{ asset('img/logus-capital.png') }}" alt="Logus Capital" width="250" height="73">
            </a>
        </div>

        <div class="right">
            @php
                $path = request()->path();
                $path = preg_replace('/^(pt_br|en)/', '', $path);
            @endphp

            

            <ul class="navigation-links">
                <div class="top-head">
                    <div class="left">
                        <a href="{{ url('pt_br' . $path) }}" title="Português">
                            PT
                        </a>
                        
                        <span>|</span>

                        <a href="{{ url('en' . $path) }}" title="English">
                            ENG
                        </a>
                    </div>

                    <div class="parceiros">
                        <a href="#" target="_blank">
                            {{ __('main.header.link_9') }}
                        </a>

                        <span>|</span>
                        
                        <a href="#" target="_blank">
                            {{ __('main.header.link_10') }}
                        </a>
                    </div>  
                </div>

                <div class="ul">  
                    <li class="animate" data-animate="top">
                        <a href="{{ route_lang('quem-somos') }}" class="{{ Route::is('quem-somos*') ? 'active' : '' }}">
                            {{ __('main.header.link_1') }}
                        </a>
                    </li>
                    
                    <li class="animate" data-animate="top">
                        <a href="{{ route_lang('diferenciais') }}" class="{{ Route::is('diferenciais*') ? 'active' : '' }}">
                            {{ __('main.header.link_2') }}
                        </a>
                    </li>

                    <li class="animate" data-animate="top">
                        <a href="{{ route_lang('atuacao') }}" class="{{ Route::is('atuacao*') ? 'active' : '' }}">
                            {{ __('main.header.link_3') }}
                        </a>
                    </li>
                    
                    <li class="animate" data-animate="bottom">
                        <a href="{{ route_lang('decisao') }}" class="{{ Route::is('decisao*') ? 'active' : '' }}">
                            {{ __('main.header.link_4') }}
                        </a>
                    </li>

                    <li class="animate" data-animate="bottom">
                        <a href="{{ route_lang('visao') }}" class="{{ Route::is('visao*') ? 'active' : '' }}">
                            {{ __('main.header.link_5') }}
                        </a>
                    </li>

                    <li class="animate" data-animate="bottom">
                        <a href="{{ route_lang('time') }}" class="{{ Route::is('time*') ? 'active' : '' }}">
                            {{ __('main.header.link_6') }}
                        </a>
                    </li>

                    <li class="animate" data-animate="bottom">
                        <a href="{{ route_lang('faq') }}" class="{{ Route::is('faq*') ? 'active' : '' }}">
                            {{ __('main.header.link_7') }}
                        </a>
                    </li>

                    <li class="animate" data-animate="bottom">
                        <a href="{{ route_lang('contato') }}" class="{{ Route::is('contato*') ? 'active' : '' }}">
                            {{ __('main.header.link_8') }}
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
</header>