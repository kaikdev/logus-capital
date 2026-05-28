@extends('layouts.layout')

{{-- SEO --}}
@section('title', __('main.footer.link_2'))
@section('description-seo', !empty($metatag) ? $metatag->descricao : getItem('client'))

@section('head')
    <link rel="stylesheet" href="{{ asset('css/empresa.css') }}">
@endsection

@section('content')     
    <main>
        <div class="content">
            <div class="left animate" data-animate="top">
                <h1>
                    {{ __('empresa.title') }}
                </h1>

                <p>
                    {!! __('empresa.text_1') !!}
                </p>

                <p>
                    {{ __('empresa.text_2') }}
                </p>
                
                <p>
                    {!! __('empresa.text_3') !!}
                </p>
            </div>

            <div class="right animate" data-animate="left">
                <div class="item">
                    <div class="item-img one">
                        <img src="{{ asset('img/empresa/img-1.webp') }}" alt="Imagem Excelência">
                    </div>

                    <h2>
                        {{ __('empresa.word_1') }}
                    </h2>
                </div>
                
                <div class="item">
                    <div class="item-img two">
                        <img src="{{ asset('img/empresa/img-3.webp') }}" alt="Imagem Qualidade">
                    </div>

                    <h2>
                        {{ __('empresa.word_2') }}
                    </h2>
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
        'title' => __('empresa.saiba.title'),
        'subtitle' => __('empresa.saiba.subtitle'),
        'route' => 'produtos.tp-056e'
    ])
@endsection