 <?php

use Illuminate\Support\Facades\Route;
{
Route::get('/home/{result?}', function ($result=null) {
    return view('calculatrice',compact('result'));
})->name('home');
}
Route::get('/calculatrice', function () {
    return view('calculatrice');
});
use Illuminate\Http\Request;
Route::post('/calculatrice', function (Request $request) {
    $a=$request->input('a');
    $b=$request->input('b');
    $op=$request->input('op');

    $res='';
    switch ($op) {
        case '+':
            $res=$a+$b;
            break;
        case '-':
            $res=$a-$b;
            break;
        case '*':
            $res=$a*$b;
            break;
        case '/':
            $res=$b>0? $a/$b:'division impossible';
            break;
        
        default:
            $re='0';
            break;
    }
    return redirect()->route('home',['result'=>$res]);
}); 


Route::get('/master', function () {
    return view('layout.master');
});

Route::view('/homee','homee');
Route::view('/about','about');
Route::view('/product/creat','creat');

use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class , 'index'] );
Route::get('/product/{id}', [ProductController::class , 'show'] ) ->name('products.show');

Route::get('/product/creat', [ProductController::class , 'creat'] ) ->name('products.creat');
Route::post('/product/creat', [ProductController::class , 'store'] ) ->name('products.store');

// etudients
use App\Http\Controllers\EtudientController;

Route::view('/etudient/ajouter','ajouter');
Route::get('/etudient/ajouter', [EtudientController::class , 'ajouter'])->name('etudient.ajouter');
Route::post('/etudient/ajouter', [EtudientController::class , 'store'])->name('etudient.store');

//compte
use App\Http\Controllers\CompteController;

Route::view('/compte/creer','creer');
Route::get('/compte/creer', [CompteController::class , 'creer'])->name('compte.creer');
Route::post('/compte/creer', [CompteController::class , 'store'])->name('compte.store');

//strudent
use App\Http\Controllers\StudentController;
Route::resource('students',StudentController::class);

//stagiaire
use App\Http\Controllers\StagiaireController;
Route::resource('stagiaires',StagiaireController::class);

//ANNONCE
use App\Http\Controllers\AnnonceController;
Route::get('/annonces/dashboard',[AnnonceController::class, 'statique'])->name('annonces.dashboard');
Route::resource('annonces',AnnonceController::class);



