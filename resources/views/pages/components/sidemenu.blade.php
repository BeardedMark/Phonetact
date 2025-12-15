<div class="pos-fix">
    <div class="flex-col-md pad-x-md">
        <a href="{{ route('pages.main') }}"
            class="flex-row-sm flex-y-center font-color-accent font-color-accent-hover font-size-lgr speed-norm">
            <img src="{{ asset('img/phonetact2.png') }}" height="26px" alt="">Phonetact</a>

        @component('pages.components.menu')
        @endcomponent
        {{-- <div class="flex-col flex-start">
        <a class="lock-opacity font-size-sm font-color-second font-color-accent-hover speed-norm" href="">Скачать ярлык</a>
        <a class="lock-opacity font-size-sm font-color-second font-color-accent-hover speed-norm" href="">Скачать
            расширение</a>
    </div> --}}

        <div class="flex-col flex-{{ isset($flex) ? $flex : 'start' }}">
            <a class="font-color-contrast font-color-accent-hover speed-norm"
                href="{{ route('phones.index', ['to' => 'WhatsApp']) }}">для WhatsApp</a>
            <a class="font-color-contrast font-color-accent-hover speed-norm"
                href="{{ route('phones.index', ['to' => 'Telegram']) }}">для Telegram</a>
            <a class="font-color-contrast font-color-accent-hover speed-norm"
                href="{{ route('phones.index', ['to' => 'Viber']) }}">для Viber</a>
        </div>

        <div class="flex-col flex-start">
            <a class="font-size-sm font-color-second font-color-accent-hover speed-norm"
                href="{{ route('pages.sitemap') }}">Карта сайта</a>
            <a class="font-size-sm font-color-second font-color-accent-hover speed-norm"
                href="{{ route('pages.privacy') }}">Конфидициальность</a>
            <a href="https://sin-mark.ru/"
                class="font-size-sm font-color-second font-color-accent-hover speed-norm">Phonetact © 2025</a>
        </div>
    </div>
</div>
