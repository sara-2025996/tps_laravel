@extends('layout.master')
@section('content')
<div class="container" >
    @session('success')
        <p class="alert alert-success" > {{session('success')}}</p>
    @endsession


    <a href="{{route('stagiaires.create')}}" class="btn btn-primary" >ajouter</a>
    <table class="table table-spired" >
        <thead>
            <tr>
                <th>nom</th>
                <th>genre</th>
                <th>note</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stagiaires as $stagiaire)
            <tr>
                <td>{{$stagiaire->nom}}</td>
                <td>{{$stagiaire->genre}}</td>
                <td>{{$stagiaire->note}}</td>
                <td>
                    <a href="{{route('stagiaires.edit',['stagiaire'=>$stagiaire])}}" class="btn btn-warning"  >edite</a>
                    <a href="{{route('stagiaires.show',['stagiaire'=>$stagiaire])}}" class="btn btn-info"  >voir</a>
                    <form action=" {{route('stagiaires.destroy',['stagiaire'=>$stagiaire])}}" method="post">
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