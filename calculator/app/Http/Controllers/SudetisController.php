<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SudetisController extends Controller
{
    public function index($a, $b) {
        return view('calculator.sudetis', ['pirmas' => $a, 'antras' => $b]);
    }
}
