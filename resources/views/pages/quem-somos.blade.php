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
                <div class="title-default">
                    <h1>
                        {!! __('quem-somos.title1') !!}
                    </h1>

                    <h2>
                        {!! __('quem-somos.subtitle1') !!}
                    </h2>
                </div>

                <div class="conteudo">
                    <p>
                        {!! __('quem-somos.text1') !!}
                    </p>

                    <p>
                        {!! __('quem-somos.text2') !!}
                    </p>

                    <div class="area-videos">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/WWEt1EOje68?si=iZuJBz9rAsMo_oG4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/WWEt1EOje68?si=iZuJBz9rAsMo_oG4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/WWEt1EOje68?si=iZuJBz9rAsMo_oG4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>

                    <p>
                        {!! __('quem-somos.text3') !!}
                    </p>

                    <p>
                        {!! __('quem-somos.text4') !!}
                    </p>

                    <div class="servico">
                        <div class="left">
                            <p>
                                {!! __('quem-somos.service1') !!}
                            </p>

                            <p>
                                {!! __('quem-somos.service2') !!}
                            </p>
                        </div>

                        <div class="img">
                            <img src="{{ asset('img/icone-logus-capital.webp') }}" alt="Logus Capital" width="100" height="115">
                        </div>

                        <div class="right">
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