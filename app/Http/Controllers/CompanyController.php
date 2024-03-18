<?php

namespace App\Http\Controllers;

use App\Models\company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function create(){

        return view('Frmcompany');

    }

    public function store(Request $request){
        $company = new company();
        $company->actividad_principal=$request->actividad_principal;
        $company->save();

        return $company;

    }
}
