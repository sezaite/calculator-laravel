<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class KvadratuController extends Controller
{
    public function show(){
        $rez = Session::get('ats', 'not found');//pasiimu is sesijos atsakyma
        Session::put('ats', null); //sesijos reiksme 'sunaikinu'
        return view('kiti.kvadratu', ['r'=>$rez]); //returninu vaizda su is formos(sesijos) istrauktu rezultatui. pasiunciu ji bleidui
    }

    public function calc(Request $request){
        $ats = $request->x * $request->x; //issitraukiu is requesto x (gaunu pagal formos name, Request klasej)
        Session::put('ats', $ats); //idedu i sesija, key:kvardratas, reiksme:$ats
        return redirect()->back(); //redirectinu zingsniu atgal
    }
}
