<form action="{{route('phones.create')}}" method="GET" class="flex-col-lg flex-center">
    {{-- @csrf --}}
    {{-- @method('POST') --}}
    <div class="flex-row-md w-auto back-color-prime bord-rad-md pad-md frame-shadow flex-center speed-norm">
        <button type="button" id="pasteBtn" data-tooltip="Вставить">
            <img class="transform-scale-hover speed-norm" height="26px"
                src="https://img.icons8.com/material-outlined/48/AEBBD0/paste.png" alt="paste">
        </button>

        <button type="button" id="clearBtn" data-tooltip="Очистить" class="d-none">
            <img class="transform-scale-hover speed-norm" height="26px"
                src="https://img.icons8.com/material-rounded/48/AEBBD0/erase.png" alt="clear">
        </button>

        <input id="phoneInput" name="phone" type="tel" class="back-color-primes font-size-lgr font-center font-color-accent"
            placeholder="+7 (___) ___-__-__" maxlength="18" required autofocus>

        <button type="button" id="infoBtn" data-tooltip="Номер из 10 цифр" class="cursor-help">
            <img class="transform-scale-hover speed-norm" height="26px"
                src="https://img.icons8.com/material-outlined/48/AEBBD0/info.png" alt="info">
        </button>

        <button type="button" id="copyBtn" data-tooltip="Копировать" class="d-none">
            <img class="transform-scale-hover speed-norm" height="26px"
                src="https://img.icons8.com/material-outlined/48/AEBBD0/copy.png" alt="copy">
        </button>
    </div>

    <div id="phoneActions" class="lock-opacity flex-row-md flex-center">
        <a id="phoneWhatsapp" data-tooltip="WhatsApp"
            class="transform-scale-hover speed-norm"
            target="_blink" href="https://wa.me/">
            <img class="lock" height="42px" src="https://img.icons8.com/material-outlined/48/6C63FF/whatsapp--v1.png"
                alt="">
        </a>

        <a id="phoneTelegram" data-tooltip="Telegram"
            class="transform-scale-hover speed-norm"
            target="_blink" href="https://t.me/">
            <img class="lock" height="42px" src="https://img.icons8.com/material-outlined/48/6C63FF/telegram-app.png"
                alt="">
        </a>
        
        <a id="phoneViber" data-tooltip="Viber"
            class="transform-scale-hover speed-norm"
            target="_blink" href="viber://chat?number=">
            <img class="lock" height="42px" src="https://img.icons8.com/material-outlined/48/6C63FF/viber.png"
                alt="">
        </a>

        {{-- <a id="phoneContact" data-tooltip="В контакты"
            class="transform-scale-hover speed-norm"
            href="">
            <img class="lock" height="42px" src="https://img.icons8.com/material-outlined/96/6C63FF/add-user-male.png"
                alt="">
        </a> --}}

        <a id="phoneMessage" data-tooltip="Сообщение"
            class="transform-scale-hover speed-norm"
            href="sms:">
            <img class="lock" height="42px" src="https://img.icons8.com/material-outlined/96/6C63FF/filled-message.png"
                alt="">
        </a>

        <a id="phoneCall" data-tooltip="Звонок"
            class="transform-scale-hover speed-norm"
            target="_blink" href="tel:">
            <img class="lock" height="42px" src="https://img.icons8.com/material-outlined/48/6C63FF/ringer-volume.png"
                alt="">
        </a>
    </div>

    <div class="flex-col-sm flex-center">
        <div class="flex-row-sm flex-center">
            <button type="button"
                class="font-size-lgr font-color-accent-hover pad-x-lg pad-y-md bord-rad-md back-color-prime frame-shadow-hover speed-norm"
                onclick="appendNumber('1')">1</button>
            <button type="button"
                class="font-size-lgr font-color-accent-hover pad-x-lg pad-y-md bord-rad-md back-color-prime frame-shadow-hover speed-norm"
                onclick="appendNumber('2')">2</button>
            <button type="button"
                class="font-size-lgr font-color-accent-hover pad-x-lg pad-y-md bord-rad-md back-color-prime frame-shadow-hover speed-norm"
                onclick="appendNumber('3')">3</button>
        </div>

        <div class="flex-row-sm flex-center">
            <button type="button"
                class="font-size-lgr font-color-accent-hover pad-x-lg pad-y-md bord-rad-md back-color-prime frame-shadow-hover speed-norm"
                onclick="appendNumber('4')">4</button>
            <button type="button"
                class="font-size-lgr font-color-accent-hover pad-x-lg pad-y-md bord-rad-md back-color-prime frame-shadow-hover speed-norm"
                onclick="appendNumber('5')">5</button>
            <button type="button"
                class="font-size-lgr font-color-accent-hover pad-x-lg pad-y-md bord-rad-md back-color-prime frame-shadow-hover speed-norm"
                onclick="appendNumber('6')">6</button>
        </div>

        <div class="flex-row-sm flex-center">
            <button type="button"
                class="font-size-lgr font-color-accent-hover pad-x-lg pad-y-md bord-rad-md back-color-prime frame-shadow-hover speed-norm"
                onclick="appendNumber('7')">7</button>
            <button type="button"
                class="font-size-lgr font-color-accent-hover pad-x-lg pad-y-md bord-rad-md back-color-prime frame-shadow-hover speed-norm"
                onclick="appendNumber('8')">8</button>
            <button type="button"
                class="font-size-lgr font-color-accent-hover pad-x-lg pad-y-md bord-rad-md back-color-prime frame-shadow-hover speed-norm"
                onclick="appendNumber('9')">9</button>
        </div>

        <div class="flex-row-sm flex-center">
            <button type="button" data-tooltip="Добавочный"
                class="font-size-lgr font-color-accent-hover pad-x-lg pad-y-md bord-rad-md back-color-prime frame-shadow-hover speed-norm"
                onclick="appendNumber('*')">*</button>
            <button type="button"
                class="font-size-lgr font-color-accent-hover pad-x-lg pad-y-md bord-rad-md back-color-prime frame-shadow-hover speed-norm"
                onclick="appendNumber('0')">0</button>
            <button type="button" data-tooltip="Удалить"
                class="font-size-lgr font-color-accent-hover pad-x-lg pad-y-md bord-rad-md back-color-prime frame-shadow-hover speed-norm"
                onclick="deleteLastNumber()">
                < </button>
        </div>
    </div>

    <button type="submit" id="createPhoneCard"
        class="lock-opacity font-color-prime font-color-prime-hover pad-x-md pad-y-sm bord-rad-md back-color-accent transform-up-hover speed-norm">Создать карточку
    </button>
