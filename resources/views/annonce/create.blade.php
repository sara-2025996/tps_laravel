@extends('layout.master')

@section('content')

<div class="container">
    <h2>Nouvelle annonce</h2>

    <form method="post" action="{{ route('annonces.store') }}" enctype="multipart/form-data" >
        @csrf
       @include('annonce.form')

        <button type="submit" class="btn btn-primary mt-3">Ajouter</button>

    </form>

</div>

@endsection