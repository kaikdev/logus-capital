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
                    <div class="left">
                        <button type="button" class="section on">
                            {!! __('faq.section1') !!}
                            
                            <div class="icon">
                                <svg class="plus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M352 128C352 110.3 337.7 96 320 96C302.3 96 288 110.3 288 128L288 288L128 288C110.3 288 96 302.3 96 320C96 337.7 110.3 352 128 352L288 352L288 512C288 529.7 302.3 544 320 544C337.7 544 352 529.7 352 512L352 352L512 352C529.7 352 544 337.7 544 320C544 302.3 529.7 288 512 288L352 288L352 128z"/></svg>

                                <svg class="minus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M96 320C96 302.3 110.3 288 128 288L512 288C529.7 288 544 302.3 544 320C544 337.7 529.7 352 512 352L128 352C110.3 352 96 337.7 96 320z"/></svg>
                            </div>
                        </button>

                        <button type="button" class="section">
                            {!! __('faq.section2') !!}

                            <div class="icon">
                                <svg class="plus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M352 128C352 110.3 337.7 96 320 96C302.3 96 288 110.3 288 128L288 288L128 288C110.3 288 96 302.3 96 320C96 337.7 110.3 352 128 352L288 352L288 512C288 529.7 302.3 544 320 544C337.7 544 352 529.7 352 512L352 352L512 352C529.7 352 544 337.7 544 320C544 302.3 529.7 288 512 288L352 288L352 128z"/></svg>

                                <svg class="minus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M96 320C96 302.3 110.3 288 128 288L512 288C529.7 288 544 302.3 544 320C544 337.7 529.7 352 512 352L128 352C110.3 352 96 337.7 96 320z"/></svg>
                            </div>
                        </button>

                        <button type="button" class="section">
                            {!! __('faq.section3') !!}

                            <div class="icon">
                                <svg class="plus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M352 128C352 110.3 337.7 96 320 96C302.3 96 288 110.3 288 128L288 288L128 288C110.3 288 96 302.3 96 320C96 337.7 110.3 352 128 352L288 352L288 512C288 529.7 302.3 544 320 544C337.7 544 352 529.7 352 512L352 352L512 352C529.7 352 544 337.7 544 320C544 302.3 529.7 288 512 288L352 288L352 128z"/></svg>

                                <svg class="minus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M96 320C96 302.3 110.3 288 128 288L512 288C529.7 288 544 302.3 544 320C544 337.7 529.7 352 512 352L128 352C110.3 352 96 337.7 96 320z"/></svg>
                            </div>
                        </button>

                        <button type="button" class="section">
                            {!! __('faq.section4') !!}

                            <div class="icon">
                                <svg class="plus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M352 128C352 110.3 337.7 96 320 96C302.3 96 288 110.3 288 128L288 288L128 288C110.3 288 96 302.3 96 320C96 337.7 110.3 352 128 352L288 352L288 512C288 529.7 302.3 544 320 544C337.7 544 352 529.7 352 512L352 352L512 352C529.7 352 544 337.7 544 320C544 302.3 529.7 288 512 288L352 288L352 128z"/></svg>

                                <svg class="minus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M96 320C96 302.3 110.3 288 128 288L512 288C529.7 288 544 302.3 544 320C544 337.7 529.7 352 512 352L128 352C110.3 352 96 337.7 96 320z"/></svg>
                            </div>
                        </button>

                        <button type="button" class="section">
                            {!! __('faq.section5') !!}

                            <div class="icon">
                                <svg class="plus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M352 128C352 110.3 337.7 96 320 96C302.3 96 288 110.3 288 128L288 288L128 288C110.3 288 96 302.3 96 320C96 337.7 110.3 352 128 352L288 352L288 512C288 529.7 302.3 544 320 544C337.7 544 352 529.7 352 512L352 352L512 352C529.7 352 544 337.7 544 320C544 302.3 529.7 288 512 288L352 288L352 128z"/></svg>

                                <svg class="minus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M96 320C96 302.3 110.3 288 128 288L512 288C529.7 288 544 302.3 544 320C544 337.7 529.7 352 512 352L128 352C110.3 352 96 337.7 96 320z"/></svg>
                            </div>
                        </button>

                        <button type="button" class="section">
                            {!! __('faq.section6') !!}

                            <div class="icon">
                                <svg class="plus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M352 128C352 110.3 337.7 96 320 96C302.3 96 288 110.3 288 128L288 288L128 288C110.3 288 96 302.3 96 320C96 337.7 110.3 352 128 352L288 352L288 512C288 529.7 302.3 544 320 544C337.7 544 352 529.7 352 512L352 352L512 352C529.7 352 544 337.7 544 320C544 302.3 529.7 288 512 288L352 288L352 128z"/></svg>

                                <svg class="minus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M96 320C96 302.3 110.3 288 128 288L512 288C529.7 288 544 302.3 544 320C544 337.7 529.7 352 512 352L128 352C110.3 352 96 337.7 96 320z"/></svg>
                            </div>
                        </button>
                    </div>

                    <div class="right" id="faq">
                        <div class="questions on">
                            <div class="item">
                                <button type="button">
                                    {!! __('faq.questions1.title1') !!}

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                                </button>

                                <div>
                                    {!! __('faq.questions1.answer1') !!}
                                </div>
                            </div>

                            <div class="item">
                                <button type="button">
                                    {!! __('faq.questions1.title2') !!}

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                                </button>

                                <div>
                                    {!! __('faq.questions1.answer2') !!}
                                </div>
                            </div>

                            <div class="item">
                                <button type="button">
                                    {!! __('faq.questions1.title3') !!}

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                                </button>

                                <div>
                                    {!! __('faq.questions1.answer3') !!}
                                </div>
                            </div>
                        </div>

                        <div class="questions">
                            <div class="item">
                                <button type="button">
                                    {!! __('faq.questions2.title1') !!}

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                                </button>

                                <div>
                                    {!! __('faq.questions2.answer1') !!}
                                </div>
                            </div>

                            <div class="item">
                                <button type="button">
                                    {!! __('faq.questions2.title2') !!}

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                                </button>

                                <div>
                                    {!! __('faq.questions2.answer2') !!}
                                </div>
                            </div>

                            <div class="item">
                                <button type="button">
                                    {!! __('faq.questions2.title3') !!}

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                                </button>

                                <div>
                                    {!! __('faq.questions2.answer3') !!}
                                </div>
                            </div>

                            <div class="item">
                                <button type="button">
                                    {!! __('faq.questions2.title4') !!}

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                                </button>

                                <div>
                                    {!! __('faq.questions2.answer4') !!}
                                </div>
                            </div>
                        </div>

                        <div class="questions">
                            <div class="item">
                                <button type="button">
                                    {!! __('faq.questions3.title1') !!}

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                                </button>

                                <div>
                                    {!! __('faq.questions3.answer1') !!}
                                </div>
                            </div>

                            <div class="item">
                                <button type="button">
                                    {!! __('faq.questions3.title2') !!}

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                                </button>

                                <div>
                                    {!! __('faq.questions3.answer2') !!}
                                </div>
                            </div>

                            <div class="item">
                                <button type="button">
                                    {!! __('faq.questions3.title3') !!}

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                                </button>

                                <div>
                                    {!! __('faq.questions3.answer3') !!}
                                </div>
                            </div>

                            <div class="item">
                                <button type="button">
                                    {!! __('faq.questions3.title4') !!}

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                                </button>

                                <div>
                                    {!! __('faq.questions3.answer4') !!}
                                </div>
                            </div>

                            <div class="item">
                                <button type="button">
                                    {!! __('faq.questions3.title5') !!}

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                                </button>

                                <div>
                                    {!! __('faq.questions3.answer5') !!}
                                </div>
                            </div>
                        </div>

                        <div class="questions">
                            <div class="item">
                                <button type="button">
                                    {!! __('faq.questions4.title1') !!}

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                                </button>

                                <div>
                                    {!! __('faq.questions4.answer1') !!}
                                </div>
                            </div>

                            <div class="item">
                                <button type="button">
                                    {!! __('faq.questions4.title2') !!}

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                                </button>

                                <div>
                                    {!! __('faq.questions4.answer2') !!}
                                </div>
                            </div>

                            <div class="item">
                                <button type="button">
                                    {!! __('faq.questions4.title3') !!}

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                                </button>

                                <div>
                                    {!! __('faq.questions4.answer3') !!}
                                </div>
                            </div>
                        </div>

                        <div class="questions">
                            <div class="item">
                                <button type="button">
                                    {!! __('faq.questions5.title1') !!}

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                                </button>

                                <div>
                                    {!! __('faq.questions5.answer1') !!}
                                </div>
                            </div>

                            <div class="item">
                                <button type="button">
                                    {!! __('faq.questions5.title2') !!}

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                                </button>

                                <div>
                                    {!! __('faq.questions5.answer2') !!}
                                </div>
                            </div>
                        </div>

                        <div class="questions">
                            <div class="item">
                                <button type="button">
                                    {!! __('faq.questions6.title1') !!}

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                                </button>

                                <div>
                                    {!! __('faq.questions6.answer1') !!}
                                </div>
                            </div>

                            <div class="item">
                                <button type="button">
                                    {!! __('faq.questions6.title2') !!}

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z"/></svg>
                                </button>

                                <div>
                                    {!! __('faq.questions6.answer2') !!}
                                </div>
                            </div>
                        </div>
                    </div>
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
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const sections = document.querySelectorAll('.left .section');
            const questionBlocks = document.querySelectorAll('.right .questions');
            const faq = document.getElementById('faq');

            sections.forEach((section, index) => {
                section.addEventListener('click', () => {
                    sections.forEach(btn => btn.classList.remove('on'));
                    questionBlocks.forEach(block => block.classList.remove('on'));

                    section.classList.add('on');

                    if (questionBlocks[index]) {
                        questionBlocks[index].classList.add('on');
                    }

                    if (window.innerWidth < 1100) {
                        faq.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            document.querySelectorAll('.questions .item button').forEach(button => {

                button.addEventListener('click', () => {
                    const item = button.closest('.item');
                    item.classList.toggle('on');
                });
            });
        });
    </script>
@endsection