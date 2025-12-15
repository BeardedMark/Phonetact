<section class="d-block d-lg-none">

    <div id="headerBottom" style="z-index: 99" class="pos-fix-bot back-color-prime flex-center flex-col-sm">
        <div id="menuList" class="d-none">
            <div class="flex-col-lg pad-md">
                @component('pages.components.menu', ['flex'=>'center'])
                @endcomponent
            </div>
        </div>

        <div class="flex-row-lg flex-jc-around pad-md back-color-prime">
            <a href="{{ route('pages.main') }}"
                class="speed-norm font-color-accent font-color-accent-hover flex-row-sm flex-y-center">
                <img src="{{ asset('img/phonetact2.png') }}" height="26px"> Phonetact
            </a>

            <a class="transform-scale-hover speed-norm" href="{{ route('phones.create') }}">
                <img class="lock" height="26px" src="https://img.icons8.com/material-outlined/96/new-contact.png">
            </a>

            <a class="transform-scale-hover speed-norm" href="{{ route('phones.index') }}">
                <img class="lock" height="26px" src="https://img.icons8.com/material-outlined/48/keypad.png">
            </a>

            <button id="menuOpen" class="transform-scale-hover speed-norm" onclick="toggleClassById()">
                <img class="lock" height="26px" src="https://img.icons8.com/material-outlined/48/menu--v1.png">
            </button>
        </div>
    </div>
</section>

<script>
    function toggleVisibilityById(elementId) {
        const element = document.getElementById(elementId);
        if (element.classList.contains('d-block')) {
            element.classList.remove('d-block');
            element.classList.add('d-none');
        } else {
            element.classList.remove('d-none');
            element.classList.add('d-block');
        }
    }

    // Добавляем обработчик события на кнопку
    document.getElementById('menuOpen').addEventListener('click', function() {
        toggleVisibilityById('menuList');
    });



    function BodySpaceFixed() {
        // Получение верхнего и нижнего элемента
        const bottom = document.getElementById("headerBottom");
        const body = document.body;

        // Добавление отступа снизу, если нижний элемент существует
        if (bottom) {
            const bottomOffset = bottom.offsetHeight;
            body.style.marginBottom = `${bottomOffset}px`; // Исправлено на marginBottom
        }
    }

    // Запуск функции после загрузки DOM
    document.addEventListener("DOMContentLoaded", BodySpaceFixed);
</script>
