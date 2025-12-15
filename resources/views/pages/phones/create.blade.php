@extends('layouts.page')
@section('title', $title)
@section('description', $description)

@section('content')
    <div class="flex-col-lg font-center">
        <div>
            <p class="font-size-lgr font-color-accent">Создать карточку контакта</p>
            <h1>{{ $title }}</h1>
        </div>

        <form id="createCardForm" action="{{ route('phones.show') }}" method="get" class="flex-col-md flex-center">
            <fieldset class="flex-col-sm flex-jc-between font-center">
                <div class="flex-row-sm flex-jc-between">
                    <input type="text" id="header" name="ttl" placeholder="Заголовок" maxlength="30"
                        class="font-center back-color-prime bord-rad-md pad-md frame-shadow-hover speed-norm w-100">

                    <input type="text" id="comment" name="nt" placeholder="Комментарий" maxlength="100"
                        class="font-center back-color-prime bord-rad-md pad-md frame-shadow-hover speed-norm w-100">
                </div>
            </fieldset>



            <p class="font-size-lg font-color-accent">Персональное</p>

            <fieldset class="flex-col-sm font-center">
                <div class="flex-row-sm flex-jc-between">
                    <input type="text" id="name" name="fn" placeholder="Имя" maxlength="30"
                        class="font-center back-color-prime bord-rad-md pad-md frame-shadow-hover speed-norm w-100">
                    <input type="text" id="lastname" name="ln" placeholder="Фамилия" maxlength="50"
                        class="font-center back-color-prime bord-rad-md pad-md frame-shadow-hover speed-norm w-100">
                </div>

                <div class="flex-row-sm flex-jc-between">
                    <input type="text" id="organization" name="org" placeholder="Организация/ИНН" maxlength="100"
                        class="font-center back-color-prime bord-rad-md pad-md frame-shadow-hover speed-norm w-100">
                </div>
            </fieldset>

            <p class="font-size-lg font-color-accent">Контакты</p>

            <fieldset class="flex-col-sm font-center">
                <div class="flex-row-sm flex-jc-between">
                    <input type="tel" id="phone" name="tel" placeholder="Телефон" value="{{ $phone }}"
                        maxlength="18"
                        class="font-center back-color-prime bord-rad-md pad-md frame-shadow-hover speed-norm w-100">
                </div>

                <div class="flex-row-sm flex-jc-between">
                    <input type="email" id="email" name="eml" placeholder="Электронная почта"
                        class="font-center back-color-prime bord-rad-md pad-md frame-shadow-hover speed-norm w-100">

                    <input type="text" id="website" name="url" placeholder="Веб-сайт"
                        class="font-center back-color-prime bord-rad-md pad-md frame-shadow-hover speed-norm w-100">
                </div>
            </fieldset>

            <p class="font-size-lg font-color-accent">Геолокация</p>

            <fieldset class="flex-col-sm font-center">
                <div class="flex-row-sm flex-jc-between">
                    <input type="text" id="country" name="co" placeholder="Страна"
                        class="font-center back-color-prime bord-rad-md pad-md frame-shadow-hover speed-norm w-100">
                    <input type="text" id="region" name="rg" placeholder="Регион/область"
                        class="font-center back-color-prime bord-rad-md pad-md frame-shadow-hover speed-norm w-100">
                </div>

                <div class="flex-row-sm flex-jc-between">
                    <input type="text" id="city" name="ct" placeholder="Город/населённый пункт"
                        class="font-center back-color-prime bord-rad-md pad-md frame-shadow-hover speed-norm w-100">
                    <input type="text" id="street" name="st" placeholder="Адрес"
                        class="font-center back-color-prime bord-rad-md pad-md frame-shadow-hover speed-norm w-100">
                </div>
            </fieldset>

            {{-- <p class="font-size-lg font-color-accent">Дополнительно</p>

            <fieldset class="flex-row-sm flex-jc-between font-center">
                <input type="url" id="photo-url" name="photo-url" placeholder="Ссылка на фото"
                    class="font-center back-color-prime bord-rad-md pad-md frame-shadow-hover speed-norm w-100">
                <input type="date" id="date" name="date" placeholder="Дата"
                    class="font-center back-color-prime bord-rad-md pad-md frame-shadow-hover speed-norm w-100">
            </fieldset> --}}

            <button type="submit"
                class="font-color-prime font-color-prime-hover pad-x-md pad-y-sm bord-rad-md back-color-accent transform-up-hover speed-norm">Создать
                карточку
            </button>
        </form>
    </div>

    <script>
        document.getElementById('createCardForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Останавливаем стандартное поведение
            const inputs = Array.from(event.target.elements);

            inputs.forEach(input => {
                // Проверяем наличие свойства value, чтобы избежать ошибок
                if (input.type !== "submit" && typeof input.value === "string" && input.value.trim() ===
                    "") {
                    input.removeAttribute('name'); // Удаляем атрибут name для пустых полей
                }
            });
            event.target.submit(); // Отправляем форму после обработки
        });
    </script>
@endsection
