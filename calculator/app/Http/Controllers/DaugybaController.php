<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaugybaController extends Controller
{
    public function index($a, $b) {
        return view('calculator.daugyba', ['pirmas' => $a, 'antras' => $b]);
    }
}
