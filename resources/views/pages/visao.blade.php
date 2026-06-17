@extends('layouts.layout')

{{-- SEO --}}
@section('title', __('main.header.link_5'))
@section('description-seo', $metatag->description ?? getItem('client'))

@section('head')
    <link rel="stylesheet" href="{{ asset('css/visao.css') }}">
@endsection

@section('content')
    <main>
        <div class="content">
            <div class="visao">
                <div class="title-default animate" data-animate="fade">
                    <h1>
                        {!! __('visao.title1') !!}
                    </h1>

                    <h2>
                        {!! __('visao.subtitle1') !!}
                    </h2>
                </div>

                <div class="conteudo">
                    <div class="area-top">
                        <p class="animate" data-animate="top">
                            {!! __('visao.text1') !!}
                        </p>

                        <div class="coluna-texto">
                            <p class="mid animate" data-animate="left">
                                {!! __('visao.text2') !!}
                            </p>

                            <p class="animate" data-animate="left">
                                {!! __('visao.text3') !!}
                            </p>

                            <div class="area-link animate" data-animate="top">
                                <a href="#" class="link">
                                    <span>
                                        {!! __('visao.link') !!}
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                                    </span>

                                    {!! __('visao.sublink') !!}
                                </a>
                            </div>
                        </div>

                        <div class="area-video animate" data-animate="bottom">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/WWEt1EOje68?si=iZuJBz9rAsMo_oG4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>

                    <h3 class="animate" data-animate="fade">
                        {!! __('visao.title-text') !!}
                    </h3>

                    <p class="animate" data-animate="left">
                        {!! __('visao.text4') !!}
                    </p>

                    <p class="animate" data-animate="left">
                        {!! __('visao.text5') !!}
                    </p>

                    <p class="animate" data-animate="left">
                        {!! __('visao.text6') !!}
                    </p>

                    <p class="animate" data-animate="left">
                        {!! __('visao.text7') !!}
                    </p>

                    <p class="animate" data-animate="left">
                        {!! __('visao.text8') !!}
                    </p>

                    <p class="animate" data-animate="left">
                        {!! __('visao.text9') !!}
                    </p>

                    <img src="{{ asset('img/home/visao.webp') }}" class="img-end animate" data-animate="top" alt="Visão" loading="lazy">
                </div>
            </div>
        </div>
    </main>

    @include('includes.saiba-mais', [
        'title' => __('visao.saiba.title'),
        'subtitle' => __('visao.saiba.subtitle'),
        'route' => __('visao.saiba.route'),
    ])

    @include('includes.lead', [
        'title' => __('leads.lead.title'),
        'subtitle' => __('leads.lead.subtitle'),
        'botao' => __('leads.lead.botao'),
    ])
@endsection