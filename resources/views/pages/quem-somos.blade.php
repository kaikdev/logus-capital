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
                    </div>

                    <img src="{{ asset('img/home/proposito.webp') }}" alt="Propósito" loading="lazy">
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