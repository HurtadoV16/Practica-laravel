<?php

namespace App\Http\Controllers;

use App\Models\Soldier;
use Illuminate\Http\Request;

class SoldierController extends Controller
{
    public function create(){

        return view('Frmsoldier');

    }

    public function store(Request $request){
        $soldier = new Soldier();
        $soldier->nombre=$request->nombre;
        $soldier->apellidos=$request->apellidos;
        $soldier->grado=$request->grado;
        $soldier->save();
        return $soldier;

    }
}
