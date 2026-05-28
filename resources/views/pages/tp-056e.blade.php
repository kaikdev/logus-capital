@extends('layouts.layout')

{{-- SEO --}}
@section('title', __('tp-056e.title_full'))
@section('description-seo', !empty($metatag) ? $metatag->descricao : getItem('client'))

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/produtos.css') }}"> 
@endsection

@section('content') 
    <section class="banner">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('img/produtos/banner-produtos.webp') }}" alt="Banner">

                    <h1 class="title-banner-swipper">
                        {!! __('tp-056e.banner') !!}
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <main>
        <div class="content">
            <div class="left animate" data-animate="left">
                <div class="title">
                    <h1>
                        {{ __('tp-056e.title') }}
                    </h1>

                    <h2>
                        {{ __('tp-056e.subtitle') }}
                    </h2>
                </div>

                <p>
                    {!! __('tp-056e.text_1') !!}
                </p>

                <p>
                    {!! __('tp-056e.text_2') !!}
                </p>
                
                <p class="chamada">
                    {!! __('tp-056e.text_3') !!}
                </p>

                <p>
                    {!! __('tp-056e.text_4') !!}
                </p>
            </div>

            <div class="right animate" data-animate="top">
                <div class="area-img">
                    <div class="swiper-produtos">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="{{ asset(__('tp-056e.img_1')) }}" data-fancybox="galeria">
                                    <img src="{{ asset(__('tp-056e.img_1')) }}" alt="Imagem do Produto 1 Litro">
                                </a>
                            </div>

                            <div class="swiper-slide">
                                <a href="{{ asset(__('tp-056e.img_2')) }}" data-fancybox="galeria">
                                    <img src="{{ asset(__('tp-056e.img_2')) }}" alt="Imagem do Produto 5 Litros">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    @include('includes.lead', [
        'title' => __('leads.lead.title'),
        'subtitle' => __('leads.lead.subtitle'),
        'botao' => __('leads.lead.botao'),
    ])

    @include('includes.saiba-mais', [
        'title' => __('tp-056e.saiba.title'),
        'subtitle' => __('tp-056e.saiba.subtitle'),
        'route' => 'produtos.ad-035'
    ])
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <script>  
        Fancybox.bind('[data-fancybox="galeria"]', {});
        
        const swiper = new Swiper(".banner .swiper", {
            loop: true,
            rewind: true,
            effect: "slide",
            autoplay: {
                delay: 4000,
            },
            speed: 2000,
        });

        const swiperAreas = new Swiper(".swiper-produtos", {
            loop: true,
            rewind: true,
            effect: "slide",
            spaceBetween: 20,
            autoplay: {
                delay: 4000,
            },
            speed: 2000,
        });
    </script>
@endsection