@once
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/lead.css') }}" media="print" onload="this.media='all'">
    @endpush
@endonce

<section class="area-lead">
    <div class="content">
        <div class="box-lead animate" data-animate="left">
            <h2>
                {!! $title !!}
                <span>{!! $subtitle !!}</span>
            </h2>

            <form action="{{ route('lead-submit') }}" method="POST">
                @csrf
                <div class="item-input">
                    <label for="name">
                        {{ __('leads.lead.label_1') }}
                    </label>
                    <input type="text" id="name" name="name" placeholder="{{ __('leads.lead.placeholder') }}" required>
                </div>

                <div class="item-input">
                    <label for="email">
                        {{ __('leads.lead.label_2') }}
                    </label>
                    <input type="email" id="email" name="email" placeholder="{{ __('leads.lead.placeholder') }}" required>
                </div>

                <div class="area-termos">
                    <input id="termos" name="checkbox" type="checkbox" required>

                    <label for="termos">{{ __('leads.lead.inicio_termos') }} <a href="{{ route_lang('termos') }}">{{ __('leads.lead.termos_1') }}</a> {{ __('leads.lead.meio_termos') }} <a href="{{ route_lang('termos') }}">{{ __('leads.lead.termos_2') }}</a> {{ __('leads.lead.final_termos') }}</label>
                </div>

                <button class="btn-lead" type="submit">
                    {!! !empty($botao) ? $botao : 'Enviar' !!}
                </button>
            </form>
        </div>
    </div>

    <div class="bg-effect-default left"></div>
    <div class="bg-effect-default right"></div>
</section>
