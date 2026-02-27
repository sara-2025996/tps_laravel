<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

 use Illuminate\Support\Facades\Storage;


class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $annonces=Annonce::all();
        return view('annonce.index',compact('annonces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('annonce.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image'=>'nullable|image|mimes:jpg,jpeg,png,gif|max:2048'
        ]);

         $path = null;
        if ($request->hasFile('image')) {
           $file=$request->file('image');
           $filename=Str::slug($request->titre) . '-' . time() . '.' . $file->getClientOriginalExtension();

           $path=$file->storeAs('annonces',$filename,'public');
        }
        $annonce=new Annonce();
        $annonce->titre=$request->titre;
        $annonce->description=$request->description;
        $annonce->type=$request->type;
        $annonce->ville=$request->ville;
        $annonce->superfice=$request->superfice;
        $annonce->etat=$request->etat;
        $annonce->prix=$request->prix;
        $annonce->image=$path;
        $annonce->save();

        return redirect()->route('annonces.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Annonce $annonce)
    {
        return view('annonce.voir',compact('annonce'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Annonce $annonce)
    {
        return view('annonce.edite',compact('annonce'));
        
    }

    /**
     * Update the specified resource in storage.
     */
   
public function update(Request $request, Annonce $annonce)
{
    $request->validate([
        'titre' => 'required',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048'
    ]);

    if ($request->hasFile('image')) {

        
        if ($annonce->image) {
            Storage::disk('public')->delete($annonce->image);
        }

        $file = $request->file('image');

        $filename = Str::slug($request->titre)
            . '-' . time()
            . '.' . $file->getClientOriginalExtension();

        $path = $file->storeAs('annonces', $filename, 'public');

        $annonce->image = $path;
    }

    $annonce->titre = $request->titre;
    $annonce->description=$request->description;
        $annonce->type=$request->type;
        $annonce->ville=$request->ville;
        $annonce->superfice=$request->superfice;
        $annonce->etat=$request->etat;
        $annonce->prix=$request->prix;
        $annonce->image=$path;
    $annonce->save();

    return redirect()->route('annonces.index');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Annonce $annonce)
    {
        if($annonce->image){
            Storage::disk('public')->delete($annonce->image);
        }
        $annonce->delete();
       return redirect()->route('annonces.index');
    }

    public function statique(){
        $stats=[
            'total'=>Annonce::count(),
            'prix_total'=>Annonce::sum('prix'),
            'prix_moyen'=>Annonce::avg('prix'),
            'superfice'=>Annonce::sum('superfice')
        ];
        return view('annonce.dashboard',compact('stats'));
    }
}
