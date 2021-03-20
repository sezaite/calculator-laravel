<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtimtisController extends Controller
{
    public function index($a, $b) {
        return view('calculator.atimtis', ['pirmas' => $a, 'antras' => $b]);
    }
}
