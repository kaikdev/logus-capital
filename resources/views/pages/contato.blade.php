@extends('layouts.layout')

{{-- SEO --}}
@section('title', __('main.header.link_8'))
@section('description-seo', $metatag->description ?? getItem('client'))

@section('head')
    <link rel="stylesheet" href="{{ asset('css/contato.css') }}">
@endsection

@section('content')
    <main>
        <div class="content">
            <div class="contato">
                <div class="title-default">
                    <h1>
                        {!! __('contato.title1') !!}
                    </h1>

                    <h2>
                        {!! __('contato.subtitle1') !!}
                    </h2>
                </div>

                <div class="conteudo">
                    <div class="left">
                        <form class="form-contato" action="{{ route('contato.enviar') }}" method="POST">
                            @csrf
                            
                            {{-- Honeypot --}}
                            <input type="text" name="website" value="" style="display:none">
                            
                            {{-- Timestamp --}}
                            <input type="hidden" name="form_time" value="{{ now()->timestamp }}">

                            <div class="item-input">
                                <label for="name">
                                    {{ __('contato.label_1') }}
                                </label>

                                <input class="animate" data-animate="left" type="text" id="name" name="name" required>
                            </div>
                            
                            <div class="item-input">
                                <label for="phone">
                                    {{ __('contato.label_2') }}
                                </label>

                                <input class="animate" data-animate="top" type="text" id="phone" name="phone" oninput="this.value = formatPhone(this.value)" maxlength="15" required>
                            </div>

                            <div class="item-input">
                                <label for="email">
                                    {{ __('contato.label_3') }}
                                </label>

                                <input class="animate" data-animate="left" type="email" id="email" name="email" required>
                            </div>

                            <div class="item-input">
                                <label for="message">
                                    {{ __('contato.label_4') }}
                                </label>

                                <textarea class="animate" data-animate="top" type="text" rows="5" id="message" name="message" required></textarea>
                            </div>

                            <div class="area-termos">
                                <input id="termos" name="checkbox" type="checkbox" required>

                                <label for="termos">{{ __('leads.lead.inicio_termos') }} <a href="{{ route_lang('termos') }}">{{ __('leads.lead.termos_1') }}</a> {{ __('leads.lead.meio_termos') }} <a href="{{ route_lang('termos') }}">{{ __('leads.lead.termos_2') }}</a> {{ __('leads.lead.final_termos') }}</label>
                            </div>

                            <button class="btn-default animate" data-animate="bottom" type="submit">
                                {{ __('contato.botao') }}
                            </button>
                        </form>
                    </div>

                    <div class="right">
                        <div class="area-img">
                            <img src="{{ asset('img/home/proposito.webp') }}" alt="Imagem contato">
                        </div>

                        <div class="area-img">
                            <img src="{{ asset('img/home/proposito.webp') }}" alt="Imagem contato">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('includes.saiba-mais', [
        'title' => __('contato.saiba.title'),
        'subtitle' => __('contato.saiba.subtitle'),
        'route' => __('contato.saiba.route'),
    ])
@endsection

@section('scripts')
    <script>
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