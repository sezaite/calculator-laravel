<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtimtisController extends Controller
{
    public function index($a, $b) {
        return view('calculator.atimtis', ['pirmas' => $a, 'antras' => $b]);
    }
}
//cia geriau parasyti atimti ir pasiusti kintamuosius, o ne bleide atimti