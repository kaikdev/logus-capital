@extends('layouts.layout')

{{-- SEO --}}
@section('title', __('main.header.link_3'))
@section('description-seo', $metatag->description ?? getItem('client'))

@section('head')
    <link rel="stylesheet" href="{{ asset('css/atuacao.css') }}">
@endsection

@section('content')
    <main>
        <div class="content">
            <div class="atuacao">
                <div class="title-default animate" data-animate="fade">
                    <h1>
                        {!! __('atuacao.title1') !!}
                    </h1>

                    <h2>
                        {!! __('atuacao.subtitle1') !!}
                    </h2>
                </div>

                <div class="conteudo">
                    <p class="animate" data-animate="top">
                        {!! __('atuacao.text1') !!}
                    </p>

                    <p class="animate" data-animate="top">
                        {!! __('atuacao.text2') !!}
                    </p>

                    <div class="polygon-img">
                        <div class="left">
                            <p class="animate" data-animate="top">
                                {!! __('atuacao.word1') !!}
                            </p>

                            <p class="animate" data-animate="right">
                                {!! __('atuacao.word3') !!}
                            </p>

                            <p class="animate" data-animate="bottom">
                                {!! __('atuacao.word5') !!}
                            </p>
                        </div>

                        <div class="area-img">
                            <img src="{{ asset('img/icone-logus-capital.webp') }}" alt="Logus Capital" width="150" height="auto">
                        </div>

                        <div class="right">
                            <p class="animate" data-animate="bottom">
                                {!! __('atuacao.word2') !!}
                            </p>

                            <p class="animate" data-animate="left">
                                {!! __('atuacao.word4') !!}
                            </p>

                            <p class="animate" data-animate="top">
                                {!! __('atuacao.word6') !!}
                            </p>
                        </div>
                    </div>

                    <h3 class="animate" data-animate="fade">
                        {!! __('atuacao.title-text') !!}
                    </h3>

                    <p class="animate" data-animate="left">
                        {!! __('atuacao.text3') !!}
                    </p>

                    <p class="animate" data-animate="left">
                        {!! __('atuacao.text4') !!}
                    </p>
                </div>
            </div>
        </div>
    </main>


    @include('includes.saiba-mais', [
        'title' => __('atuacao.saiba.title'),
        'subtitle' => __('atuacao.saiba.subtitle'),
        'route' => __('atuacao.saiba.route'),
    ])

    @include('includes.lead', [
        'title' => __('leads.lead.title'),
        'subtitle' => __('leads.lead.subtitle'),
        'botao' => __('leads.lead.botao'),
    ])
@endsection