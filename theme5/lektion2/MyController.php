<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function submit(Request $request)
    {
        $data = $request->all();
        // Обработка данных формы
        return view('result', compact('data'));
    }
}
