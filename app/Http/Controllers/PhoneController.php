<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Label\LabelAlignment;
use Endroid\QrCode\Label\Font\OpenSans;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\PngWriter;

class PhoneController extends Controller
{
    public function index(Request $request)
    {
        $phoneTarget = $request['to'] ?: 'по номеру телефона';
        $title = "Написать {$phoneTarget} не добавляя в контакты";
        $description = "Свяжитесь быстро и просто через мессенджеры или звонки, используя номер телефона {$phoneTarget} без необходимости добавлять в контакты";

        return view('pages.phones.index', compact('title', 'description'));
    }

    public function create(Request $request)
    {
        $phone = $request['phone'] ? $this->formatPhoneNumber($request['phone']) : null;

        $phoneTarget = $request['to'] ?: 'по номеру телефона';
        $title = "Создать QR код {$phoneTarget}";
        $description = "Создайте уникальный QR-код для {$phoneTarget}, чтобы быстро и удобно поделиться с коллегами, клиентами или друзьями";

        return view('pages.phones.create', compact('phone', 'title', 'description'));
    }


    public function show(Request $request)
    {
        $phone = $request['tel'] ? $this->formatPhoneNumber($request['tel']) : null;
        $header = $request['ttl'];
        $comment = $request['nt'];
        $name = $request['fn'];
        $lastname = $request['ln'];
        $organization = $request['org'];
        $email = $request['eml'];
        $website = $request['url'];
        $street = $request['st'];
        $city = $request['ct'];
        $region = $request['rg'];
        $country = $request['co'];

        $addressParts = array_filter([$street, $city, $region, $country], function ($value) {
            return !empty($value);
        });

        $address = implode(', ', $addressParts);

        $qrcode = $this->qrcode($request);

        $url = 'https://cleaner.dadata.ru/api/v1/clean/phone';
        $token = '0dadf8898e7067fe3be74dcea5511e9db40a2f4';
        $secret = '73843a4515d3526b61f3b9396ec61262cdb34e20';
        // $token = '7dc4971ddd2940130c25be7ab68b133eca10df9c';
        // $secret = 'be30aa9aa34e131a6eddecec81cb55d4893c8679';

        // $data = [$phone];

        // $response = Http::withHeaders([
        //     'Content-Type' => 'application/json',
        //     'Accept' => 'application/json',
        //     'Authorization' => 'Token ' . $token,
        //     'X-Secret' => $secret,
        // ])
        //     ->withoutVerifying() // Отключение проверки сертификата
        //     ->post($url, $data);

        // if (!$response->successful()) {
        //     // Вывод статуса и тела ответа
        //     echo "Ошибка:\n";
        //     echo "HTTP статус: " . $response->status() . "\n";
        //     echo "Тело ответа: " . $response->body() . "\n";

        //     // Вывод дополнительной информации, если требуется
        //     if ($response->clientError()) {
        //         echo "Клиентская ошибка (4xx)\n";
        //     }
        //     if ($response->serverError()) {
        //         echo "Серверная ошибка (5xx)\n";
        //     }
        // }

        // Формирование Title
        $titleParts = [];

        // Формируем заголовок с приоритетом на персонализацию
        if ($name || $lastname) {
            $titleParts[] = trim("Свяжитесь с {$name} {$lastname}");
        } elseif ($organization) {
            $titleParts[] = "Контакты компании {$organization}";
        } else {
            $titleParts[] = "Контактный номер телефона";
        }

        if ($phone) {
            $titleParts[] = "({$phone})";
        }

        $title = implode(' ', array_filter($titleParts));

        // Формирование Description
        $titleParts = [];

        // Добавляем имя и фамилию
        if ($name) {
            $titleParts[] = $name;
        }
        if ($lastname) {
            $titleParts[] = $lastname;
        }

        // Добавляем организацию или комментарий
        if ($organization) {
            $titleParts[] = $organization;
        } elseif ($header) {
            $titleParts[] = $comment;
        }

        if ($phone) {
            $titleParts[] = $phone;
        }

        $title = implode(' ', $titleParts);

        // Формирование Description
        $descriptionParts = [];

        // Используем имя и фамилию
        if ($name) {
            $descriptionParts[] = $name;
        }
        if ($lastname) {
            $descriptionParts[] = $lastname;
        }

        // Добавляем организацию или комментарий
        if ($organization) {
            $descriptionParts[] = $organization;
        } elseif ($comment) {
            $descriptionParts[] = $comment;
        }

        // Добавляем телефон
        if ($phone) {
            $descriptionParts[] = $phone;
        }

        // Формируем итоговое описание
        $description = implode(' ', $descriptionParts);


        return view('pages.phones.show', compact('title', 'description', 'header', 'comment', 'phone', 'name', 'lastname', 'organization', 'email', 'website', 'address', 'qrcode'));
    }

