@extends('layout.master')
@section('content')

<div class="container" >
    <h2>le titre : {{$annonce->titre}}</h2>
    <h3>
        <strong>Description : </strong>{{$annonce->description}}
    </h3>
    <h3>
        <strong>Type : </strong>{{$annonce->type}}
    </h3>
     <h3>
        <strong>Ville : </strong>{{$annonce->ville}}
    </h3>
     <h3>
        <strong>Superficie : </strong>{{$annonce->superfice}}
    </h3>
     <h3>
        <strong>Etat : </strong>{{$annonce->etat}}
    </h3>


    <a href="{{route('annonces.index')}}" class="btn btn-secondary" >back</a>
</div>
    
@endsection