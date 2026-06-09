@extends('layouts.layout')

{{-- SEO --}}
@section('title', __('main.footer.link_1'))
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
                    {{-- 
                    <img 
                        src="{{ asset('img/produtos/banner2.webp') }}" 
                        srcset="
                            {{ asset('img/produtos/banner2-mobile.webp') }} 480w,
                            {{ asset('img/produtos/banner2-tablet.webp') }} 768w,
                            {{ asset('img/produtos/banner2.webp') }} 1200w
                        "
                        sizes="(max-width: 480px) 100vw, (max-width: 768px) 100vw, 1200px"
                        alt="Banner"
                        fetchpriority="high"
                    >
                    --}}

                    <video src="{{ asset('video/video-home.mp4') }}" autoplay muted loop></video>

                    <h1 class="title-banner-swipper">
                        {!! __('home.banner') !!}
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <main>
        <div class="content">
            <div class="proposito">
                <div class="title-default">
                    <h1>
                        {!! __('home.title1') !!}
                    </h1>

                    <h2>
                        {!! __('home.subtitle1') !!}
                    </h2>
                </div>

                <div class="conteudo">
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

                    <img src="{{ asset('img/home/proposito.webp') }}" alt="Propósito" loading="lazy">
                </div>
            </div>

            <div class="diferenciais">
                <div class="title-default">
                    <h1>
                        {!! __('home.title2') !!}
                    </h1>

                    <h2>
                        {!! __('home.subtitle2') !!}
                    </h2>
                </div>

                <div class="conteudo">
                    <div class="top">
                        <div class="item">
                            <img src="{{ asset('img/home/proposito.webp') }}" alt="Imagem Diferenciais">

                            <p>
                                {!! __('home.diferenciais1') !!}
                            </p>
                        </div>

                        <div class="item">
                            <img src="{{ asset('img/home/proposito.webp') }}" alt="Imagem Diferenciais">

                            <p>
                                {!! __('home.diferenciais2') !!}
                            </p>
                        </div>
                    </div>

                    <div class="bottom">
                        <div class="item">
                            <img src="{{ asset('img/home/proposito.webp') }}" alt="Imagem Diferenciais">

                            <p>
                                {!! __('home.diferenciais3') !!}
                            </p>
                        </div>

                        <div class="item">
                            <img src="{{ asset('img/home/proposito.webp') }}" alt="Imagem Diferenciais">

                            <p>
                                {!! __('home.diferenciais4') !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="atuacao">
                <div class="title-default">
                    <h1>
                        {!! __('home.title3') !!}
                    </h1>

                    <h2>
                        {!! __('home.subtitle3') !!}
                    </h2>
                </div>

                <div class="conteudo">
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
                <div class="title-default">
                    <h1>
                        {!! __('home.title4') !!}
                    </h1>

                    <h2>
                        {!! __('home.subtitle4') !!}
                    </h2>
                </div>

                <div class="conteudo">
                    <div class="left">
                        <p>
                            {!! __('home.text5') !!}
                        </p>

                        <a href="#" class="link">
                            {!! __('home.link3') !!}
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                        </a>
                    </div>

                    <img src="{{ asset('img/home/proposito.webp') }}" alt="Decisões" loading="lazy">
                </div>
            </div>

            <div class="visao">
                <div class="title-default">
                    <h1>
                        {!! __('home.title5') !!}
                    </h1>

                    <h2>
                        {!! __('home.subtitle5') !!}
                    </h2>
                </div>

                <div class="conteudo">
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>

    <script defer>
        document.addEventListener("DOMContentLoaded", function () {

            const swiper = new Swiper(".banner .swiper", {
                loop: true,
                rewind: true,
                effect: "slide",
                autoplay: {
                    delay: 5000,
                },
                speed: 1500,
            });
        });

        document.addEventListener('DOMContentLoaded', () => {
            const title = document.querySelector('.title-banner-swipper');

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