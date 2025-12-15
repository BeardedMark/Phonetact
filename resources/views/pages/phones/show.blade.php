@extends('layouts.page')
@section('title', $title)
@section('description', $description)

@section('content')
    <div class="flex-col-md flex-center">
        @if (isset($header) || isset($comment))
            <div class="flex-col flex-center">
                @isset($header)
                    <p class="font-size-xlg font-center">{{ $header }}</p>
                @endisset

                @isset($comment)
                    <p class="font-center">{{ $comment }}</p>
                @endisset
            </div>
        @endif

        @if ($phone)
            <div class="flex-col">
                <p class="back-color-primes font-size-xxl font-center font-color-accent" id="phone">
                    {{ $phone }}
                </p>

                <div class="flex-row-sm flex-center">
                    <a data-tooltip="WhatsApp" target="_blink" href="https://wa.me/{{ $phone }}"
                        class="transform-scale-hover font-color-accent font-color-contrast-hover font-size-lg speed-norm">
                        <img class="lock" height="42px"
                            src="https://img.icons8.com/material-outlined/96/whatsapp--v1.png" alt="">
                    </a>

                    <a data-tooltip="Telegram" target="_blink" href="https://t.me/{{ $phone }}"
                        class="transform-scale-hover font-color-accent font-color-contrast-hover font-size-lg speed-norm">
                        <img class="lock" height="42px" src="https://img.icons8.com/material-rounded/48/telegram-app.png"
                            alt="">
                    </a>

                    <a data-tooltip="Viber" href="viber://chat?number={{ $phone }}" target="_blink"
                        class="transform-scale-hover speed-norm">
                        <img class="lock" height="42px" src="https://img.icons8.com/material-outlined/48/viber.png"
                            alt="">
                    </a>

                    <a data-tooltip="Сообщение" href="sms:{{ $phone }}"
                        class="transform-scale-hover font-color-accent font-color-contrast-hover font-size-lg speed-norm">
                        <img class="lock" height="42px"
                            src="https://img.icons8.com/material-outlined/96/filled-message.png" alt="">
                    </a>

                    <a data-tooltip="Звонок" href="tel:{{ $phone }}"
                        class="transform-scale-hover font-color-accent font-color-contrast-hover font-size-lg speed-norm">
                        <img class="lock" height="42px"
                            src="https://img.icons8.com/material-rounded/48/ringer-volume.png" alt="">
                    </a>
                </div>
            </div>
        @endif

        <div class="flex-col flex-center">

            @if (isset($name) || isset($lastname))
                <p class="font-size-lgr">
                    @isset($name)
                        <span>{{ $name }}</span>
                    @endisset

                    @isset($lastname)
                        <span>{{ $lastname }}</span>
                    @endisset
                </p>
            @endif

            @isset($organization)
                <p class="font-size-md">{{ $organization }}</p>
            @endisset

            @isset($email)
                <a href="mailto:{{ $email }}" data-tooltip="Написать письмо"
                    class="font-size-lg font-color-contrast font-color-accent-hover speed-norm">{{ $email }}</a>
            @endisset

            @isset($website)
                <a href="https://{{ $website }}" target="_blink" data-tooltip="Посетить сайт"
                    class="font-size-sm font-color-contrast font-color-accent-hover speed-norm">{{ $website }}</a>
            @endisset
            
            @isset($address)
                <p class="font-size-md">{{ $address }}</p>
            @endisset
        </div>

        <img class="back-color-prime bord-rad-md flex-center pad-md" src="{{ $qrcode }}" alt="">

        {{-- @isset($phoneDaData)
            <div class="flex-col font-center">
                <p class="">{{ $phoneDaData['type'] }}</p>
                <p class="">{{ $phoneDaData['country'] }}, {{ $phoneDaData['region'] }},
                    {{ $phoneDaData['city'] }}</p>
                <p class="font-color-second font-size-sm">{{ $phoneDaData['provider'] }}</p>
            </div>
        @else
            <p class="font-size-sm font-color-second">Не получилось получить данные из DaData</p>
        @endisset --}}

        <div class="flex-row-sm flex-center">
            <button id="copyButton" data-tooltip="Копировать ссылку">
                <img class="transform-scale-hover speed-norm" height="26px"
                    src="https://img.icons8.com/material-rounded/48/link--v1.png" alt="">
            </button>

            {{-- <a href="#share" data-tooltip="Поделиться">
                <img class="transform-scale-hover speed-norm" height="26px"
                    src="https://img.icons8.com/material-rounded/48/share.png" alt="">
            </a> --}}
        </div>
    </div>

    {{-- @component('pages.components.share', compact('title', 'phone'))
    @endcomponent --}}

    <script>
        // Получаем кнопку
        const copyButton = document.getElementById('copyButton');

        // Добавляем обработчик клика
        copyButton.addEventListener('click', () => {
            // Получаем текущий URL
            const currentUrl = window.location.href;

            // Копируем в буфер обмена
            navigator.clipboard.writeText(currentUrl)
                .then(() => {
                    alert('Ссылка скопирована!');
                })
                .catch(err => {
                    alert('Не удалось скопировать ссылку.');
                    console.error('Ошибка:', err);
                });
        });
    </script>
@endsection
