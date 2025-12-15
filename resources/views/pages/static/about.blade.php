@extends('layouts.page')
@section('title', $title)
@section('description', $description)

@section('content')
    <div class="flex-col-lg font-center">
        <div>
            <p class="font-size-lgr font-color-accent">О сервисе Phonetact</p>
            <h1>{{$title}}</h1>
        </div>

        <div class="row g-4">
            <div class="col col-12 col-lg-6">
                <div class="flex-col-sm flex-x-center back-color-prime bord-rad-md pad-md h-100">
                    <img class="lock" height="42" width="42"
                        src="https://img.icons8.com/material-outlined/96/AEBBD0/communication.png" alt="">

                    <h2 class="font-size-lg font-color-accent">Мессенджеры без добавления</h2>
                    <p>Наш сервис позволяет мгновенно начать общение в популярных мессенджерах, таких как WhatsApp, Telegram
                        или
                        Viber, без необходимости сохранять номер в телефонной книге. Это удобно, если вам нужно отправить
                        сообщение или уточнить детали, не загромождая свои контакты</p>
                </div>
            </div>

            <div class="col col-12 col-lg-6">
                <div class="flex-col-sm flex-x-center back-color-prime bord-rad-md pad-md h-100">
                    <img class="lock" height="42" width="42"
                        src="https://img.icons8.com/material-outlined/96/AEBBD0/phone-message.png" alt="">

                    <h2 class="font-size-lg font-color-accent">Быстрый доступ к смс и звонку</h2>
                    <p>С помощью нашего инструмента вы можете быстро отправить SMS или совершить звонок, просто кликнув по
                        номеру. Больше не нужно вручную копировать или набирать цифры – всё работает быстро и удобно</p>
                </div>
            </div>

            <div class="col col-12 col-lg-6">
                <div class="flex-col-sm flex-x-center back-color-prime bord-rad-md pad-md h-100">
                    <img class="lock" height="42" width="42"
                        src="https://img.icons8.com/material-outlined/96/AEBBD0/qr-code.png" alt="">

                    <h2 class="font-size-lg font-color-accent">QR-код карточки контакта</h2>
                    <p>Создайте QR-код для вашего номера, который мгновенно открывает карточку контакта. Это отличный способ
                        поделиться своими данными: достаточно показать или отправить код, и ваши контакты будут всегда под
                        рукой
                        у нужных людей</p>
                </div>
            </div>

            <div class="col col-12 col-lg-6">
                <div class="flex-col-sm flex-x-center back-color-prime bord-rad-md pad-md h-100">
                    <img class="lock" height="42" width="42"
                        src="https://img.icons8.com/material-outlined/96/AEBBD0/link--v1.png" alt="">
                    <h2 class="font-size-lg font-color-accent">Персональная ссылка на контакт</h2>
                    <p>Мы предлагаем создать уникальную ссылку на ваш номер телефона. Поделитесь ею в соцсетях, мессенджерах
                        или
                        на визитках, чтобы ваши контакты были легко доступны для ваших клиентов или знакомых</p>
                </div>
            </div>

            <div class="col col-12 col-lg-6">
                <div class="flex-col-sm flex-x-center back-color-prime bord-rad-md pad-md h-100">
                    <img class="lock" height="42" width="42"
                        src="https://img.icons8.com/material-outlined/96/AEBBD0/gift.png" alt="">
                    <h2 class="font-size-lg font-color-accent">Бесплатно и без регистрации</h2>
                    <p>Наш сервис полностью бесплатный и не требует регистрации. Мы уважаем ваше время и конфиденциальность,
                        поэтому убрали все лишние барьеры, чтобы вы могли пользоваться функционалом прямо сейчас</p>
                </div>
            </div>

            <div class="col col-12 col-lg-6">
                <div class="flex-col-sm flex-x-center back-color-prime bord-rad-md pad-md h-100">
                    <img class="lock" height="42" width="42"
                        src="https://img.icons8.com/material-outlined/96/AEBBD0/quick-mode-on--v1.png" alt="">
                    <h2 class="font-size-lg font-color-accent">Быстро и удобно</h2>
                    <p>Сервис создан так, чтобы всё было максимально просто и понятно. Никаких лишних функций — только самое нужное. Вы быстро находите то, что нужно, и сразу пользуетесь, не отвлекаясь на ненужные детали. Это минимализм, который помогает сосредоточиться на деле</p>
                </div>
            </div>
        </div>

        <div class="flex-center">
            <a href="{{ route('pages.privacy')}}"
                class="font-color-prime font-color-prime-hover pad-x-md pad-y-sm bord-rad-md back-color-second back-color-accent-hover transform-up-hover speed-norm">Безопастность данных
            </a>
        </div>
    </div>
@endsection
