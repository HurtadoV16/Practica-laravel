<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create(){

        return view('Frmservice');

    }

    public function store(Request $request){
        $service = new Service();
        $service->fecha_realizacion=$request->fecha_realizacion;
        $service->save();

        return $service;

    }
}
