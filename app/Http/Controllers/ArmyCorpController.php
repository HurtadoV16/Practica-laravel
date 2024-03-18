<?php

namespace App\Http\Controllers;

use App\Models\Army_Corp;
use Illuminate\Http\Request;

class ArmyCorpController extends Controller
{
    public function create(){

        return view('Frmarmy_corp');

    }

    public function store(Request $request){
        $army_corp = new Army_Corp();
        $army_corp->denominacion=$request->denominacion;
        $army_corp->save();

        return $army_corp;

    }
}