</div>

<script>
    const phoneInput = document.getElementById('phoneInput');
    const pasteBtn = document.getElementById('pasteBtn');
    const copyBtn = document.getElementById('copyBtn');
    const clearBtn = document.getElementById('clearBtn');
    const infoBtn = document.getElementById('infoBtn');

    const phoneActions = document.getElementById('phoneActions');
    const phoneWhatsapp = document.getElementById('phoneWhatsapp');
    const phoneTelegram = document.getElementById('phoneTelegram');
    const phoneViber = document.getElementById('phoneViber');
    const phoneMessage = document.getElementById('phoneMessage');
    const phoneCall = document.getElementById('phoneCall');
    const createPhoneCard = document.getElementById('createPhoneCard');


    phoneInput.addEventListener('input', (event) => {
        const keySound = new Audio('sounds/odinochnyiy-priglushennyiy-zvuk-najatiya.mp3');
        keySound.play();
        phoneInput.value = formatPhoneNumber(phoneInput.value); // Применяем форматирование
        checkPhone();
    });

    clearBtn.addEventListener('click', () => {
        const keypadSound = new Audio('sounds/myagkoe-spokoynoe-najatie-klavishi.mp3');
        keypadSound.play();

        phoneInput.value = '';
        console.log('clearBtn');
        checkPhone();
    });

    copyBtn.addEventListener('click', async () => {
        const keypadSound = new Audio('sounds/myagkoe-spokoynoe-najatie-klavishi.mp3');
        keypadSound.play();
        try {
            await navigator.clipboard.writeText(phoneInput.value);
            console.log('Скопирован текст в буфер: ', phoneInput.value);
        } catch (err) {
            console.error('Ошибка при копировании в буфер: ', err);
        }
    });

    // Обработчик для кнопки "Вставить"
    pasteBtn.addEventListener('click', async () => {
        const keypadSound = new Audio('sounds/myagkoe-spokoynoe-najatie-klavishi.mp3');
        keypadSound.play();

        try {
            const text = await navigator.clipboard.readText();
            phoneInput.value = formatPhoneNumber(text); // Применяем форматирование
            checkPhone();
        } catch (err) {
            console.error('Ошибка при чтении из буфера: ', err);
        }
    });

    function formatPhoneNumber(inputValue) {
        let formattedValue = inputValue.replace(/[^+\d*]/g, ''); // Убираем все нецифровые символы кроме '+' и '*'

        // Если номер начинается с 8 и длина >= 11, заменяем на +7
        if (formattedValue.startsWith('8') && formattedValue.length >= 11) {
            formattedValue = '+7' + formattedValue.slice(1);
        }
        // Если номер начинается с 7 без плюса, добавляем +
        else if (formattedValue.startsWith('7') && !formattedValue.startsWith('+7')) {
            formattedValue = '+7' + formattedValue.slice(1);
        }
        // Если номер без кода региона (например, 913...), добавляем +7
        else if (!formattedValue.startsWith('+')) {
            formattedValue = '+7' + formattedValue;
        }
        // Если номер уже начинается с +, но не с +7, ничего не меняем
        else if (formattedValue.startsWith('+') && !formattedValue.startsWith('+7')) {
            console.warn('Номер уже имеет другой региональный код:', formattedValue);
        }

        return formattedValue;
    }



    function appendNumber(num) {
        const keySound = new Audio('sounds/odinochnyiy-priglushennyiy-zvuk-najatiya.mp3');
        keySound.play();

        phoneInput.value += num;
        checkPhone();
    }

    function deleteLastNumber() {
        const keySound = new Audio('sounds/odinochnyiy-priglushennyiy-zvuk-najatiya.mp3');
        keySound.play();

        phoneInput.value = phoneInput.value.slice(0, -1);
        checkPhone(); + 79139208405
    }

    function checkPhone() {

        if (phoneInput.value.length > 0 && !phoneInput.value.startsWith('+')) {
            phoneInput.value = '+7' + phoneInput.value.replace(/^\+7/, ''); // Добавляем +7 в начало
        }

        const phoneRegex = /(?:(\+?7)|8)?\D*?(\d\D*?){11}(?:\*\D*?\d+)?/;
        const cleanInput = phoneInput.value.replace(/[^\d+]/g, ''); // Очищаем для ссылок
        const isValid = phoneRegex.test(phoneInput.value);

        // Видимость кнопок
        if (phoneInput.value === '') {
            clearBtn.classList.remove('d-block');
            clearBtn.classList.add('d-none');
            pasteBtn.classList.remove('d-none');
            pasteBtn.classList.add('d-block');

            copyBtn.classList.remove('d-block');
            copyBtn.classList.add('d-none');
            infoBtn.classList.add('d-block');
            infoBtn.classList.remove('d-none');
        } else {
            clearBtn.classList.remove('d-none');
            clearBtn.classList.add('d-block');
            pasteBtn.classList.remove('d-block');
            pasteBtn.classList.add('d-none');

            copyBtn.classList.add('d-block');
            copyBtn.classList.remove('d-none');
            infoBtn.classList.remove('d-block');
            infoBtn.classList.add('d-none');
        }

        // Активация ссылок
        if (isValid) {
            phoneActions.classList.remove('lock-opacity');
            createPhoneCard.classList.remove('lock-opacity');
            phoneWhatsapp.setAttribute('href', 'https://wa.me/' + cleanInput);
            phoneTelegram.setAttribute('href', 'https://t.me/' + cleanInput);
            phoneMessage.setAttribute('href', 'sms:' + cleanInput);
            phoneCall.setAttribute('href', 'tel:' + cleanInput);
            phoneViber.setAttribute('href', 'viber://chat?number=' + cleanInput);
        } else {
            phoneActions.classList.add('lock-opacity');
            createPhoneCard.classList.add('lock-opacity');
        }
    }
    
    function updateLinks() {
    const phone = phoneInput.value.replace(/\D/g, ''); // Удаляем всё, кроме цифр
    if (phone.length === 11) { // Проверка на корректность длины номера
        phoneWhatsapp.href = `https://wa.me/${phone}`;
        phoneTelegram.href = `https://t.me/${phone}`;
        phoneViber.href = `viber://chat?number=${phone}`;
        phoneMessage.href = `sms:${phone}`;
        phoneCall.href = `tel:${phone}`;
    } else {
        phoneWhatsapp.href = `https://wa.me/`;
        phoneTelegram.href = `https://t.me/`;
        phoneViber.href = `viber://chat?number=`;
        phoneMessage.href = `sms:`;
        phoneCall.href = `tel:`;
    }
}
</script>
