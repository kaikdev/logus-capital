@extends('layouts.layout')

{{-- SEO --}}
@section('title', __('main.header.link_1'))
@section('description-seo', $metatag->description ?? getItem('client'))

@section('head')
    <link rel="stylesheet" href="{{ asset('css/quem-somos.css') }}">
@endsection

@section('content')
    <main>
        <div class="content">
            <div class="quem-somos">
                <div class="title-default animate" data-animate="fade">
                    <h1>
                        {!! __('quem-somos.title1') !!}
                    </h1>

                    <h2>
                        {!! __('quem-somos.subtitle1') !!}
                    </h2>
                </div>

                <div class="conteudo">
                    <p class="animate" data-animate="left">
                        {!! __('quem-somos.text1') !!}
                    </p>

                    <p class="animate" data-animate="left">
                        {!! __('quem-somos.text2') !!}
                    </p>

                    <div class="area-videos">
                        <div class="video animate" data-animate="top">
                            <video autoplay muted loop playsinline>
                                <source src="{{ asset('video/quem-somos-1.mp4') }}" type="video/mp4">
                                Seu navegador não suporta vídeo HTML5.
                            </video>
                        </div>

                        <div class="video animate" data-animate="top">
                            <video autoplay muted loop playsinline>
                                <source src="{{ asset('video/quem-somos-2.mp4') }}" type="video/mp4">
                                Seu navegador não suporta vídeo HTML5.
                            </video>
                        </div>

                        <div class="video animate" data-animate="top">
                            <video autoplay muted loop playsinline>
                                <source src="{{ asset('video/quem-somos-3.mp4') }}" type="video/mp4">
                                Seu navegador não suporta vídeo HTML5.
                            </video>
                        </div>
                    </div>

                    <p class="animate" data-animate="left">
                        {!! __('quem-somos.text3') !!}
                    </p>

                    <p class="animate" data-animate="left">
                        {!! __('quem-somos.text4') !!}
                    </p>

                    <div class="servico">
                        <div class="left">
                            <p class="animate" data-animate="left">
                                {!! __('quem-somos.service1') !!}
                            </p>

                            <p class="animate" data-animate="top">
                                {!! __('quem-somos.service2') !!}
                            </p>
                        </div>

                        <div class="img animate" data-animate="scale">
                            <img src="{{ asset('img/icone-logus-capital.webp') }}" alt="Logus Capital" width="100" height="115">
                        </div>

                        <div class="right animate" data-animate="top">
                            <p>
                                {!! __('quem-somos.service3') !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    @include('includes.saiba-mais', [
        'title' => __('quem-somos.saiba.title'),
        'subtitle' => __('quem-somos.saiba.subtitle'),
        'route' => __('quem-somos.saiba.route'),
    ])

    @include('includes.lead', [
        'title' => __('leads.lead.title'),
        'subtitle' => __('leads.lead.subtitle'),
        'botao' => __('leads.lead.botao'),
    ])
@endsection