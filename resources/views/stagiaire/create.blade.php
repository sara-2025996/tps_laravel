@extends('layout.master')
@section('content')

<div class="container" >
    <form action="{{route('stagiaires.store')}}" method="post">
        
    @include('stagiaire.form')
        <button type="submit" class="btn btn-primary mt-3"> ajouter</button>
    </form>
</div>
    
@endsection