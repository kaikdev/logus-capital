@extends('layouts.layout')

{{-- SEO --}}
@section('title', __('main.header.link_6'))
@section('description-seo', $metatag->description ?? getItem('client'))

@section('head')
    <link rel="stylesheet" href="{{ asset('css/time.css') }}">
@endsection

@section('content')
    <main>
        <div class="content">
            <div class="time">
                <div class="title-default animate" data-animate="fade">
                    <h1>
                        {!! __('time.title1') !!}
                    </h1>

                    <h2>
                        {!! __('time.subtitle1') !!}
                    </h2>
                </div>

                <div class="conteudo">
                    <h3 class="animate" data-animate="top">
                        {!! __('time.title-text1') !!}
                    </h3>

                    <div class="area-time">
                        <div class="itens">
                            <button type="button" class="item on animate" data-animate="top">
                                <img src="{{ asset('img/time/holger.webp') }}" alt="{!! __('time.employee1.name') !!}" loading="lazy">

                                <div class="area-text">
                                    <p class="title">
                                        {!! __('time.employee1.name') !!} |
                                        <a href="https://www.linkedin.com/in/holger-breh-cfa%C2%AE-caia%C2%AE-cfp%C2%AE-cga%C2%AE-cetf%C2%AE-2822a1/" target="_blank">
                                            <svg class="linkedin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M196.3 512L103.4 512L103.4 212.9L196.3 212.9L196.3 512zM149.8 172.1C120.1 172.1 96 147.5 96 117.8C96 103.5 101.7 89.9 111.8 79.8C121.9 69.7 135.6 64 149.8 64C164 64 177.7 69.7 187.8 79.8C197.9 89.9 203.6 103.6 203.6 117.8C203.6 147.5 179.5 172.1 149.8 172.1zM543.9 512L451.2 512L451.2 366.4C451.2 331.7 450.5 287.2 402.9 287.2C354.6 287.2 347.2 324.9 347.2 363.9L347.2 512L254.4 512L254.4 212.9L343.5 212.9L343.5 253.7L344.8 253.7C357.2 230.2 387.5 205.4 432.7 205.4C526.7 205.4 544 267.3 544 347.7L544 512L543.9 512z"/></svg>
                                        </a>
                                    </p>

                                    <p class="subtitle">
                                        {!! __('time.employee1.subtitle') !!}
                                    </p>
                                </div>
                            </button>

                            <button type="button" class="item animate" data-animate="top">
                                <img src="{{ asset('img/time/hilda.webp') }}" alt="{!! __('time.employee2.name') !!}" loading="lazy">

                                <div class="area-text">
                                    <p class="title">
                                        {!! __('time.employee2.name') !!} |
                                        <a href="https://www.linkedin.com/in/hildamartins/" target="_blank">
                                            <svg class="linkedin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M196.3 512L103.4 512L103.4 212.9L196.3 212.9L196.3 512zM149.8 172.1C120.1 172.1 96 147.5 96 117.8C96 103.5 101.7 89.9 111.8 79.8C121.9 69.7 135.6 64 149.8 64C164 64 177.7 69.7 187.8 79.8C197.9 89.9 203.6 103.6 203.6 117.8C203.6 147.5 179.5 172.1 149.8 172.1zM543.9 512L451.2 512L451.2 366.4C451.2 331.7 450.5 287.2 402.9 287.2C354.6 287.2 347.2 324.9 347.2 363.9L347.2 512L254.4 512L254.4 212.9L343.5 212.9L343.5 253.7L344.8 253.7C357.2 230.2 387.5 205.4 432.7 205.4C526.7 205.4 544 267.3 544 347.7L544 512L543.9 512z"/></svg>
                                        </a>
                                    </p>

                                    <p class="subtitle">
                                        {!! __('time.employee2.subtitle') !!}
                                    </p>
                                </div>
                            </button>

                            <button type="button" class="item animate" data-animate="top">
                                <img src="{{ asset('img/time/fernanda.webp') }}" alt="{!! __('time.employee3.name') !!}" loading="lazy">

                                <div class="area-text">
                                    <p class="title">
                                        {!! __('time.employee3.name') !!} |
                                        <a href="https://www.linkedin.com/in/fernanda-alves-retes-cfp%C2%AE-368602/" target="_blank">
                                            <svg class="linkedin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M196.3 512L103.4 512L103.4 212.9L196.3 212.9L196.3 512zM149.8 172.1C120.1 172.1 96 147.5 96 117.8C96 103.5 101.7 89.9 111.8 79.8C121.9 69.7 135.6 64 149.8 64C164 64 177.7 69.7 187.8 79.8C197.9 89.9 203.6 103.6 203.6 117.8C203.6 147.5 179.5 172.1 149.8 172.1zM543.9 512L451.2 512L451.2 366.4C451.2 331.7 450.5 287.2 402.9 287.2C354.6 287.2 347.2 324.9 347.2 363.9L347.2 512L254.4 512L254.4 212.9L343.5 212.9L343.5 253.7L344.8 253.7C357.2 230.2 387.5 205.4 432.7 205.4C526.7 205.4 544 267.3 544 347.7L544 512L543.9 512z"/></svg>
                                        </a>
                                    </p>

                                    <p class="subtitle">
                                        {!! __('time.employee3.subtitle') !!}
                                    </p>
                                </div>
                            </button>

                            <button type="button" class="item animate" data-animate="top">
                                <img src="{{ asset('img/time/fabio.webp') }}" alt="{!! __('time.employee4.name') !!}" loading="lazy">

                                <div class="area-text">
                                    <p class="title">
                                        {!! __('time.employee4.name') !!} |
                                        <a href="https://www.linkedin.com/in/fabio-granato-lopes/" target="_blank">
                                            <svg class="linkedin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M196.3 512L103.4 512L103.4 212.9L196.3 212.9L196.3 512zM149.8 172.1C120.1 172.1 96 147.5 96 117.8C96 103.5 101.7 89.9 111.8 79.8C121.9 69.7 135.6 64 149.8 64C164 64 177.7 69.7 187.8 79.8C197.9 89.9 203.6 103.6 203.6 117.8C203.6 147.5 179.5 172.1 149.8 172.1zM543.9 512L451.2 512L451.2 366.4C451.2 331.7 450.5 287.2 402.9 287.2C354.6 287.2 347.2 324.9 347.2 363.9L347.2 512L254.4 512L254.4 212.9L343.5 212.9L343.5 253.7L344.8 253.7C357.2 230.2 387.5 205.4 432.7 205.4C526.7 205.4 544 267.3 544 347.7L544 512L543.9 512z"/></svg>
                                        </a>
                                    </p>

                                    <p class="subtitle">
                                        {!! __('time.employee4.subtitle') !!}
                                    </p>
                                </div>
                            </button>

                            <button type="button" class="item animate" data-animate="top">
                                <img src="{{ asset('img/time/juliana.webp') }}" alt="{!! __('time.employee5.name') !!}" loading="lazy">

                                <div class="area-text">
                                    <p class="title">
                                        {!! __('time.employee5.name') !!} |
                                        <a href="https://www.linkedin.com/in/jcamblor/" target="_blank">
                                            <svg class="linkedin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M196.3 512L103.4 512L103.4 212.9L196.3 212.9L196.3 512zM149.8 172.1C120.1 172.1 96 147.5 96 117.8C96 103.5 101.7 89.9 111.8 79.8C121.9 69.7 135.6 64 149.8 64C164 64 177.7 69.7 187.8 79.8C197.9 89.9 203.6 103.6 203.6 117.8C203.6 147.5 179.5 172.1 149.8 172.1zM543.9 512L451.2 512L451.2 366.4C451.2 331.7 450.5 287.2 402.9 287.2C354.6 287.2 347.2 324.9 347.2 363.9L347.2 512L254.4 512L254.4 212.9L343.5 212.9L343.5 253.7L344.8 253.7C357.2 230.2 387.5 205.4 432.7 205.4C526.7 205.4 544 267.3 544 347.7L544 512L543.9 512z"/></svg>
                                        </a>
                                    </p>

                                    <p class="subtitle">
                                        {!! __('time.employee5.subtitle') !!}
                                    </p>
                                </div>
                            </button>
                        </div>

                        <div class="textos">
                            <div id="texto1">
                                {!! __('time.employee1.text') !!}
                            </div>

                            <div id="texto2">
                                {!! __('time.employee2.text') !!}
                            </div>

                            <div id="texto3">
                                {!! __('time.employee3.text') !!}
                            </div>

                            <div id="texto4">
                                {!! __('time.employee4.text') !!}
                            </div>

                            <div id="texto5">
                                {!! __('time.employee5.text') !!}
                            </div>
                        </div>
                    </div>

                    <h3 class="cons animate" data-animate="top">
                        {!! __('time.title-text2') !!}
                    </h3>

                    <div class="area-time">
                        <div class="itens">
                            <button type="button" class="item on animate" data-animate="top">
                                <img src="{{ asset('img/time/mauricio.webp') }}" alt="{!! __('time.advisor1.name') !!}" loading="lazy">

                                <div class="area-text">
                                    <p class="title">
                                        {!! __('time.advisor1.name') !!} |
                                        <a href="https://www.linkedin.com/in/mauricio-molan/" target="_blank">
                                            <svg class="linkedin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M196.3 512L103.4 512L103.4 212.9L196.3 212.9L196.3 512zM149.8 172.1C120.1 172.1 96 147.5 96 117.8C96 103.5 101.7 89.9 111.8 79.8C121.9 69.7 135.6 64 149.8 64C164 64 177.7 69.7 187.8 79.8C197.9 89.9 203.6 103.6 203.6 117.8C203.6 147.5 179.5 172.1 149.8 172.1zM543.9 512L451.2 512L451.2 366.4C451.2 331.7 450.5 287.2 402.9 287.2C354.6 287.2 347.2 324.9 347.2 363.9L347.2 512L254.4 512L254.4 212.9L343.5 212.9L343.5 253.7L344.8 253.7C357.2 230.2 387.5 205.4 432.7 205.4C526.7 205.4 544 267.3 544 347.7L544 512L543.9 512z"/></svg>
                                        </a>
                                    </p>

                                    <p class="subtitle">
                                        {!! __('time.advisor1.subtitle') !!}
                                    </p>
                                </div>
                            </button>

                            <button type="button" class="item animate" data-animate="top">
                                <img src="{{ asset('img/time/reinaldo.webp') }}" alt="{!! __('time.advisor2.name') !!}" loading="lazy">

                                <div class="area-text">
                                    <p class="title">
                                        {!! __('time.advisor2.name') !!} |
                                        <a href="https://www.linkedin.com/in/reinaldo-le-grazie-3038691/" target="_blank">
                                            <svg class="linkedin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M196.3 512L103.4 512L103.4 212.9L196.3 212.9L196.3 512zM149.8 172.1C120.1 172.1 96 147.5 96 117.8C96 103.5 101.7 89.9 111.8 79.8C121.9 69.7 135.6 64 149.8 64C164 64 177.7 69.7 187.8 79.8C197.9 89.9 203.6 103.6 203.6 117.8C203.6 147.5 179.5 172.1 149.8 172.1zM543.9 512L451.2 512L451.2 366.4C451.2 331.7 450.5 287.2 402.9 287.2C354.6 287.2 347.2 324.9 347.2 363.9L347.2 512L254.4 512L254.4 212.9L343.5 212.9L343.5 253.7L344.8 253.7C357.2 230.2 387.5 205.4 432.7 205.4C526.7 205.4 544 267.3 544 347.7L544 512L543.9 512z"/></svg>
                                        </a>
                                    </p>

                                    <p class="subtitle">
                                        {!! __('time.advisor2.subtitle') !!}
                                    </p>
                                </div>
                            </button>

                            <button type="button" class="item animate" data-animate="top">
                                <img src="{{ asset('img/time/rosangela.webp') }}" alt="{!! __('time.advisor3.name') !!}" loading="lazy">

                                <div class="area-text">
                                    <p class="title">
                                        {!! __('time.advisor3.name') !!} |
                                        <a href="https://www.linkedin.com/in/rosangela-santos-21b00aa/" target="_blank">
                                            <svg class="linkedin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M196.3 512L103.4 512L103.4 212.9L196.3 212.9L196.3 512zM149.8 172.1C120.1 172.1 96 147.5 96 117.8C96 103.5 101.7 89.9 111.8 79.8C121.9 69.7 135.6 64 149.8 64C164 64 177.7 69.7 187.8 79.8C197.9 89.9 203.6 103.6 203.6 117.8C203.6 147.5 179.5 172.1 149.8 172.1zM543.9 512L451.2 512L451.2 366.4C451.2 331.7 450.5 287.2 402.9 287.2C354.6 287.2 347.2 324.9 347.2 363.9L347.2 512L254.4 512L254.4 212.9L343.5 212.9L343.5 253.7L344.8 253.7C357.2 230.2 387.5 205.4 432.7 205.4C526.7 205.4 544 267.3 544 347.7L544 512L543.9 512z"/></svg>
                                        </a>
                                    </p>

                                    <p class="subtitle">
                                        {!! __('time.advisor3.subtitle') !!}
                                    </p>
                                </div>
                            </button>

                            <button type="button" class="item animate" data-animate="top">
                                <img src="{{ asset('img/time/fatima.webp') }}" alt="{!! __('time.advisor4.name') !!}" loading="lazy">

                                <div class="area-text">
                                    <p class="title">
                                        {!! __('time.advisor4.name') !!} |
                                        <a href="https://www.linkedin.com/in/teixeirafatima/" target="_blank">
                                            <svg class="linkedin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M196.3 512L103.4 512L103.4 212.9L196.3 212.9L196.3 512zM149.8 172.1C120.1 172.1 96 147.5 96 117.8C96 103.5 101.7 89.9 111.8 79.8C121.9 69.7 135.6 64 149.8 64C164 64 177.7 69.7 187.8 79.8C197.9 89.9 203.6 103.6 203.6 117.8C203.6 147.5 179.5 172.1 149.8 172.1zM543.9 512L451.2 512L451.2 366.4C451.2 331.7 450.5 287.2 402.9 287.2C354.6 287.2 347.2 324.9 347.2 363.9L347.2 512L254.4 512L254.4 212.9L343.5 212.9L343.5 253.7L344.8 253.7C357.2 230.2 387.5 205.4 432.7 205.4C526.7 205.4 544 267.3 544 347.7L544 512L543.9 512z"/></svg>
                                        </a>
                                    </p>

                                    <p class="subtitle">
                                        {!! __('time.advisor4.subtitle') !!}
                                    </p>
                                </div>
                            </button>
                        </div>

                        <div class="textos">
                            <div id="texto6">
                                {!! __('time.advisor1.text') !!}
                            </div>

                            <div id="texto7">
                                {!! __('time.advisor2.text') !!}
                            </div>

                            <div id="texto8">
                                {!! __('time.advisor3.text') !!}
                            </div>

                            <div id="texto9">
                                {!! __('time.advisor4.text') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('includes.saiba-mais', [
        'title' => __('time.saiba.title'),
        'subtitle' => __('time.saiba.subtitle'),
        'route' => __('time.saiba.route'),
    ])

    @include('includes.lead', [
        'title' => __('leads.lead.title'),
        'subtitle' => __('leads.lead.subtitle'),
        'botao' => __('leads.lead.botao'),
    ])
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.area-time').forEach(area => {
                const items = area.querySelectorAll('.itens .item');
                const textos = area.querySelectorAll('.textos > div');

                let autoPlay;

                function ativarItem(index) {
                    items.forEach(btn => btn.classList.remove('on'));
                    textos.forEach(texto => texto.classList.remove('on'));

                    items[index].classList.add('on');

                    if (textos[index]) {
                        textos[index].classList.add('on');
                    }

                    reiniciarContagem();
                }

                function reiniciarContagem() {
                    clearInterval(autoPlay);

                    autoPlay = setInterval(() => {
                        const atual = [...items].findIndex(item =>
                            item.classList.contains('on')
                        );

                        const proximo = (atual + 1) % items.length;

                        ativarItem(proximo);
                    }, 5000);
                }

                if (items.length) {
                    ativarItem(0);
                }

                items.forEach((item, index) => {
                    // Clique
                    item.addEventListener('click', () => {
                        ativarItem(index);
                    });

                    // Hover
                    item.addEventListener('mouseenter', () => {
                        ativarItem(index);
                    });

                });
            });
        });
</script>
@endsection