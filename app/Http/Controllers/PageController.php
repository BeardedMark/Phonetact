<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main()
    {
        $title = "Связаться по номеру телефона и поделиться контактами";
        $description = "Используйте Phonetact для мгновенного общения через мессенджеры, звонков и создания QR-кодов. Быстро, удобно и без регистрации";

        return view('pages.static.main', compact('title', 'description'));
    }

    public function about()
    {
        $title = "Phonetact - Удобный сервис для работы с контактами";
        $description = "Узнайте, как Phonetact упрощает общение: быстрый доступ к мессенджерам, звонкам и SMS, создание персональных ссылок и QR-кодов контактов. Бесплатно и без регистрации";

        return view('pages.static.about', compact('title', 'description'));
    }

    public function privacy()
    {
        $title = "Политика конфиденциальности Phonetact";
        $description = "Узнайте, как Phonetact обеспечивает вашу конфиденциальность. Мы не храним ваши данные, используем куки только для улучшения работы, а статистика ведется через Яндекс.Метрику";

        return view('pages.static.privacy', compact('title', 'description'));
    }

    public function sitemap()
    {
        $title = "Карта сайта Phonetact – структура страниц";
        $description = "Ознакомьтесь со структурой сайта Phonetact, чтобы быстро найти нужные разделы и функции: от описания сервиса до настроек конфиденциальности";

        return view('pages.static.sitemap', compact('title', 'description'));
    }
}
