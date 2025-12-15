<div class="flex-col flex-{{ isset($flex) ? $flex : 'start' }}">
    <a class="font-color-contrast font-color-accent-hover speed-norm" href="{{ route('pages.main') }}">Главная</a>
    <a class="font-color-contrast font-color-accent-hover speed-norm" href="{{ route('pages.about') }}">Описание</a>
    <a class="font-color-contrast font-color-accent-hover speed-norm"
        href="{{ route('phones.show', ['tel' => '9876543210', 'ttl' => 'Заголовок', 'nt' => 'Комментарий', 'fn' => 'Имя', 'ln' => 'Фамилия', 'org' => 'Организация', 'eml' => 'noreply@e.mail', 'url' => 'link.ru']) }}">Пример</a>
    
</div>

<div class="flex-col flex-{{ isset($flex) ? $flex : 'start' }}">
    <a class="font-color-contrast font-color-accent-hover speed-norm" href="{{ route('phones.index') }}">Написать по
        номеру</a>
    <a class="font-color-contrast font-color-accent-hover speed-norm" href="{{ route('phones.create') }}">Создать
        карточку</a>
</div>
