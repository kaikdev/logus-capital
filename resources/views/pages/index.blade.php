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

    <!-- 
    @include('includes.lead', [
        'title' => __('leads.lead.title'),
        'subtitle' => __('leads.lead.subtitle'),
        'botao' => __('leads.lead.botao'),
    ])
    -->
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
    </script>
@endsection