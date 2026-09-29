<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);
Route::get('/galery/{full_image}', [MainController::class, 'show']);

Route::get('/about', function () {
    return view('main.about');
});

Route::get('/contact', function () {
    $contact = [
        'name' => 'Polytech',
        'adres' => 'B.Semenovskay',
        'phone' => '8(495) 423-2323',
        'email' => '@mospolytech.ru',
        'student' => 'Goncharyuk Vadim',
        'group' => '251-3210',
    ];

    return view('main.contact', ['contact' => $contact]);
});