    public function qrcode(Request $request)
    {
        $vCardData = "BEGIN:VCARD\nVERSION:3.0\n";

        // Основные данные
        $vCardData .= $request->has('ln') || $request->has('fn')
            ? "N:{$request->input('ln', '')};{$request->input('fn', '')}\n"
            : "";
        $vCardData .= $request->has('fn') || $request->has('ln')
            ? "FN:{$request->input('fn', '')} {$request->input('ln', '')}\n"
            : "";

        // Организация и должность
        $vCardData .= $request->has('org') ? "ORG:{$request->org}\n" : "";
        $vCardData .= $request->has('ttl') ? "TITLE:{$request->ttl}\n" : "";

        // Контакты
        $vCardData .= $request->has('work_phone') ? "TEL;WORK;VOICE:{$request->work_phone}\n" : "";
        $vCardData .= $request->has('home_phone') ? "TEL;HOME;VOICE:{$request->home_phone}\n" : "";
        $vCardData .= $request->has('tel') ? "TEL;CELL:{$request->tel}\n" : "";
        $vCardData .= $request->has('fax') ? "TEL;FAX:{$request->fax}\n" : "";
        $vCardData .= $request->has('eml') ? "EMAIL:{$request->eml}\n" : "";
        $vCardData .= $request->has('url') ? "URL:{$request->url}\n" : "";

        // Адрес
        if ($request->hasAny(['st', 'ct', 'rg', 'co'])) {
            $street = $request->input('st', '');
            $city = $request->input('ct', '');
            $region = $request->input('rg', '');
            $country = $request->input('co', '');
            $vCardData .= "ADR;WORK:;;$street;$city;$region;$country\n";
        }

        // День рождения
        $vCardData .= $request->has('date') ? "BDAY:{$request->date}\n" : "";

        // Фото
        $vCardData .= $request->has('photo') ? "PHOTO;VALUE=URI:{$request->photo}\n" : "";

        // Примечание
        $vCardData .= $request->has('nt') ? "NOTE:{$request->nt}\n" : "";

        // Социальные сети (неофициальное расширение X-SOCIALPROFILE)
        // $vCardData .= $request->has('instagram') ? "X-SOCIALPROFILE;type=instagram:{$request->instagram}\n" : "";
        // $vCardData .= $request->has('linkedin') ? "X-SOCIALPROFILE;type=linkedin:{$request->linkedin}\n" : "";
        // $vCardData .= $request->has('facebook') ? "X-SOCIALPROFILE;type=facebook:{$request->facebook}\n" : "";
        // $vCardData .= $request->has('phonetact') ? "X-SOCIALPROFILE;type=phonetact:{$request->twitter}\n" : "";

        // Завершение vCard
        $vCardData .= "END:VCARD";

        $builder = new Builder(
            writer: new PngWriter(),
            data: $vCardData,
            encoding: new Encoding('UTF-8'),
            errorCorrectionLevel: ErrorCorrectionLevel::High,
            size: 200,
            margin: 0

            // logoPath: storage_path('phonetact-qr.png'),
            // logoResizeToWidth: 55,
            // logoPunchoutBackground: true,
        );

        $result = $builder->build();

        $base64 = base64_encode($result->getString());

        // Возвращаем строку в представление
        return "data:image/png;base64,{$base64}";

        // Возвращаем изображение
        // return response($result->getString(), 200)
        //     ->header('Content-Type', 'image/png');
    }

    public function formatPhoneNumber(string $number): string
    {
        $digits = preg_replace('/\D/', '', $number);

        if (strpos($digits, '8') === 0) {
            $digits = '7' . substr($digits, 1);
        } elseif (strpos($digits, '7') !== 0) {
            $digits = '7' . $digits;
        }

        return '+' . $digits;
    }
}
