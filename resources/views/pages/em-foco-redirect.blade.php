@extends('layouts.layout')

{{-- SEO --}}
@section('title', $item->title)
@section('description-seo', Str::limit(strip_tags($item->resume), 160))

@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
<link rel="stylesheet" href="{{ asset('css/em-foco.css') }}">
<link rel="stylesheet" href="{{ asset('css/em-foco-redirect.css') }}">
@endsection

@section('content')
    @once
        @push('styles')
            <link rel="stylesheet" href="{{ asset('css/breadcrumb.css') }}">
            
            <style>
                .box-dropdown {
                    position: absolute;
                    top: 100%;
                    left: 0;
                    right: 0;
                    background: #fff;
                    border-radius: 6px;
                    box-shadow: 0 10px 30px rgba(0,0,0,.15);
                    z-index: 100;
                    max-height: 300px;
                    overflow-y: auto;
                }
                
                .box-dropdown a {
                    display: flex;
                    gap: 10px;
                    padding: 10px;
                    text-decoration: none;
                    color: #000;
                    border-bottom: 1px solid #eee;
                }
                
                .box-dropdown a:hover {
                    background: #f5f5f5;
                }
                
                .box-dropdown img {
                    width: 50px;
                    height: 50px;
                    object-fit: cover;
                    border-radius: 4px;
                }
                
                .no-result {
                    padding: 10px;
                    text-align: center;
                    color: #777;
                }
            </style>
        @endpush
    @endonce

    <div class="breadcrumb">
        <div class="content">
            <ul>
                <li>
                    <a href="{{ route('em-foco') }}">Em foco</a>
                </li>
                
                <li class="separator">
                    |
                </li>

                <li>
                    {{ $item->title }}
                </li>
            </ul>
        </div>
    </div>

    <div class="content">
        <main class="redirect">
            <div class="item-acompanhe principal">
                <div class="left">
                    <h4 class="title">
                        {{ $item->title }}
                    </h4>

                    <p class="date">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M19 7.001c0 3.865-3.134 7-7 7s-7-3.135-7-7c0-3.867 3.134-7.001 7-7.001s7 3.134 7 7.001zm-1.598 7.18c-1.506 1.137-3.374 1.82-5.402 1.82-2.03 0-3.899-.685-5.407-1.822-4.072 1.793-6.593 7.376-6.593 9.821h24c0-2.423-2.6-8.006-6.598-9.819z"></path>
                            </svg>
                            
                            {{ $item->author ?? 'Fátima Teixeira' }}
                        </span>
                        
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M20 20h-4v-4h4v4zm-6-10h-4v4h4v-4zm6 0h-4v4h4v-4zm-12 6h-4v4h4v-4zm6 0h-4v4h4v-4zm-6-6h-4v4h4v-4zm16-8v22h-24v-22h3v1c0 1.103.897 2 2 2s2-.897 2-2v-1h10v1c0 1.103.897 2 2 2s2-.897 2-2v-1h3zm-2 6h-20v14h20v-14zm-2-7c0-.552-.447-1-1-1s-1 .448-1 1v2c0 .552.447 1 1 1s1-.448 1-1v-2zm-14 2c0 .552-.447 1-1 1s-1-.448-1-1v-2c0-.552.447-1 1-1s1 .448 1 1v2z"></path>
                            </svg>
                            
                            {{ $item->published_at->format('d/m/Y') }}
                        </span>
                    </p>

                    <div class="resume">
                        {!! nl2br(e($item->text)) !!}
                    </div>
                </div>

                <div class="right">
                    <div class="swiper area-image">
                        <div class="swiper-wrapper">
                            @php
                                $images = [];
                    
                                if (!empty($item->gallery)) {
                                    foreach ($item->gallery as $group) {
                                        if (!empty($group['data']['imagens'])) {
                                            $images[] = $group['data']['imagens'];
                                        }
                                    }
                                }
                            @endphp
                    
                            @forelse ($images as $image)
                                <div class="swiper-slide">
                                    <a href="{{ asset('storage/' . $image) }}" data-fancybox="gallery">
                                        <img
                                            src="{{ asset('storage/' . $image) }}"
                                            alt="{{ $item->title }}"
                                        >
                                    </a>
                                </div>
                            @empty
                                <div class="swiper-slide">
                                    <img
                                        src="{{ asset('storage/placeholder.webp') }}"
                                        alt="Imagem indisponível"
                                    >
                                </div>
                            @endforelse
                        </div>
                    
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>

            <div class="mini-acompanhes">
                <span class="tag-last-posts">
                    Últimos em foco
                </span>

                <div class="area-search active">
                    <input id="search" type="text" placeholder="Pesquise aqui...">

                    <div class="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                            <path d="M480 272C480 317.9 465.1 360.3 440 394.7L566.6 521.4C579.1 533.9 579.1 554.2 566.6 566.7C554.1 579.2 533.8 579.2 521.3 566.7L394.7 440C360.3 465.1 317.9 480 272 480C157.1 480 64 386.9 64 272C64 157.1 157.1 64 272 64C386.9 64 480 157.1 480 272zM272 416C351.5 416 416 351.5 416 272C416 192.5 351.5 128 272 128C192.5 128 128 192.5 128 272C128 351.5 192.5 416 272 416z"></path>
                        </svg>
                    </div>
                    
                    <div class="box-dropdown" id="box-dropdown" style="display: none;"></div>
                </div>

                @foreach ($latest as $post)
                    <a href="{{ route('em-foco-redirect', $post->slug) }}" class="item-acompanhe">
                        <div class="right">
                            <div class="area-image">
                                @php
                                    $img = null;
                
                                    if (!empty($post->gallery) && isset($post->gallery[0]['data']['imagens'])) {
                                        $img = asset('storage/' . $post->gallery[0]['data']['imagens']);
                                    }
                                @endphp
                
                                <img src="{{ $img ?? asset('storage/placeholder.webp') }}"
                                     alt="{{ $post->title }}">
                            </div>
                        </div>
                
                        <div class="left">
                            <h4 class="title">{{ $post->title }}</h4>
                            <p class="date">
                                {{ $post->published_at->format('d/m/Y') }}
                            </p>
                        </div>
                    </a>
                @endforeach
            </div>
        </main>
    </div>

