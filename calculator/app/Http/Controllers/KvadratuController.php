<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KvadratuController extends Controller
{
    public function show(){
        $rez = Session::get('kvadratas', 'not found');//pasiimu is sesijos atsakyma
        Session::put('kvadratas', null); //isimu is sesijos reiksme ir 'sunaikinu'
        return view('kiti.kvadratu', ['r'->$rez]); //returninu vaizda su is formos(sesijos) istrauktu rezultatui. pasiunciu ji bleidui
    }

    public function calc(Request $request){
        $ats = $request->x * $request->x; //issitraukiu is requesto x (gaunu pagal formos name, Request klasej)
        Session::put('kvadratas', $ats); //idedu i sesija, key:kvardratas, reiksme:$ats
        return redirect()->back(); //redirectinu zingsniu atgal
    }
}
