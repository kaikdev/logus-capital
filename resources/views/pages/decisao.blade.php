@extends('layouts.layout')

{{-- SEO --}}
@section('title', __('main.header.link_4'))
@section('description-seo', $metatag->description ?? getItem('client'))

@section('head')
    <link rel="stylesheet" href="{{ asset('css/decisao.css') }}">
@endsection

@section('content')
    <main>
        <div class="content">
            <div class="decisao">
                <div class="title-default">
                    <h1>
                        {!! __('decisao.title1') !!}
                    </h1>

                    <h2>
                        {!! __('decisao.subtitle1') !!}
                    </h2>
                </div>

                <div class="conteudo">
                    <p>
                        {!! __('decisao.text1') !!}
                    </p>

                    <p>
                        {!! __('decisao.text2') !!}
                    </p>

                    <div class="area-itens">
                        <div class="item">

                        </div>
                    </div>

                    <h4>
                        {!! __('decisao.title-text') !!}
                    </h4>

                    <p>
                        {!! __('decisao.text3') !!}
                    </p>

                    <p>
                        {!! __('decisao.text4') !!}
                    </p>
                </div>
            </div>
        </div>
    </main>


    @include('includes.saiba-mais', [
        'title' => __('decisao.saiba.title'),
        'subtitle' => __('decisao.saiba.subtitle'),
        'route' => __('decisao.saiba.route'),
    ])

    @include('includes.lead', [
        'title' => __('leads.lead.title'),
        'subtitle' => __('leads.lead.subtitle'),
        'botao' => __('leads.lead.botao'),
    ])
@endsection