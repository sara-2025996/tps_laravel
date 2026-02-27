@extends('layout.master')
@section('content')

<div class="container" >
    <h2>le stagiaire : {{$stagiaire->nom}}</h2>
    <h3>
        <strong>genre : </strong>{{$stagiaire->genre}}
    </h3>
    <h3>
        <strong>note : </strong>{{$stagiaire->note}}
    </h3>


    <a href="{{route('stagiaires.index')}}" class="btn btn-secondary" >back</a>
</div>
    
@endsection