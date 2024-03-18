<?php

namespace App\Http\Controllers;

use App\Models\Barracks;
use Illuminate\Http\Request;

class BarracksController extends Controller
{
    public function create(){

        return view('Frmbarracks');

    }

    public function store(Request $request){
        $barracks = new Barracks();
        $barracks->nombre=$request->nombre;
        $barracks->ubicacion=$request->ubicacion;
        $barracks->save();

        return $barracks;

    }
}
