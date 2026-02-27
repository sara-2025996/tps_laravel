@extends('layout.master')
@section('content')


<ul>
    <li>
        <strong>total annonce:</strong> {{$stats['total']}}
    </li>
    <li>
        <strong>valeur total:</strong> {{$stats['prix_total']}}
    </li>
    <li>
       <strong>prix moyen:</strong> {{$stats['prix_moyen']}}
    </li>
    <li>
       <strong>superfice m²:</strong> {{$stats['prix_moyen']}}
    </li>
   
</ul>
    
@endsection