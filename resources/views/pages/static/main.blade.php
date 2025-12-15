@extends('layouts.page')
@section('title', $title)
@section('description', $description)

@section('content')
    <div class="flex-col-lg font-center">
        <div>
            <p class="font-size-xxl font-color-accent">📱Phonetact🤝</p>
            <h1 class="font-size-lgr">{{ $title }}</h1>
        </div>

        <div class="row g-4">
            <div class="col col-12 col-lg-6">
                <div class="flex-col-sm flex-x-center back-color-prime bord-rad-md pad-md h-100">
                    <img class="lock" height="42" width="42"
                        src="https://img.icons8.com/material-outlined/96/AEBBD0/new-contact.png" alt="">

                    <h2 class="font-size-lg font-color-accent">Создать карточку контакта</h2>
                    <p class="h-100">С Phonetact вы можете мгновенно создать удобную карточку с вашим номером и данными. Делитесь ею через QR-код или ссылку – идеально для работы, встреч и общения</p>
                    <a href="{{ route('phones.create') }}"
                        class="font-color-prime font-color-prime-hover pad-x-md pad-y-sm bord-rad-md back-color-accent back-color-accent-hover transform-up-hover speed-norm">Создать
                    </a>
                </div>
            </div>

            <div class="col col-12 col-lg-6">
                <div class="flex-col-sm flex-x-center back-color-prime bord-rad-md pad-md h-100">
                    <img class="lock" height="42" width="42"
                        src="https://img.icons8.com/material-outlined/96/AEBBD0/keypad.png" alt="">

                    <h2 class="font-size-lg font-color-accent">Связаться по номеру телефона</h2>
                    <p class="h-100">Отправляйте сообщения, звоните или пишите в мессенджеры за секунды, не тратя время на сохранение номеров. Всё просто, быстро и без лишних действий</p>
                    <a href="{{ route('phones.index') }}"
                        class="font-color-prime font-color-prime-hover pad-x-md pad-y-sm bord-rad-md back-color-accent back-color-accent-hover transform-up-hover speed-norm">Связаться
                    </a>
                </div>
            </div>

            <div class="col col-12 col-lg-12">
                <div class="flex-col flex-x-center back-color- bord-rad-md pad-md h-100">
                    <h2 class="font-size-lgr font-color-accent">Упрощаем работу с контактами</h2>
                    <p class="">Делитесь информацией легко и удобно</p>
                </div>
            </div>

            <div class="col col-12 col-lg-6">
                <div class="flex-col-sm flex-x-center back-color-prime bord-rad-md pad-md h-100">
                    <h2 class="font-size-lg font-color-accent">Быстрые действия</h2>
                    <div class="flex-row-md flex-center">
                        <img class="lock" height="42px"
                            src="https://img.icons8.com/material-outlined/96/6C63FF/filled-message.png" alt="">
                        <img class="lock" height="42px"
                            src="https://img.icons8.com/material-outlined/48/6C63FF/ringer-volume.png" alt="">
                        <img class="lock" height="42px"
                            src="https://img.icons8.com/material-outlined/48/6C63FF/email.png" alt="">
                    </div>
                    <p class="h-100">Совершайте звонки, отправляйте сообщения и письма всего в один клик – никаких лишних шагов</p>
                </div>
            </div>

            <div class="col col-12 col-lg-6">
                <div class="flex-col-sm flex-x-center back-color-prime bord-rad-md pad-md h-100">
                    <h2 class="font-size-lg font-color-accent">Популярные мессенджеры</h2>
                    <div class="flex-row-md flex-center">
                        <img class="lock" height="42px"
                            src="https://img.icons8.com/material-outlined/48/6C63FF/whatsapp--v1.png" alt="">
                        <img class="lock" height="42px"
                            src="https://img.icons8.com/material-outlined/48/6C63FF/telegram-app.png" alt="">
                        <img class="lock" height="42px"
                            src="https://img.icons8.com/material-outlined/48/6C63FF/viber.png" alt="">
                    </div>
                    <p class="h-100">Общайтесь через мессенджеры просто и быстро, без сохранения номера в телефонной книге</p>
                </div>
            </div>
        </div>

        <div class="flex-center">
            <a href="{{ route('pages.about')}}"
                class="font-color-prime font-color-prime-hover pad-x-md pad-y-sm bord-rad-md back-color-second back-color-accent-hover transform-up-hover speed-norm">Описание проекта
            </a>
        </div>
    </div>
@endsection
