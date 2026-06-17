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
                <div class="title-default">
                    <h1>
                        {!! __('time.title1') !!}
                    </h1>

                    <h2>
                        {!! __('time.subtitle1') !!}
                    </h2>
                </div>

                <div class="conteudo">
                    <h3>
                        {!! __('time.title-text1') !!}
                    </h3>

                    <div class="area-time">
                        <div class="itens">
                            <button type="button" class="item on animate" data-animate="top">
                                <img src="{{ asset('img/home/proposito.webp') }}" alt="{!! __('time.employee1.name') !!}" loading="lazy">

                                <div class="area-text">
                                    <p class="title">
                                        {!! __('time.employee1.name') !!} |
                                        <a href="http://linkedin.com/" target="_blank">
                                            <svg class="linkedin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M196.3 512L103.4 512L103.4 212.9L196.3 212.9L196.3 512zM149.8 172.1C120.1 172.1 96 147.5 96 117.8C96 103.5 101.7 89.9 111.8 79.8C121.9 69.7 135.6 64 149.8 64C164 64 177.7 69.7 187.8 79.8C197.9 89.9 203.6 103.6 203.6 117.8C203.6 147.5 179.5 172.1 149.8 172.1zM543.9 512L451.2 512L451.2 366.4C451.2 331.7 450.5 287.2 402.9 287.2C354.6 287.2 347.2 324.9 347.2 363.9L347.2 512L254.4 512L254.4 212.9L343.5 212.9L343.5 253.7L344.8 253.7C357.2 230.2 387.5 205.4 432.7 205.4C526.7 205.4 544 267.3 544 347.7L544 512L543.9 512z"/></svg>
                                        </a>
                                    </p>

                                    <p class="subtitle">
                                        {!! __('time.employee1.subtitle') !!}
                                    </p>
                                </div>
                            </button>

                            <button type="button" class="item animate" data-animate="top">
                                <img src="{{ asset('img/home/proposito.webp') }}" alt="{!! __('time.employee2.name') !!}" loading="lazy">

                                <div class="area-text">
                                    <p class="title">
                                        {!! __('time.employee2.name') !!} |
                                        <a href="http://linkedin.com/" target="_blank">
                                            <svg class="linkedin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M196.3 512L103.4 512L103.4 212.9L196.3 212.9L196.3 512zM149.8 172.1C120.1 172.1 96 147.5 96 117.8C96 103.5 101.7 89.9 111.8 79.8C121.9 69.7 135.6 64 149.8 64C164 64 177.7 69.7 187.8 79.8C197.9 89.9 203.6 103.6 203.6 117.8C203.6 147.5 179.5 172.1 149.8 172.1zM543.9 512L451.2 512L451.2 366.4C451.2 331.7 450.5 287.2 402.9 287.2C354.6 287.2 347.2 324.9 347.2 363.9L347.2 512L254.4 512L254.4 212.9L343.5 212.9L343.5 253.7L344.8 253.7C357.2 230.2 387.5 205.4 432.7 205.4C526.7 205.4 544 267.3 544 347.7L544 512L543.9 512z"/></svg>
                                        </a>
                                    </p>

                                    <p class="subtitle">
                                        {!! __('time.employee2.subtitle') !!}
                                    </p>
                                </div>
                            </button>

                            <button type="button" class="item animate" data-animate="top">
                                <img src="{{ asset('img/home/proposito.webp') }}" alt="{!! __('time.employee3.name') !!}" loading="lazy">

                                <div class="area-text">
                                    <p class="title">
                                        {!! __('time.employee3.name') !!} |
                                        <a href="http://linkedin.com/" target="_blank">
                                            <svg class="linkedin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M196.3 512L103.4 512L103.4 212.9L196.3 212.9L196.3 512zM149.8 172.1C120.1 172.1 96 147.5 96 117.8C96 103.5 101.7 89.9 111.8 79.8C121.9 69.7 135.6 64 149.8 64C164 64 177.7 69.7 187.8 79.8C197.9 89.9 203.6 103.6 203.6 117.8C203.6 147.5 179.5 172.1 149.8 172.1zM543.9 512L451.2 512L451.2 366.4C451.2 331.7 450.5 287.2 402.9 287.2C354.6 287.2 347.2 324.9 347.2 363.9L347.2 512L254.4 512L254.4 212.9L343.5 212.9L343.5 253.7L344.8 253.7C357.2 230.2 387.5 205.4 432.7 205.4C526.7 205.4 544 267.3 544 347.7L544 512L543.9 512z"/></svg>
                                        </a>
                                    </p>

                                    <p class="subtitle">
                                        {!! __('time.employee3.subtitle') !!}
                                    </p>
                                </div>
                            </button>

                            <button type="button" class="item animate" data-animate="top">
                                <img src="{{ asset('img/home/proposito.webp') }}" alt="{!! __('time.employee4.name') !!}" loading="lazy">

                                <div class="area-text">
                                    <p class="title">
                                        {!! __('time.employee4.name') !!} |
                                        <a href="http://linkedin.com/" target="_blank">
                                            <svg class="linkedin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M196.3 512L103.4 512L103.4 212.9L196.3 212.9L196.3 512zM149.8 172.1C120.1 172.1 96 147.5 96 117.8C96 103.5 101.7 89.9 111.8 79.8C121.9 69.7 135.6 64 149.8 64C164 64 177.7 69.7 187.8 79.8C197.9 89.9 203.6 103.6 203.6 117.8C203.6 147.5 179.5 172.1 149.8 172.1zM543.9 512L451.2 512L451.2 366.4C451.2 331.7 450.5 287.2 402.9 287.2C354.6 287.2 347.2 324.9 347.2 363.9L347.2 512L254.4 512L254.4 212.9L343.5 212.9L343.5 253.7L344.8 253.7C357.2 230.2 387.5 205.4 432.7 205.4C526.7 205.4 544 267.3 544 347.7L544 512L543.9 512z"/></svg>
                                        </a>
                                    </p>

                                    <p class="subtitle">
                                        {!! __('time.employee4.subtitle') !!}
                                    </p>
                                </div>
                            </button>

                            <button type="button" class="item animate" data-animate="top">
                                <img src="{{ asset('img/home/proposito.webp') }}" alt="{!! __('time.employee5.name') !!}" loading="lazy">

                                <div class="area-text">
                                    <p class="title">
                                        {!! __('time.employee5.name') !!} |
                                        <a href="http://linkedin.com/" target="_blank">
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

                    <h3 class="cons">
                        {!! __('time.title-text2') !!}
                    </h3>

                    <div class="area-time">
                        <div class="itens">
                            <button type="button" class="item on animate" data-animate="top">
                                <img src="{{ asset('img/home/proposito.webp') }}" alt="{!! __('time.advisor1.name') !!}" loading="lazy">

                                <div class="area-text">
                                    <p class="title">
                                        {!! __('time.advisor1.name') !!} |
                                        <a href="http://linkedin.com/" target="_blank">
                                            <svg class="linkedin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M196.3 512L103.4 512L103.4 212.9L196.3 212.9L196.3 512zM149.8 172.1C120.1 172.1 96 147.5 96 117.8C96 103.5 101.7 89.9 111.8 79.8C121.9 69.7 135.6 64 149.8 64C164 64 177.7 69.7 187.8 79.8C197.9 89.9 203.6 103.6 203.6 117.8C203.6 147.5 179.5 172.1 149.8 172.1zM543.9 512L451.2 512L451.2 366.4C451.2 331.7 450.5 287.2 402.9 287.2C354.6 287.2 347.2 324.9 347.2 363.9L347.2 512L254.4 512L254.4 212.9L343.5 212.9L343.5 253.7L344.8 253.7C357.2 230.2 387.5 205.4 432.7 205.4C526.7 205.4 544 267.3 544 347.7L544 512L543.9 512z"/></svg>
                                        </a>
                                    </p>

                                    <p class="subtitle">
                                        {!! __('time.advisor1.subtitle') !!}
                                    </p>
                                </div>
                            </button>

                            <button type="button" class="item animate" data-animate="top">
                                <img src="{{ asset('img/home/proposito.webp') }}" alt="{!! __('time.advisor2.name') !!}" loading="lazy">

                                <div class="area-text">
                                    <p class="title">
                                        {!! __('time.advisor2.name') !!} |
                                        <a href="http://linkedin.com/" target="_blank">
                                            <svg class="linkedin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M196.3 512L103.4 512L103.4 212.9L196.3 212.9L196.3 512zM149.8 172.1C120.1 172.1 96 147.5 96 117.8C96 103.5 101.7 89.9 111.8 79.8C121.9 69.7 135.6 64 149.8 64C164 64 177.7 69.7 187.8 79.8C197.9 89.9 203.6 103.6 203.6 117.8C203.6 147.5 179.5 172.1 149.8 172.1zM543.9 512L451.2 512L451.2 366.4C451.2 331.7 450.5 287.2 402.9 287.2C354.6 287.2 347.2 324.9 347.2 363.9L347.2 512L254.4 512L254.4 212.9L343.5 212.9L343.5 253.7L344.8 253.7C357.2 230.2 387.5 205.4 432.7 205.4C526.7 205.4 544 267.3 544 347.7L544 512L543.9 512z"/></svg>
                                        </a>
                                    </p>

                                    <p class="subtitle">
                                        {!! __('time.advisor2.subtitle') !!}
                                    </p>
                                </div>
                            </button>

                            <button type="button" class="item animate" data-animate="top">
                                <img src="{{ asset('img/home/proposito.webp') }}" alt="{!! __('time.advisor3.name') !!}" loading="lazy">

                                <div class="area-text">
                                    <p class="title">
                                        {!! __('time.advisor3.name') !!} |
                                        <a href="http://linkedin.com/" target="_blank">
                                            <svg class="linkedin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M196.3 512L103.4 512L103.4 212.9L196.3 212.9L196.3 512zM149.8 172.1C120.1 172.1 96 147.5 96 117.8C96 103.5 101.7 89.9 111.8 79.8C121.9 69.7 135.6 64 149.8 64C164 64 177.7 69.7 187.8 79.8C197.9 89.9 203.6 103.6 203.6 117.8C203.6 147.5 179.5 172.1 149.8 172.1zM543.9 512L451.2 512L451.2 366.4C451.2 331.7 450.5 287.2 402.9 287.2C354.6 287.2 347.2 324.9 347.2 363.9L347.2 512L254.4 512L254.4 212.9L343.5 212.9L343.5 253.7L344.8 253.7C357.2 230.2 387.5 205.4 432.7 205.4C526.7 205.4 544 267.3 544 347.7L544 512L543.9 512z"/></svg>
                                        </a>
                                    </p>

                                    <p class="subtitle">
                                        {!! __('time.advisor3.subtitle') !!}
                                    </p>
                                </div>
                            </button>

                            <button type="button" class="item animate" data-animate="top">
                                <img src="{{ asset('img/home/proposito.webp') }}" alt="{!! __('time.advisor4.name') !!}" loading="lazy">

                                <div class="area-text">
                                    <p class="title">
                                        {!! __('time.advisor4.name') !!} |
                                        <a href="http://linkedin.com/" target="_blank">
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

                if (items.length) {
                    items[0].classList.add('on');
                }

                if (textos.length) {
                    textos[0].classList.add('on');
                }

                items.forEach((item, index) => {
                    item.addEventListener('click', () => {
                        items.forEach(btn => btn.classList.remove('on'));
                        textos.forEach(texto => texto.classList.remove('on'));

                        item.classList.add('on');

                        if (textos[index]) {
                            textos[index].classList.add('on');
                        }
                    });
                });
            });
        });
    </script>
@endsection