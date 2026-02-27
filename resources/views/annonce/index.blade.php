@extends('layout.master')
@section('content')
<div class="container" >
    @session('success')
        <p class="alert alert-success" > {{session('success')}}</p>
    @endsession


    <a href="{{route('annonces.create')}}" class="btn btn-primary" >ajouter</a>
    <a href="{{route('annonces.dashboard')}}" class="btn btn-primary" >dashboard</a>
    <table class="table table-spired" >
        <thead>
            <tr>
                <th>titre</th>
                <th>description</th>
                <th>image</th>
                <th>type</th>
                <th>ville</th>
                <th>superfice</th>
                <th>etat</th>
                <th>prix</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($annonces as $annonce)
            <tr>
                <td>{{$annonce->titre}}</td>
                <td>{{$annonce->description}}</td>
                <td>
                     @if($annonce->image)
                    <img src="{{asset('storage/'.$annonce->image)}}" width="80" alt="">
                    @endif
                </td>
                <td>{{$annonce->type}}</td>
                <td>{{$annonce->ville}}</td>
                <td>{{$annonce->superfice}}</td>
                <td>{{$annonce->etat?'neuf':'ancien'}}</td>
                <td>{{$annonce->prix}}</td>
                <td>
                    <a href="{{route('annonces.edit',['annonce'=>$annonce])}}" class="btn btn-warning"  >edite</a>
                    <a href="{{route('annonces.show',['annonce'=>$annonce])}}" class="btn btn-info"  >voir</a>
                    
                    <form action=" {{route('annonces.destroy',['annonce'=>$annonce])}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" >supprimer</button>
                    </form>
                </td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection