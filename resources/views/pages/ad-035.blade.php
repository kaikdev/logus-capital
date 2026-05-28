@extends('layouts.layout')

{{-- SEO --}}
@section('title', __('ad-035.title_full'))
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
                        {!! __('ad-035.banner') !!}
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
                        {{ __('ad-035.title') }}
                    </h1>

                    <h2>
                        {{ __('ad-035.subtitle') }}
                    </h2>
                </div>

                <p>
                    {!! __('ad-035.text_1') !!}
                </p>

                <p>
                    {!! __('ad-035.text_2') !!}
                </p>
                
                <p class="chamada">
                    {!! __('ad-035.text_3') !!}
                </p>

                <p>
                    {!! __('ad-035.text_4') !!}
                </p>
            </div>

            <div class="right animate" data-animate="top">
                <div class="area-img">
                    <div class="swiper-produtos">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="{{ asset(__('ad-035.img_1')) }}" data-fancybox="galeria">
                                    <img src="{{ asset(__('ad-035.img_1')) }}" alt="Imagem do Produto 5 Litros">
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
        'title' => __('ad-035.saiba.title'),
        'subtitle' => __('ad-035.saiba.subtitle'),
        'route' => 'areas-de-atuacao'
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