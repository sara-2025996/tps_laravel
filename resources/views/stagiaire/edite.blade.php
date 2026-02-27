@extends('layout.master')
@section('content')

<div class="container" >
    <h2>modifier le stagiaire :</h2>
    <form action="{{route('stagiaires.update',['stagiaire'=>$stagiaire])}}" method="post">
        @csrf
        @method('put')
        @include('stagiaire.form')
       
        <button type="submit" class="btn btn-primary mt-3"> modifier</button>
    </form>
</div>
    
@endsection