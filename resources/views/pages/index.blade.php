@extends('layouts.layout')

{{-- SEO --}}
@section('title', __('main.header.link_0'))
@section('description-seo', $metatag->description ?? getItem('client'))

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
    <section class="banner">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <video src="{{ asset('video/video-home.mp4') }}" autoplay muted loop></video>

                    <h1 class="title-banner-swipper">
                        {!! __('home.banner') !!}
                    </h1>
                </div>

                <div class="swiper-slide">
                    <video src="{{ asset('video/video-home.mp4') }}" autoplay muted loop></video>

                    <h1 class="title-banner-swipper">
                        {!! __('home.banner2') !!}
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <main>
        <div class="content">
            <div class="proposito">
                <div class="title-default animate" data-animate="fade">
                    <h1>
                        {!! __('home.title1') !!}
                    </h1>

                    <h2>
                        {!! __('home.subtitle1') !!}
                    </h2>
                </div>

                <div class="conteudo animate" data-animate="left">
                    <div class="left">
                        <p>
                            {!! __('home.text1') !!}
                        </p>

                        <p>
                            {!! __('home.text2') !!}
                        </p>

                        <a href="#" class="link">
                            {!! __('home.link1') !!}
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                        </a>
                    </div>

                    <img src="{{ asset('img/home/proposito.webp') }}" alt="Propósito">
                </div>
            </div>

            <div class="diferenciais">
                <div class="title-default animate" data-animate="fade">
                    <h1>
                        {!! __('home.title2') !!}
                    </h1>

                    <h2>
                        {!! __('home.subtitle2') !!}
                    </h2>
                </div>

                <div class="conteudo animate" data-animate="fade">
                    <div class="top">
                        <a href="{{ route_lang('diferenciais') }}" class="item">
                            <img src="{{ asset('img/home/diferenciais-1.webp') }}" alt="Imagem Diferenciais">

                            <p>
                                {!! __('home.diferenciais1') !!}
                            </p>
                        </a>

                        <a href="{{ route_lang('diferenciais') }}" class="item">
                            <img src="{{ asset('img/home/diferenciais-2.webp') }}" alt="Imagem Diferenciais">

                            <p>
                                {!! __('home.diferenciais2') !!}
                            </p>
                        </a>
                    </div>

                    <div class="bottom">
                        <a href="{{ route_lang('diferenciais') }}" class="item">
                            <img src="{{ asset('img/home/diferenciais-3.webp') }}" alt="Imagem Diferenciais">

                            <p>
                                {!! __('home.diferenciais3') !!}
                            </p>
                        </a>

                        <a href="{{ route_lang('diferenciais') }}" class="item">
                            <img src="{{ asset('img/home/diferenciais-4.webp') }}" alt="Imagem Diferenciais">

                            <p>
                                {!! __('home.diferenciais4') !!}
                            </p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="atuacao">
                <div class="title-default animate" data-animate="fade">
                    <h1>
                        {!! __('home.title3') !!}
                    </h1>

                    <h2>
                        {!! __('home.subtitle3') !!}
                    </h2>
                </div>

                <div class="conteudo animate" data-animate="left">
                    <p>
                        {!! __('home.text3') !!}
                    </p>

                    <p>
                        {!! __('home.text4') !!}
                    </p>

                    <a href="#" class="link">
                        {!! __('home.link2') !!}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                    </a>
                </div>
            </div>

            <div class="decisoes">
                <div class="title-default animate" data-animate="fade">
                    <h1>
                        {!! __('home.title4') !!}
                    </h1>

                    <h2>
                        {!! __('home.subtitle4') !!}
                    </h2>
                </div>

                <div class="conteudo animate" data-animate="top">
                    <div class="left">
                        <p>
                            {!! __('home.text5') !!}
                        </p>

                        <a href="#" class="link">
                            {!! __('home.link3') !!}
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                        </a>
                    </div>

                    <img src="{{ asset('img/home/decisoes.webp') }}" alt="Decisões" loading="lazy">
                </div>
            </div>

            <div class="visao">
                <div class="title-default animate" data-animate="fade">
                    <h1>
                        {!! __('home.title5') !!}
                    </h1>

                    <h2>
                        {!! __('home.subtitle5') !!}
                    </h2>
                </div>

                <div class="conteudo animate" data-animate="top">
                    <img src="{{ asset('img/home/visao.webp') }}" alt="Visão" loading="lazy">

                    <p>
                        {!! __('home.text6') !!}
                    </p>

                    <p>
                        {!! __('home.text7') !!}
                    </p>

                    <p>
                        {!! __('home.text8') !!}
                    </p>

                    <a href="#">
                        <span>
                            {!! __('home.link4') !!}
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                        </span>

                        {!! __('home.sublink4') !!}
                    </a>
                </div>
            </div>
        </div>
    </main>

    @include('includes.lead', [
        'title' => __('leads.lead.title'),
        'subtitle' => __('leads.lead.subtitle'),
        'botao' => __('leads.lead.botao'),
    ])
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {

            const swiper = new Swiper(".banner .swiper", {
                loop: true,
                rewind: true,
                effect: "fade",
                autoplay: {
                    delay: 5000,
                },
                speed: 1500,
            });
        });

        document.addEventListener('DOMContentLoaded', () => {
            console.log('DOM carregado');

            const title = document.querySelector('.title-banner-swipper');

            console.log(title);

            if (!title) return;

            const html = title.innerHTML;
            const parts = html.split(/(<br\s*\/?>)/i);

            let delay = 0;

            title.innerHTML = parts.map(part => {
                if (part.match(/<br\s*\/?>/i)) {
                    return part;
                }

                return part
                    .trim()
                    .split(/\s+/)
                    .map(word => {
                        const span = `<span class="word" style="animation-delay:${delay}s">${word}</span>`;
                        delay += 0.15;
                        return span;
                    })
                    .join(' ');
            }).join('');
        });
    </script>
@endsection