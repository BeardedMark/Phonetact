@extends('layouts.page')
@section('title', $title)
@section('description', $description)

@section('content')
    <div class="flex-col-lg font-center">
        <div>
            <p class="font-size-lgr font-color-accent">Карта сайта</p>
            <h1>{{$title}}</h1>
        </div>

        <div class="row g-4">
            <div class="col col-12 col-lg-12">
                <div class="flex-col-sm flex-x-center back-color-prime bord-rad-md pad-md h-100">
                    <img class="lock" height="42" width="42"
                        src="https://img.icons8.com/material-outlined/96/AEBBD0/search-in-browser.png" alt="">

                    <h2 class="font-size-lg font-color-accent">Страницы сайта</h2>

                    @component('pages.components.menu', ['flex'=>'center'])
                    @endcomponent
                </div>
            </div>
            <div class="col col-12 col-lg-6">
                <div class="flex-col-sm flex-x-center back-color-prime bord-rad-md pad-md h-100">
                    <img class="lock" height="42" width="42"
                        src="https://img.icons8.com/material-outlined/96/AEBBD0/edit-message.png" alt="">

                    <h2 class="font-size-lg font-color-accent">Сообщение по номеру</h2>

                    <div class="flex-col">
                        <a class="font-color-contrast font-color-accent-hover speed-norm"
                            href="{{ route('phones.index', ['to' => 'WhatsApp']) }}">WhatsApp</a>
                        <a class="font-color-contrast font-color-accent-hover speed-norm"
                            href="{{ route('phones.index', ['to' => 'Telegram']) }}">Telegram</a>
                        <a class="font-color-contrast font-color-accent-hover speed-norm"
                            href="{{ route('phones.index', ['to' => 'Viber']) }}">Viber</a>
                        <a class="font-color-contrast font-color-accent-hover speed-norm"
                            href="{{ route('phones.index', ['to' => 'SMS']) }}">SMS</a>
                    </div>
                </div>
            </div>

            <div class="col col-12 col-lg-6">
                <div class="flex-col-sm flex-x-center back-color-prime bord-rad-md pad-md h-100">
                    <img class="lock" height="42" width="42"
                        src="https://img.icons8.com/material-outlined/96/AEBBD0/contact-card.png" alt="">
                    <h2 class="font-size-lg font-color-accent">Создать QR-код</h2>

                    <div class="flex-col">
                        <a class="font-color-contrast font-color-accent-hover speed-norm"
                            href="{{ route('phones.create', ['to' => 'WhatsApp']) }}">WhatsApp</a>
                        <a class="font-color-contrast font-color-accent-hover speed-norm"
                            href="{{ route('phones.create', ['to' => 'Telegram']) }}">Telegram</a>
                        <a class="font-color-contrast font-color-accent-hover speed-norm"
                            href="{{ route('phones.create', ['to' => 'Viber']) }}">Viber</a>
                        <a class="font-color-contrast font-color-accent-hover speed-norm"
                            href="{{ route('phones.create', ['to' => 'Viber']) }}">SMS</a>
                            <a class="font-color-contrast font-color-accent-hover speed-norm"
                                href="{{ route('phones.create', ['to' => 'Телефона']) }}">Телефон</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex-center">
            <a href="{{ route('phones.index') }}"
                class="font-color-prime font-color-prime-hover pad-x-md pad-y-sm bord-rad-md back-color-second back-color-accent-hover transform-up-hover speed-norm">Главная страница
            </a>
        </div>
    </div>
@endsection
