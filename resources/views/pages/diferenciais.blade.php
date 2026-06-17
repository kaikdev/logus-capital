@extends('layouts.layout')

{{-- SEO --}}
@section('title', __('main.header.link_2'))
@section('description-seo', $metatag->description ?? getItem('client'))

@section('head')
    <link rel="stylesheet" href="{{ asset('css/diferenciais.css') }}">
@endsection

@section('content')
    <main>
        <div class="content">
            <div class="diferenciais">
                <div class="title-default">
                    <h1>
                        {!! __('diferenciais.title1') !!}
                    </h1>

                    <h2>
                        {!! __('diferenciais.subtitle1') !!}
                    </h2>
                </div>

                <div class="conteudo">
                    <div class="item-def" id="mini1">
                        <div class="area-img">
                            <img src="{{ asset('img/home/diferenciais-1.webp') }}" alt="{!! __('diferenciais.item1.title') !!}">
                        </div>

                        <div class="text">
                            <h3>
                                {!! __('diferenciais.item1.title') !!}
                            </h3>

                            <p>
                                {!! __('diferenciais.item1.subtitle') !!}
                            </p>
                            
                            <a href="#" class="link" target="_blank">
                                {!! __('diferenciais.item1.link') !!}
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="item-full" id="full1">
                        <div class="text">
                            <h3>
                                {!! __('diferenciais.item1.subtitle') !!}
                            </h3>

                            <div>
                                {!! __('diferenciais.item1.text') !!}

                                <a href="#">
                                    Leia menos
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                                </a>
                            </div>
                        </div>

                        <div class="area-img">
                            <img src="{{ asset('img/diferenciais/diferenciais-1-interna.webp') }}" alt="{!! __('diferenciais.item1.title') !!}">

                            <h3>
                                {!! __('diferenciais.item1.title') !!}
                            </h3>
                        </div>
                    </div>

                    <div class="item-def" id="mini4">
                        <div class="text">
                            <h3>
                                {!! __('diferenciais.item2.title') !!}
                            </h3>

                            <p>
                                {!! __('diferenciais.item2.subtitle') !!}
                            </p>
                            
                            <a href="#" class="link" target="_blank">                            
                                {!! __('diferenciais.item2.link') !!}
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                            </a>
                        </div>

                        <div class="area-img">
                            <img src="{{ asset('img/home/diferenciais-2.webp') }}" alt="{!! __('diferenciais.item2.title') !!}">
                        </div>
                    </div>
                    <div class="item-full" id="full4">
                        <div class="text">
                            <h3>
                                {!! __('diferenciais.item2.subtitle') !!}
                            </h3>

                            <div>
                                {!! __('diferenciais.item2.text') !!}

                                <a href="#">
                                    Leia menos
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                                </a>
                            </div>
                        </div>

                        <div class="area-img">
                            <img src="{{ asset('img/diferenciais/diferenciais-2-interna.webp') }}" alt="{!! __('diferenciais.item2.title') !!}">

                            <h3>
                                {!! __('diferenciais.item2.title') !!}
                            </h3>
                        </div>
                    </div>

                    <div class="item-def" id="mini3">
                        <div class="text">
                            <h3>
                                {!! __('diferenciais.item3.title') !!}
                            </h3>

                            <p>
                                {!! __('diferenciais.item3.subtitle') !!}
                            </p>
                            
                            <a href="#" class="link" target="_blank">                            
                                {!! __('diferenciais.item3.link') !!}
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                            </a>
                        </div>

                        <div class="area-img">
                            <img src="{{ asset('img/home/diferenciais-3.webp') }}" alt="{!! __('diferenciais.item3.title') !!}">
                        </div>
                    </div>
                    <div class="item-full" id="full3">
                        <div class="text">
                            <h3>
                                {!! __('diferenciais.item3.subtitle') !!}
                            </h3>

                            <div>
                                {!! __('diferenciais.item3.text') !!}

                                <a href="#">
                                    Leia menos
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                                </a>
                            </div>
                        </div>

                        <div class="area-img">
                            <img src="{{ asset('img/diferenciais/diferenciais-3-interna.webp') }}" alt="{!! __('diferenciais.item3.title') !!}">

                            <h3>
                                {!! __('diferenciais.item3.title') !!}
                            </h3>
                        </div>
                    </div>

                    <div class="item-def" id="mini2">
                        <div class="area-img">
                            <img src="{{ asset('img/home/diferenciais-4.webp') }}" alt="{!! __('diferenciais.item4.title') !!}">
                        </div>

                        <div class="text">
                            <h3>
                                {!! __('diferenciais.item4.title') !!}
                            </h3>

                            <p>
                                {!! __('diferenciais.item4.subtitle') !!}
                            </p>
                            
                            <a href="#" class="link" target="_blank">
                                {!! __('diferenciais.item4.link') !!}
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                            </a>
                        </div>
                    </div>
                    <div class="item-full" id="full2">
                        <div class="text">
                            <h3>
                                {!! __('diferenciais.item4.subtitle') !!}
                            </h3>

                            <div>
                                {!! __('diferenciais.item4.text') !!}

                                <a href="#">
                                    Leia menos
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                                </a>
                            </div>
                        </div>

                        <div class="area-img">
                            <img src="{{ asset('img/diferenciais/diferenciais-4-interna.webp') }}" alt="{!! __('diferenciais.item4.title') !!}">

                            <h3>
                                {!! __('diferenciais.item4.title') !!}
                            </h3>
                        </div>
                    </div>

                    <p>
                        {!! __('diferenciais.text') !!}
                    </p>
                </div>
            </div>
        </div>
    </main>


    @include('includes.saiba-mais', [
        'title' => __('diferenciais.saiba.title'),
        'subtitle' => __('diferenciais.saiba.subtitle'),
        'route' => __('diferenciais.saiba.route'),
    ])

    @include('includes.lead', [
        'title' => __('leads.lead.title'),
        'subtitle' => __('leads.lead.subtitle'),
        'botao' => __('leads.lead.botao'),
    ])
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.item-full').forEach(full => {
                full.classList.remove('on');
            });

            document.querySelectorAll('.item-def .link').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();

                    const mini = this.closest('.item-def');
                    const id = mini.id.replace('mini', '');
                    const full = document.getElementById(`full${id}`);

                    mini.classList.add('hidden');

                    setTimeout(() => {
                        full.classList.add('on');
                    }, 200);
                });
            });

            document.querySelectorAll('.item-full a').forEach(btn => {
                if (!btn.textContent.toLowerCase().includes('leia menos')) return;

                btn.addEventListener('click', function(e) {
                    e.preventDefault();

                    const full = this.closest('.item-full');
                    const id = full.id.replace('full', '');
                    const mini = document.getElementById(`mini${id}`);

                    full.classList.remove('on');

                    setTimeout(() => {
                        mini.classList.remove('hidden');
                    }, 300);
                });
            });
        });
    </script>
@endsection