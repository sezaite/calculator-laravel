<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DalybaController extends Controller
{
    public function index($a, $b) {
        return view('calculator.dalyba', ['pirmas' => $a, 'antras' => $b]); // ir toks uzrasymas jau sumeta kintamuosius i dalybos blade'a. bleide bus pasiekiamas su per key ($pirmas, $antras)
    }
}
