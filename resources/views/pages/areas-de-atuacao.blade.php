@extends('layouts.layout')

{{-- SEO --}}
@section('title', __('areas.title'))
@section('description-seo', !empty($metatag) ? $metatag->descricao : getItem('client'))

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/areas-de-atuacao.css') }}"> 
@endsection

@section('content') 
    <section class="banner">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('img/areas-de-atuacao/banner-2.webp') }}" alt="Banner">

                    <h1 class="title-banner-swipper">
                        {!! __('areas.banner') !!}
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <main>
        <div class="bg-effect-default right"></div>

        <div class="content">
            <div class="left">
                <div class="title">
                    <h1 class="animate" data-animate="left">
                        {{ __('areas.title') }}
                    </h1>
                </div>

                <ul class="lista-setores">
                    @foreach(__('areas.items') as $item)
                        <li class="animate" data-animate="left">
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="right animate" data-animate="top">
                <div class="swiper-areas">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="{{ asset('img/areas-de-atuacao/1.jpg') }}" data-fancybox="galeria"> 
                                <img src="{{ asset('img/areas-de-atuacao/1.jpg') }}" alt="Imagem da Área de Atuação">
                            </a>
                        </div>
                        
                        <div class="swiper-slide">
                            <a href="{{ asset('img/areas-de-atuacao/2.jpg') }}" data-fancybox="galeria"> 
                                <img src="{{ asset('img/areas-de-atuacao/2.jpg') }}" alt="Imagem da Área de Atuação">
                            </a>
                        </div>
                        
                        <div class="swiper-slide">
                            <a href="{{ asset('img/areas-de-atuacao/3.jpg') }}" data-fancybox="galeria"> 
                                <img src="{{ asset('img/areas-de-atuacao/3.jpg') }}" alt="Imagem da Área de Atuação">
                            </a>
                        </div>
                        
                        <div class="swiper-slide">
                            <a href="{{ asset('img/areas-de-atuacao/4.jpg') }}" data-fancybox="galeria"> 
                                <img src="{{ asset('img/areas-de-atuacao/4.jpg') }}" alt="Imagem da Área de Atuação">
                            </a>
                        </div>
                        
                        <div class="swiper-slide">
                            <a href="{{ asset('img/areas-de-atuacao/5.jpg') }}" data-fancybox="galeria"> 
                                <img src="{{ asset('img/areas-de-atuacao/5.jpg') }}" alt="Imagem da Área de Atuação">
                            </a>
                        </div>
                        
                        <div class="swiper-slide">
                            <a href="{{ asset('img/areas-de-atuacao/6.jpg') }}" data-fancybox="galeria"> 
                                <img src="{{ asset('img/areas-de-atuacao/6.jpg') }}" alt="Imagem da Área de Atuação">
                            </a>
                        </div>
                        
                        <div class="swiper-slide">
                            <a href="{{ asset('img/areas-de-atuacao/7.jpg') }}" data-fancybox="galeria"> 
                                <img src="{{ asset('img/areas-de-atuacao/7.jpg') }}" alt="Imagem da Área de Atuação">
                            </a>
                        </div>
                        
                        <div class="swiper-slide">
                            <a href="{{ asset('img/areas-de-atuacao/8.jpg') }}" data-fancybox="galeria"> 
                                <img src="{{ asset('img/areas-de-atuacao/8.jpg') }}" alt="Imagem da Área de Atuação">
                            </a>
                        </div>
                        
                        <div class="swiper-slide">
                            <a href="{{ asset('img/areas-de-atuacao/9.jpg') }}" data-fancybox="galeria"> 
                                <img src="{{ asset('img/areas-de-atuacao/9.jpg') }}" alt="Imagem da Área de Atuação">
                            </a>
                        </div>
                        
                        <div class="swiper-slide">
                            <a href="{{ asset('img/areas-de-atuacao/10.jpg') }}" data-fancybox="galeria"> 
                                <img src="{{ asset('img/areas-de-atuacao/10.jpg') }}" alt="Imagem da Área de Atuação">
                            </a>
                        </div>
                        
                        <div class="swiper-slide">
                            <a href="{{ asset('img/areas-de-atuacao/11.jpg') }}" data-fancybox="galeria"> 
                                <img src="{{ asset('img/areas-de-atuacao/11.jpg') }}" alt="Imagem da Área de Atuação">
                            </a>
                        </div>
                        
                        <div class="swiper-slide">
                            <a href="{{ asset('img/areas-de-atuacao/12.jpg') }}" data-fancybox="galeria"> 
                                <img src="{{ asset('img/areas-de-atuacao/12.jpg') }}" alt="Imagem da Área de Atuação">
                            </a>
                        </div>
                    </div>
                </div>

                <h2>
                    {{ __('areas.title') }}
                </h2>
            </div>
        </div>
    </main>
    
    @include('includes.lead', [
        'title' => __('leads.lead.title'),
        'subtitle' => __('leads.lead.subtitle'),
        'botao' => __('leads.lead.botao'),
    ])

    @include('includes.saiba-mais', [
        'title' => __('areas.saiba.title'),
        'subtitle' => __('areas.saiba.subtitle'),
        'route' => 'contato'
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

        const swiperAreas = new Swiper(".swiper-areas", {
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