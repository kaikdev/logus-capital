<div class="scroll-text animate" data-animate="top">
    <div class="scroll-content" >
        <span>{{ __('main.scroll_text.palavra_1') }}</span>
        <span>{{ __('main.scroll_text.palavra_2') }}</span>
        <span>{{ __('main.scroll_text.palavra_3') }}</span>
        <span>{{ __('main.scroll_text.palavra_4') }}</span>

        <span>{{ __('main.scroll_text.palavra_1') }}</span>
        <span>{{ __('main.scroll_text.palavra_2') }}</span>
        <span>{{ __('main.scroll_text.palavra_3') }}</span>
        <span>{{ __('main.scroll_text.palavra_4') }}</span>
    </div>
</div>

<header id="header">
    <div class="content">
        <div class="left animate" data-animate="left">
            <a href="{{ route_lang('home') }}" class="logo">
                <img src="{{ asset('img/logo-global-silver.webp') }}" alt="Logo Global Silver" width="252" height="90">
            </a>
        </div>

        <div class="right">
            <ul class="navigation-links">
                @php
                    $path = request()->path();
                    $path = preg_replace('/^(pt_BR|en|es)/', '', $path);
                @endphp

                <div class="area-idiomas mobile">
                    <a href="{{ url('pt_BR' . $path) }}" title="Português">
                        <img src="{{ asset('img/flag-br.webp') }}" alt="Português" width="30" height="20">
                    </a>

                    <a href="{{ url('en' . $path) }}" title="English">
                        <img src="{{ asset('img/flag-eua.webp') }}" alt="English" width="30" height="20">
                    </a>

                    <a href="{{ url('es' . $path) }}" title="Español">
                        <img src="{{ asset('img/flag-esp.webp') }}" alt="Español" width="30" height="20">
                    </a>
                </div>

                <li class="animate" data-animate="top">
                    <a href="{{ route_lang('empresa') }}" class="{{ Route::is('empresa*') ? 'active' : '' }}">
                        {{ __('main.header.link_1') }}
                    </a>
                </li>

                <li class="produtos animate" data-animate="top">
                    <a href="#" class="{{ Route::is('produtos*') ? 'active' : '' }}">
                        {{ __('main.header.link_2') }}
                    </a>

                    <div class="drop">
                            <a href="{{ route_lang('produtos.tp-056e') }}" class="{{ Route::is('produtos.tp-056e') ? 'active' : '' }}">
                                TP-056E
                            </a>    
                            <a href="{{ route_lang('produtos.ad-035') }}" class="{{ Route::is('produtos.ad-035') ? 'active' : '' }}">
                                AD-035
                            </a>    
                    </div>
                </li>

                <li class="animate" data-animate="top">
                    <a href="{{ route_lang('areas-de-atuacao') }}" class="{{ Route::is('areas-de-atuacao*') ? 'active' : '' }}">
                        {{ __('main.header.link_3') }}
                    </a>
                </li>
                
                <li class="animate" data-animate="bottom">
                    <a href="{{ route_lang('contato') }}" class="{{ Route::is('contato*') ? 'active' : '' }}">
                        {{ __('main.header.link_4') }}
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
            <a href="{{ url('pt_BR' . $path) }}" title="Português">
                <img src="{{ asset('img/flag-br.webp') }}" alt="Português" width="30" height="20">
            </a>

            <a href="{{ url('en' . $path) }}" title="English">
                <img src="{{ asset('img/flag-eua.webp') }}" alt="English" width="30" height="20">
            </a>

            <a href="{{ url('es' . $path) }}" title="Español">
                <img src="{{ asset('img/flag-esp.webp') }}" alt="Español" width="30" height="20">
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
</script>