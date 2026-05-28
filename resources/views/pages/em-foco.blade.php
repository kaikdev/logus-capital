@extends('layouts.layout')

@section('title', 'Em foco')
@section('description-seo', !empty($metatag) ? $metatag->descricao : getItem('client'))

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/em-foco.css') }}">
@endsection

@section('content')
    <main class="content">
        <div class="title animate" data-animate="left">
            <h1>Em foco</h1>
        </div>

        <div class="area-top">
            {{-- IMAGENS DO POST PRINCIPAL --}}
            <div class="img-principal animate" data-animate="top">
                <div class="swiper area-image" id="swiper-principal">
                    <div class="swiper-wrapper" id="swiper-wrapper-principal">
                        @if ($principal)
                            @php
                                $images = collect($principal->gallery ?? [])
                                    ->pluck('data.imagens')
                                    ->filter()
                                    ->values();
                            @endphp

                            @php
                                $gallery = collect($principal->gallery ?? [])->map(function ($group) {
                                    if (($group['type'] ?? '') === 'video' && !empty($group['data']['url'])) {
                                        preg_match(
                                            '/(?:youtube\.com\/(?:watch\?v=|shorts\/)|youtu\.be\/)([a-zA-Z0-9_-]{11})/',
                                            $group['data']['url'],
                                            $m
                                        );
                                        return [
                                            'type' => 'video',
                                            'src'  => isset($m[1]) ? 'https://www.youtube.com/embed/' . $m[1] : $group['data']['url'],
                                        ];
                                    }
                                    if (!empty($group['data']['imagens'])) {
                                        return ['type' => 'image', 'src' => asset('storage/' . $group['data']['imagens'])];
                                    }
                                    return null;
                                })->filter()->values();
                            @endphp

                            @forelse ($gallery as $media)
                                <div class="swiper-slide">
                                    @if ($media['type'] === 'video')
                                        <iframe
                                            src="{{ $media['src'] }}"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen>
                                        </iframe>
                                    @else
                                        <a href="{{ $media['src'] }}" data-fancybox="galeria">
                                            <img src="{{ $media['src'] }}" alt="{{ $principal->title }}">
                                        </a>
                                    @endif
                                </div>
                            @empty
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/placeholder.webp') }}" alt="Imagem indisponível">
                                </div>
                            @endforelse
                        @endif
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            {{-- LISTA LATERAL COM PESQUISA E PAGINAÇÃO --}}
            <div class="area-list animate" data-animate="left">

                <div class="area-search active">
                    <input id="search" type="text" placeholder="PESQUISAR. . .">
                    <label for="search" class="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                            <path d="M480 272C480 317.9 465.1 360.3 440 394.7L566.6 521.4C579.1 533.9 579.1 554.2 566.6 566.7C554.1 579.2 533.8 579.2 521.3 566.7L394.7 440C360.3 465.1 317.9 480 272 480C157.1 480 64 386.9 64 272C64 157.1 157.1 64 272 64C386.9 64 480 157.1 480 272zM272 416C351.5 416 416 351.5 416 272C416 192.5 351.5 128 272 128C192.5 128 128 192.5 128 272C128 351.5 192.5 416 272 416z"></path>
                        </svg>
                    </label>
                    <div class="box-dropdown" id="box-dropdown" style="display: none;"></div>
                </div>

                {{-- ITENS DA LISTA --}}
                <div id="lista-posts" class="list-posts">
                    @foreach ($lista as $post)
                        <a href="{{ route('em-foco-redirect', $post->slug) }}"
                           class="item-list js-post-link"
                           data-slug="{{ $post->slug }}">
                            <div class="left">
                                <p class="title">{{ $post->title }}</p>
                            </div>
                        </a>
                    @endforeach
                </div>

                {{-- PAGINAÇÃO --}}
                @if ($lista->lastPage() > 1)
                    <div class="pagination" id="pagination" data-current="{{ $lista->currentPage() }}" data-last="{{ $lista->lastPage() }}">
                        <button type="button" class="arrow left" id="pag-prev">&lt;</button>

                        @for ($i = 1; $i <= $lista->lastPage(); $i++)
                            <button type="button" class="pag-num {{ $lista->currentPage() == $i ? 'active' : '' }}" data-page="{{ $i }}">
                                {{ $i }}
                            </button>
                        @endfor

                        <button type="button" class="arrow right" id="pag-next">&gt;</button>
                    </div>
                @endif

            </div>

            {{-- CONTEÚDO DO POST PRINCIPAL --}}
            <div class="area-bottom" id="area-bottom">
                @if ($principal)
                    <h2 class="title" id="post-title">{{ $principal->title }}</h2>

                    <div class="date">
                        <p>
                            <span id="post-date">{{ $principal->published_at->format('d/m/Y') }}</span>
                            |
                            <span id="post-author">{{ $principal->author ?? 'Fátima Teixeira' }}</span>
                        </p>
                    </div>

                    <div class="area-text" id="post-text">
                        {!! nl2br(e($principal->text)) !!}
                    </div>
                @endif
            </div>

        </div>
    </main>

    @include('includes.lead', [
        'title' => 'Receba nossas news e fique por',
        'subtitle' => 'dentro do mercado!'
    ])
    
    @include('includes.saiba-mais', [
        'title' => 'Entre em contato',
        'subtitle' => 'clique aqui',
        'route' => 'contato'
    ])
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        // ─── Estado ───────────────────────────────────────────────────────────────────
        let swiperInstance  = null;
        let currentSlug     = '{{ $principal?->slug ?? '' }}';
        let currentTitle    = '';
        let currentPage     = {{ $lista->currentPage() }};

        // ─── Swiper ───────────────────────────────────────────────────────────────────
        function initSwiper() {
            if (swiperInstance) {
                swiperInstance.destroy(true, true);
                swiperInstance = null;
            }

            swiperInstance = new Swiper('#swiper-principal', {
                loop: true,
                autoplay: { delay: 4000, disableOnInteraction: false },
                speed: 800,
                slidesPerView: 1,
                pagination: { el: '.swiper-pagination', clickable: true },
                effect: 'slide',
                grabCursor: true,
            });

            Fancybox.bind('[data-fancybox="galeria"]', {});
        }

        // ─── Atualizar slides ─────────────────────────────────────────────────────────
        function updateSlides(gallery, title) {
            const wrapper = document.getElementById('swiper-wrapper-principal');
            wrapper.innerHTML = '';

            if (gallery.length) {
                gallery.forEach(media => {
                    if (media.type === 'video') {
                        wrapper.innerHTML += `
                            <div class="swiper-slide">
                                <iframe
                                    src="${media.src}"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </div>`;
                    } else {
                        wrapper.innerHTML += `
                            <div class="swiper-slide">
                                <a href="${media.src}" data-fancybox="galeria">
                                    <img src="${media.src}" alt="${title}">
                                </a>
                            </div>`;
                    }
                });
            } else {
                wrapper.innerHTML = `
                    <div class="swiper-slide">
                        <img src="{{ asset('storage/placeholder.webp') }}" alt="Imagem indisponível">
                    </div>`;
            }
        }

        // ─── Remover/inserir post na lista ────────────────────────────────────────────

        // Remove um item da lista pelo slug
        function removeFromList(slug) {
            const el = document.querySelector(`#lista-posts .js-post-link[data-slug="${slug}"]`);
            if (el) el.remove();
        }

        // Insere o post anterior de volta na lista (no topo)
        function insertIntoList(slug, title) {
            if (!slug) return;

            // Evita duplicata
            if (document.querySelector(`#lista-posts .js-post-link[data-slug="${slug}"]`)) return;

            const lista = document.getElementById('lista-posts');
            const a = document.createElement('a');
            a.href        = `/em-foco/${slug}`;
            a.className   = 'item-list js-post-link';
            a.dataset.slug = slug;
            a.innerHTML   = `<div class="left"><p class="title">${title}</p></div>`;

            lista.insertBefore(a, lista.firstChild);
        }

        // ─── Carregar post via AJAX ───────────────────────────────────────────────────
        function loadPost(slug) {
            fetch(`/em-foco/${slug}`, {
                headers: { 'Accept': 'application/json', 'X-Requested-With': 'XMLHttpRequest' }
            })
            .then(res => res.json())
            .then(data => {
                // Guarda o slug/título do principal atual antes de trocar
                const previousSlug  = currentSlug;
                const previousTitle = currentTitle || document.getElementById('post-title').textContent.trim();

                // Atualiza conteúdo principal
                document.getElementById('post-title').textContent  = data.title;
                document.getElementById('post-date').textContent   = data.published_at;
                document.getElementById('post-author').textContent = data.author;
                document.getElementById('post-text').innerHTML     = data.text;

                updateSlides(data.gallery, data.title);
                initSwiper();

                // Atualiza estado
                currentTitle = data.title;
                currentSlug  = slug;

                // Gerencia lista: reinsere o anterior, remove o novo
                insertIntoList(previousSlug, previousTitle);
                removeFromList(slug);

                history.pushState({ slug, title: data.title }, '', `/em-foco/${slug}`);

                document.getElementById('area-bottom').scrollIntoView({ behavior: 'smooth' });
            })
            .catch(err => console.error('Erro ao carregar post:', err));
        }

        // ─── Delegação de clique na lista ─────────────────────────────────────────────
        document.getElementById('lista-posts').addEventListener('click', function (e) {
            const link = e.target.closest('.js-post-link');
            if (!link) return;
            e.preventDefault();
            loadPost(link.dataset.slug);
        });

        // ─── Paginação AJAX ───────────────────────────────────────────────────────────
        const paginationEl = document.getElementById('pagination');

        if (paginationEl) {
            paginationEl.addEventListener('click', function (e) {
                const btn = e.target.closest('button');
                if (!btn) return;

                const last = parseInt(paginationEl.dataset.last);
                let page;

                if (btn.id === 'pag-prev') {
                    page = Math.max(1, currentPage - 1);
                } else if (btn.id === 'pag-next') {
                    page = Math.min(last, currentPage + 1);
                } else {
                    page = parseInt(btn.dataset.page);
                }

                if (page === currentPage) return;

                fetch(`{{ route('em-foco') }}?page=${page}`, {
                    headers: { 'Accept': 'application/json', 'X-Requested-With': 'XMLHttpRequest' }
                })
                .then(res => res.json())
                .then(data => {
                    const lista = document.getElementById('lista-posts');
                    lista.innerHTML = '';

                    data.data.forEach(post => {
                        // Não exibe o post que está como principal
                        if (post.slug === currentSlug) return;

                        lista.innerHTML += `
                            <a href="/em-foco/${post.slug}"
                            class="item-list js-post-link"
                            data-slug="${post.slug}">
                                <div class="left">
                                    <p class="title">${post.title}</p>
                                </div>
                            </a>`;
                    });

                    currentPage = page;
                    paginationEl.dataset.current = page;
                    paginationEl.querySelectorAll('.pag-num').forEach(b => {
                        b.classList.toggle('active', parseInt(b.dataset.page) === page);
                    });
                })
                .catch(err => console.error('Erro paginação:', err));
            });
        }

        // ─── Pesquisa ─────────────────────────────────────────────────────────────────
        document.addEventListener('DOMContentLoaded', function () {
            initSwiper();

            // Captura o título inicial do principal
            const titleEl = document.getElementById('post-title');
            if (titleEl) currentTitle = titleEl.textContent.trim();

            const input    = document.getElementById('search');
            const dropdown = document.getElementById('box-dropdown');
            let timer      = null;

            input.addEventListener('keyup', function () {
                clearTimeout(timer);
                const query = this.value.trim();

                if (query.length < 2) {
                    dropdown.style.display = 'none';
                    dropdown.innerHTML = '';
                    return;
                }

                timer = setTimeout(() => {
                    fetch(`{{ route('em-foco.search') }}?q=${encodeURIComponent(query)}`, {
                        headers: { 'Accept': 'application/json' }
                    })
                    .then(res => res.json())
                    .then(data => {
                        dropdown.innerHTML = '';

                        if (!data.length) {
                            dropdown.innerHTML = `<div class="no-result">Nenhum resultado encontrado</div>`;
                            dropdown.style.display = 'block';
                            return;
                        }

                        data.forEach(post => {
                            const a = document.createElement('a');
                            a.href = '#';
                            a.innerHTML = `
                                <img src="${post.thumb}">
                                <div>
                                    <strong>${post.title}</strong><br>
                                    <small>${new Date(post.published_at).toLocaleDateString('pt-BR')}</small>
                                </div>`;

                            a.addEventListener('click', function (e) {
                                e.preventDefault();
                                dropdown.style.display = 'none';
                                input.value = '';
                                loadPost(post.slug);
                            });

                            dropdown.appendChild(a);
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

        // ─── Botão voltar/avançar do browser ─────────────────────────────────────────
        window.addEventListener('popstate', function (e) {
            if (e.state?.slug) {
                loadPost(e.state.slug);
            }
        });
    </script>
@endsection