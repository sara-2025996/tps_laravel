<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateEtudientRequest;


class EtudientController extends Controller
{
    
function ajouter () {
return view('etudients.ajouter');
}


function store (CreateEtudientRequest $request) {
    

        $validated=$request->validated();
       
        

    return redirect()->route('etudient.ajouter')->with('success','etudient ajouté avec succès');
}

}


