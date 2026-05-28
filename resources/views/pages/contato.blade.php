@extends('layouts.layout')

{{-- SEO --}}
@section('title', __('contato.title'))
@section('description-seo', !empty($metatag) ? $metatag->descricao : getItem('client'))

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/contato.css') }}">
@endsection

@section('content')
    <section class="banner">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('img/contato/banner-1.webp') }}" alt="Banner">

                    <h1 class="title-banner-swipper">
                        {!! __('contato.banner') !!}
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <main class="contato">
        <div class="content">
            <div class="left">
                <h1 class="animate" data-animate="top">
                    {{ __('contato.title') }}
                </h1>

                <p class="animate" data-animate="left">
                    {{ __('contato.text') }}
                </p>

                <form class="form-contato" action="{{ route('contato.enviar') }}" method="POST">
                    @csrf
                    
                    {{-- Honeypot --}}
                    <input type="text" name="website" value="" style="display:none">
                    
                    {{-- Timestamp --}}
                    <input type="hidden" name="form_time" value="{{ now()->timestamp }}">
    
                    <input class="animate" data-animate="left" type="text" placeholder="{{ __('contato.label_1') }}" name="name" required>
                    
                    <div class="grid-input">
                        <input class="animate" data-animate="top" type="text" placeholder="{{ __('contato.label_2') }}" name="phone" oninput="this.value = formatPhone(this.value)" maxlength="15" required>

                        <input class="animate" data-animate="left" type="email" placeholder="{{ __('contato.label_3') }}" name="email" required>
                    </div>

                    <textarea class="animate" data-animate="top" type="text" rows="10" placeholder="{{ __('contato.label_4') }}" name="message" required></textarea>

                    <button class="animate" data-animate="bottom" type="submit">
                        {{ __('contato.label_5') }}
                    </button>
                </form>
            </div>
        </div>

        <h3 class="text-decoration">
            {{ __('contato.subtitle') }}
        </h3>
    </main>

    @include('includes.lead', [
        'title' => __('leads.lead.title'),
        'subtitle' => __('leads.lead.subtitle'),
        'botao' => __('leads.lead.botao'),
    ])
    
    @include('includes.saiba-mais', [
        'title' => __('contato.saiba.title'),
        'subtitle' => __('contato.saiba.subtitle'),
        'route' => 'empresa'
    ])
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        const swiper = new Swiper(".banner .swiper", {
            loop: true,
            rewind: true,
            effect: "slide",
            autoplay: {
                delay: 4000,
            },
            speed: 2000,
        });


        function formatPhone(value) {
            const numbers = value.replace(/\D/g, '');
            
            if (numbers.length <= 10) {
                return numbers.replace(/(\d{2})(\d{4})(\d{0,4})/, function(_, a, b, c) {
                    return c ? `(${a}) ${b}-${c}` : `(${a}) ${b}`;
                });
            }
            
            return numbers.replace(/(\d{2})(\d{5})(\d{0,4})/, function(_, a, b, c) {
                return c ? `(${a}) ${b}-${c}` : `(${a}) ${b}`;
            });
        }
    </script>
@endsection