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

            <form id="leadForm" action="{{ route('lead-submit') }}" method="POST">
                @csrf
                <div class="area-inputs-lead">
                    <div class="item-input">
                        <input type="text" id="name" name="name" placeholder="{{ __('leads.lead.label_1') }}" required>
                    </div>

                    <div class="item-input">
                        <input placeholder="{{ __('leads.lead.label_2') }}" type="text" id="whatsapp" name="whatsapp" oninput="this.value = formatPhone(this.value)" maxlength="15">
                    </div>

                    <div class="item-input">
                        <input type="email" id="email" name="email" placeholder="{{ __('leads.lead.label_3') }}">
                    </div>
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
</section>

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

    document.addEventListener('DOMContentLoaded', () => {
        const form = document.getElementById('leadForm');
        const email = document.getElementById('email');
        const whatsapp = document.getElementById('whatsapp');

        form.addEventListener('submit', function(e) {
            const hasEmail = email.value.trim() !== '';
            const hasWhatsapp = whatsapp.value.trim() !== '';

            if (!hasEmail && !hasWhatsapp) {
                e.preventDefault();

                email.setCustomValidity('Preencha o e-mail ou WhatsApp.');
                email.reportValidity();

                return false;
            }

            email.setCustomValidity('');
        });

        email.addEventListener('input', () => {
            email.setCustomValidity('');
        });

        whatsapp.addEventListener('input', () => {
            email.setCustomValidity('');
        });
    });
</script>