@include('includes.saiba-mais', [
    'title' => '',
    'subtitle' => 'voltar',
    'route' => 'em-foco'
])

@include('includes.lead', [
    'title' => 'Transforme conhecimento em resultados',
    'subtitle' => 'saiba como!'
])
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Fancybox.bind('[data-fancybox="gallery"]', {});
            
            new Swiper('.area-image', {
                loop: true,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                speed: 800,
                slidesPerView: 1,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                effect: 'slide',
                grabCursor: true,
            });
        });
    </script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        
            const input = document.getElementById('search');
            const dropdown = document.getElementById('box-dropdown');
        
            let timer = null;
        
            input.addEventListener('keyup', function () {
                clearTimeout(timer);
        
                const query = this.value.trim();
                //console.log('Digitado:', query);
        
                if (query.length < 2) {
                    dropdown.style.display = 'none';
                    dropdown.innerHTML = '';
                    return;
                }
        
                timer = setTimeout(() => {
                    const url = `{{ route('em-foco.search') }}?q=${encodeURIComponent(query)}`;
                    //console.log('Buscando:', url);
        
                    fetch(url, {
                        headers: {
                            'Accept': 'application/json'
                        }
                    })
                    .then(res => {
                        //console.log('Status:', res.status);
                        return res.text();
                    })
                    .then(text => {
                        //console.log('Resposta crua:', text);
        
                        let data;
                        try {
                            data = JSON.parse(text);
                        } catch (e) {
                            console.error('Não é JSON');
                            return;
                        }
        
                        dropdown.innerHTML = '';
        
                        if (!data.length) {
                            dropdown.innerHTML = `<div class="no-result">Nenhum resultado encontrado</div>`;
                            dropdown.style.display = 'block';
                            return;
                        }
        
                        data.forEach(post => {
                            let image = '{{ asset('storage/placeholder.webp') }}';
        
                            if (post.gallery && post.gallery[0]?.data?.imagens) {
                                image = '{{ asset('storage') }}/' + post.gallery[0].data.imagens;
                            }
        
                            dropdown.innerHTML += `
                                <a href="{{ url('/em-foco') }}/${post.slug}">
                                    <img src="${image}">
                                    <div>
                                        <strong>${post.title}</strong><br>
                                        <small>${new Date(post.published_at).toLocaleDateString('pt-BR')}</small>
                                    </div>
                                </a>
                            `;
                        });
        
                        dropdown.style.display = 'block';
                    })
                    .catch(err => console.error('Erro fetch:', err));
        
                }, 300);
            });
        
            document.addEventListener('click', function (e) {
                if (!e.target.closest('.area-search')) {
                    dropdown.style.display = 'none';
                }
            });
        });
    </script>
@endsection