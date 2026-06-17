@extends('layouts.layout')

{{-- SEO --}}
@section('title', __('main.header.link_7'))
@section('description-seo', $metatag->description ?? getItem('client'))

@section('head')
    <link rel="stylesheet" href="{{ asset('css/faq.css') }}">
@endsection

@section('content')
    <main>
        <div class="content">
            <div class="faq">
                <div class="title-default">
                    <h1>
                        {!! __('faq.title1') !!}
                    </h1>

                    <h2>
                        {!! __('faq.subtitle1') !!}
                    </h2>
                </div>

                <div class="conteudo">
                    <p>
                        
                    </p>
                </div>
            </div>
        </div>
    </main>

    @include('includes.saiba-mais', [
        'title' => __('faq.saiba.title'),
        'subtitle' => __('faq.saiba.subtitle'),
        'route' => __('faq.saiba.route'),
    ])

    @include('includes.lead', [
        'title' => __('leads.lead.title'),
        'subtitle' => __('leads.lead.subtitle'),
        'botao' => __('leads.lead.botao'),
    ])
@endsection

@section('scripts')
    
@endsection