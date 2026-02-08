<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateCompteRequest;

class CompteController extends Controller
{
    
    function creer () {
return view('compte.creer');
}


function store (CreateCompteRequest $request) {
    

        $validated=$request->validated();
       
        

    return redirect()->route('compte.creer')->with('success','compte cree avec succès');
}
}
