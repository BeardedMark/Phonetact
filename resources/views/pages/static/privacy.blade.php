@extends('layouts.page')
@section('title', $title)
@section('description', $description)

@section('content')
    <div class="flex-col-lg font-center">
        <div>
            <p class="font-size-lgr font-color-accent">Политика конфидициальности</p>
            <h1>{{$title}}</h1>
        </div>

        <div class="row g-4">
            <div class="col col-12 col-lg-12">
                <div class="flex-col-sm flex-x-center back-color-accent bord-rad-md pad-md h-100">
                    <h2 class="font-size-lgr font-color-main">Phontact хочет быть полезным</h2>
                </div>
            </div>

            <div class="col col-12 col-lg-6">
                <div class="flex-col-sm flex-x-center back-color-prime bord-rad-md pad-md h-100">
                    <img class="lock" height="42" width="42"
                        src="https://img.icons8.com/material-outlined/96/AEBBD0/lock--v1.png" alt="">

                    <h2 class="font-size-lg font-color-accent">Сайт не хранит данные</h2>
                    <p>Мы не сохраняем и не обрабатываем личную информацию пользователей. Все действия выполняются в
                        реальном времени, а данные, такие как введенные номера телефонов, не хранятся на наших серверах</p>
                </div>
            </div>

            <div class="col col-12 col-lg-6">
                <div class="flex-col-sm flex-x-center back-color-prime bord-rad-md pad-md h-100">
                    <img class="lock" height="42" width="42"
                        src="https://img.icons8.com/material-outlined/96/AEBBD0/eclipse.png" alt="">
                    <h2 class="font-size-lg font-color-accent">Используются куки</h2>
                    <p>Для улучшения работы сайта мы используем файлы cookie. Они помогают обеспечить стабильную работу и
                        улучшить пользовательский опыт, сохраняя настройки и предпочтения для вашего удобства</p>
                </div>
            </div>

            <div class="col col-12 col-lg-6">
                <div class="flex-col-sm flex-x-center back-color-prime bord-rad-md pad-md h-100">
                    <img class="lock" height="42" width="42"
                        src="https://img.icons8.com/material-outlined/96/AEBBD0/total-sales-1.png" alt="">
                    <h2 class="font-size-lg font-color-accent">Подключена Яндекс.Метрика</h2>
                    <p>На сайте используется Яндекс.Метрика для анализа посещаемости и повышения качества нашего сервиса.
                        Данные, собираемые Метрикой, обезличены и используются исключительно в статистических целях</p>
                </div>
            </div>

            <div class="col col-12 col-lg-6">
                <div class="flex-col-sm flex-x-center back-color-prime bord-rad-md pad-md h-100">
                    <img class="lock" height="42" width="42"
                        src="https://img.icons8.com/material-outlined/96/AEBBD0/checked-checkbox.png" alt="">
                    <h2 class="font-size-lg font-color-accent">Пользовательское соглашение</h2>
                    <p>Оставаясь на нашем сайте, вы автоматически соглашаетесь с его условиями использования, включая
                        обработку обезличенных данных и использование cookie. Мы ценим вашу конфиденциальность и стараемся
                        сделать сервис максимально безопасным</p>
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
