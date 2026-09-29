<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $path = public_path('articles.json');
        $articles = json_decode(file_get_contents($path), true); // true преобразует JSON-объекты в ассоциативные массивы

        return view('main.hello', ['articles' => $articles]);
    }

    public function show($full_image){
        return view("main/galery", ["image" => $full_image]);
    }
}